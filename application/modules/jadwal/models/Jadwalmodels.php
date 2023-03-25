<?php if (!defined('BASEPATH')) exit('No Direct script access allowed');
class jadwalmodels extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get_all()
    {
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('jadwal');
        return $query;
    }

    public function insert($data)
    {
        $this->db->insert('jadwal', $data);
        return @$this->db->insert_id();
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('jadwal', $data);
    }

    /*
     * function menghapus data pembayaran
     */
    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('jadwal');
    }

    // menampilkan detail kerja praktek berdasarkan id
    function findbyid($id)
    {
        $this->db->where('kp.id', $id);
        $query = $this->db->get('jadwal kp');
        return $query->row_array();
    }

    /*
     * download file
     */
    function cekFile($id)
    {
        $this->db->from('jadwal');
        $this->db->where('id', $id);
        $data = $this->db->get();
        if ($data->num_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function getFileInfo($id)
    {
        $this->db->select('image,filename');
        $this->db->from('jadwal');
        $this->db->where('id', $id);
        $data = $this->db->get();
        $row = $data->row();
        $data2['name'] = $row->filename;
        $data2['full_path'] = $row->image;
        return $data2;
    }

    // user
    function get_all_user()
    {
        $this->db->select('id, username, nama_lengkap');
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get('users');
        return $query;
    }

    public function insert_penerima($data)
    {
        $this->db->insert('view_jadwal', $data);
        return @$this->db->insert_id();
    }

    public function penerima($id_jadwal)
    {
        $this->db->select('vj.id as id_vj, username, nama_lengkap');
        $this->db->join('users u', 'u.id = vj.id_user');
        $this->db->where('id_jadwal', $id_jadwal);
        $this->db->order_by('vj.id', 'ASC');
        $query = $this->db->get('view_jadwal vj');
        return $query;
    }

    function jadwal_by_penerima()
    {
        $id_user = $this->session->userdata('id_user');
        $this->db->select('u.id as id, keterangan, date, image');
        $this->db->join('jadwal u', 'u.id = vj.id_jadwal');
        $this->db->where('vj.id_user', $id_user);
        $this->db->order_by('vj.id', 'ASC');
        $query = $this->db->get('view_jadwal vj');
        return $query;
    }

    function delete_vj($id)
    {
        $this->db->where('id_jadwal', $id);
        $this->db->delete('view_jadwal');
    }

    function penerima_delete_vj($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('view_jadwal');
    }
}
