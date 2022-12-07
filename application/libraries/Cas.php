<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function cas_show_config_error(){
	show_error("CAS authentication is not properly configured.<br /><br />
	Please, check your configuration for the following file:
	<code>config/cas.php</code>
	The minimum configuration requires:
	<ul>
	   <li><em>cas_server_url</em>: the <strong>URL</strong> of your CAS server</li>
	   <li><em>phpcas_path</em>: path to a installation of
	       <a href=\"https://wiki.jasig.org/display/CASC/phpCAS\">phpCAS library</a></li>
	    <li>and one of <em>cas_disable_server_validation</em> and <em>cas_ca_cert_file</em>.</li>
	</ul>
	");
}

class Cas {
        
        public $CASUSER;
        
	public function __construct($args){
            
                $this->CASUSER = new stdClass();
                $this->CASUSER->userlogin = "";
                $this->CASUSER->attributes = array();
                $this->CASUSER->local_account = "";
        
		if (!function_exists('curl_init')){
			show_error('<strong>ERROR:</strong> You need to install the PHP module
				<strong><a href="http://php.net/curl">curl</a></strong> to be able
				to use CAS authentication.');
		}
		$CI =& get_instance();
		$this->CI = $CI;
		$CI->config->load('cas');

		$this->phpcas_path = $CI->config->item('phpcas_path');
		$this->cas_server_url = $CI->config->item('cas_server_url');

		if (empty($this->phpcas_path) 
			or filter_var($this->cas_server_url, FILTER_VALIDATE_URL) === FALSE) {
			cas_show_config_error();
		}
		$cas_lib_file = $this->phpcas_path . '/CAS.php';
		if (!file_exists($cas_lib_file)){
			show_error("<strong>ERROR:</strong> Could not find a file <em>CAS.php</em> in directory
				<strong>$this->phpcas_path</strong><br /><br />
				Please, check your config file <strong>config/cas.php</strong> and make sure the
				configuration <em>phpcas_path</em> is a valid phpCAS installation.");
		}
		require_once $cas_lib_file;

		if ($CI->config->item('cas_debug')) {
			phpCAS::setDebug();
		}

		// init CAS client
		$defaults = array('path' => '', 'port' => 443);
		$cas_url = array_merge($defaults, parse_url($this->cas_server_url));

		phpCAS::client(CAS_VERSION_2_0, $cas_url['host'],
			$cas_url['port'], $cas_url['path'],$args['changeSessionId']);

		// configures SSL behavior
		if ($CI->config->item('cas_disable_server_validation')){
			phpCAS::setNoCasServerValidation();
		} else {
			$ca_cert_file = $CI->config->item('cas_server_ca_cert');
			if (empty($ca_cert_file)) {
				cas_show_config_error();
			}
			phpCAS::setCasServerCACert($ca_cert_file);
		}
	}

	/**
	  * Trigger CAS authentication if user is not yet authenticated.
	  */
    public function force_auth()
    {
    	phpCAS::forceAuthentication();
    }

    /**
     *  Return 
     */
    public function user()
    {
    	if (phpCAS::isAuthenticated()) {
	    $this->CASUSER->userlogin = phpCAS::getUser();
            $this->CASUSER->attributes = phpCAS::getAttributes();
            return (object) array('userlogin' => $this->CASUSER->userlogin,
                        'attributes' => $this->CASUSER->attributes);
    	} else {
    		show_error("User was not authenticated yet.");
    	}
    }

    /**
     *  Logout and redirect to the main site URL,
     *  or to the URL passed as argument
     */
    public function logout($url = '')
    {
    	if (empty($url)) {
            $this->CI->load->helper('url');
            $url = base_url();
	}
    	phpCAS::logoutWithRedirectService($url);
    }

    public function is_authenticated()
    {
    	return phpCAS::isAuthenticated();
    }
    
    public function authenticate() {
        return phpCAS::checkAuthentication();
   }
    
    public function is_registered() {
        $check = $this->CI->db->from('users')->where('username', $this->CASUSER->userlogin)->or_where("email",$this->CASUSER->userlogin)->get();
        if ((int) $check->num_rows() > (int) 0) {
            $this->CASUSER->local_account = $check->row();
            return TRUE;
        }
        return FALSE;
    }

    public function cas_login() {
        $user_groups = array();
        $sql = $this->CI->db->get_where('user_groups',array('user_id'=>$this->CASUSER->local_account->user_id));
        foreach ( $sql->result() as $row){
            $user_groups[] = $row->group_id;
        }
        $sql = $this->CI->db->get_where('user_setting', array('user_id' => $this->CASUSER->local_account->user_id));
        $user_setting = array();
        foreach($sql->result() as $row){
            $user_setting[$row->setting_name] = $row->setting_value;
        }
        $session_data = array(
            'user_id' => $this->CASUSER->local_account->user_id,
            'usertitle' => $this->CASUSER->local_account->usertitle,
            'username' => $this->CASUSER->local_account->username,
            'id_satker' => $this->CASUSER->local_account->id_satker,
            'usergroup' => $user_groups,
            'usersetting' => $user_setting
        );
        $this->CI->session->set_userdata($session_data);
        return true;
    }
}
