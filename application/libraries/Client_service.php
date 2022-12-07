<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed"); 

class Client_service {
	
	public $index;
	
	public function __construct()	{
		$this->CI =& get_instance();
	}
	
	function siap($path,$method = "GET", $data = NULL) { 
		$this->server ="http://api.siap.uny.ac.id/";	
		$headers = array(
			"Accept:"."application/json",
            "content-type:"."application/x-www-form-urlencoded",
			"X-Authorization:"."4k0so8gscks8s4g80g80o80sccoc0g8okss484swgswcgogsccs4w84o0k84w8sc",
			"X-Appname:"."PUSKOM-AG",
			"X-Date:".gmdate("d M Y H:i:s")."Z"
        );	
        $ch   = curl_init();
		curl_setopt($ch, CURLOPT_URL,$this->server.$path);
		curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
		switch($method) {
            case "GET":
                break;
            case "POST":
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
                break;
            case "PUT":
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"PUT");
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                break;
            case "DELETE":
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
                break;
        }
        $result = curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE); 
		return json_decode($result);
    }
	
	function siap_all($path) {	
        return $this->siap($path);
    }
	
	function siap_where($path,$params) {
		return $this->siap($path."?data=".json_encode($params));
    }
	function siap_post($path,$params) {		
        return $this->siap($path,"POST",http_build_query(array("data"=>json_encode($params)),"","&"));
    }
	function siap_put($path,$id,$params)  {		
        return $this->siap($path."?id=".$id,"PUT",http_build_query(array("data"=>json_encode($params)),"","&"));
    }
	
	function siap_delete($path,$id)  {
        return $this->siap($path."?id=".$id,"DELETE");
    }
}

/* End of file Service.php */