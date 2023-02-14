<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class pembayaran_models extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /*
     * function menampilkan data pembayaran users
     */
    function get_all_pembayaran($jenis_pembayaran = null, $approv_dosen = null)
    {
        if ($jenis_pembayaran) {
            $this->db->where('jenis_pembayaran', $jenis_pembayaran);
        }
        if ($approv_dosen) {
            if ($approv_dosen == 't') {
                $this->db->where('approv_dosen', $approv_dosen);
            } else {
                $this->db->where('approv_dosen IS NULL');
            }
        }
        $this->db->order_by('id', 'asc');
        $query = $this->db->get('v_pembayaran');
        return $query;
    }

    /*
     * function menampilkan data per id
     */
    function findbyid($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('pembayaran');
        return $query->row_array();
    }

    /*
     * function menambahkan data pembayaran
     */
    function insert($data)
    {
        $this->db->insert('pembayaran', $data);
    }

    /*
     * function untuk mengganti data pembayaran
     */
    function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('pembayaran', $data);
    }

    /*
     * function menghapus data pembayaran
     */
    function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pembayaran');
    }

    /*
     * membatasi pembayaran yang sama
     */
    function isExists($nim, $jenis, $tahun, $semester)
    {
        $this->db->from('pembayaran');
        $this->db->where('nim', $nim);
        $this->db->where('jenis_pembayaran', $jenis);
        $this->db->where('tahun', $tahun);
        $this->db->where('semester', $semester);
        $num = $this->db->count_all_results();
        if ($num == 0) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    /*
     * cek apakah laporan sudah siap sudah disidangkan atau belum
     */
    function cek_approv($nim, $jenis_pembayaran)
    {
        $this->db->where('nim', $nim);
        $this->db->where('jenis_pembayaran', $jenis_pembayaran);
        $this->db->order_by('id', 'DESC');
        $this->db->limit('1');
        $query = $this->db->get('v_pembayaran');
        return $query->row_array();
    }
}
