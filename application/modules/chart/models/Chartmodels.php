<?php if (!defined('BASEPATH')) exit('No Direct script access allowed');
class Chartmodels extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get_kp($tahun = null, $semester = null)
    {
        if ($tahun) {
            $this->db->where('tahun', $tahun);
        }
        if ($semester) {
            $this->db->where('semester', $semester);
        }
        $this->db->select("COUNT(*) as jml, approv_dosen, CASE
                WHEN approv_dosen = 't' THEN 'Selesai'
                ELSE
                    'Belum Selesai'
            END as label");
        $this->db->where('approv_kaprodi', 't');
        $this->db->group_by('approv_dosen');
        $query = $this->db->get('kerja_praktek');
        return $query;
    }
    function get_skripsi($tahun = null, $semester = null)
    {
        if ($tahun) {
            $this->db->where('tahun', $tahun);
        }
        if ($semester) {
            $this->db->where('semester', $semester);
        }
        $this->db->select("COUNT(*) as jml, approv_dosen, CASE
                WHEN approv_dosen = 't' THEN 'Selesai'
                ELSE
                    'Belum Selesai'
            END as label");
        $this->db->where('approv_kaprodi', 't');
        $this->db->group_by('approv_dosen');
        $query = $this->db->get('skripsi');
        return $query;
    }

    function get_kkl_individu($tahun = null, $semester = null)
    {
        if ($tahun) {
            $this->db->where('tahun', $tahun);
        }
        if ($semester) {
            $this->db->where('semester', $semester);
        }
        $this->db->select("COUNT(*) as jml, pk.approv_dosen, CASE
                WHEN pk.approv_dosen = 't' THEN 'Selesai'
                ELSE
                    'Belum Selesai'
            END as label");
        $this->db->join('pembimbing_kkl pk', 'pk.id_kkl = kkl.id', 'left');
        $this->db->where('kkl.approv_wakademik', 't');
        $this->db->where('kkl.kategori', 'i');
        $this->db->group_by('pk.approv_dosen');
        $query = $this->db->get('kkl');
        return $query;
    }

    function get_kkl_kelompok($tahun = null, $semester = null)
    {
        if ($tahun) {
            $this->db->where('tahun', $tahun);
        }
        if ($semester) {
            $this->db->where('semester', $semester);
        }
        $this->db->select("COUNT(*) as jml, approv_dosen, CASE
                WHEN approv_dosen = 't' THEN 'Selesai'
                ELSE
                    'Belum Selesai'
            END as label");
        $this->db->group_by('approv_dosen');
        $query = $this->db->get('kelompok_kkl');
        return $query;
    }
}
