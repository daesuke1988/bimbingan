<?php if (!defined('BASEPATH')) exit('No Direct script access allowed');
class Configmodels extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function config()
    {
        $this->db->where('status', 't');
        $this->db->order_by('tahun', 'desc');
        $this->db->limit('1');
        $query = $this->db->get('config_krs');
        return $query->row_array();
    }
}
