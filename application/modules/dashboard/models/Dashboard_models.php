<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: kresna
 * Date: 9/7/2015
 * Time: 8:44 AM
 */

class Dashboard_models extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get_kp()
    {
        $this->db->select("COUNT(*) as jml, approv_dosen, CASE
                WHEN approv_dosen = 't' THEN 'Selesai'
                ELSE
                    'Belum Selesai'
            END as label");
        $this->db->where('approv_kaprodi', 't');
        $this->db->where('tahun', '2022');
        $this->db->where('semester', '1');
        $this->db->group_by('approv_dosen');
        $query = $this->db->get('kerja_praktek');
        return $query;
    }

    function get_skripsi()
    {
        $this->db->select("COUNT(*) as jml, approv_dosen, CASE
                WHEN approv_dosen = 't' THEN 'Selesai'
                ELSE
                    'Belum Selesai'
            END as label");
        $this->db->where('approv_kaprodi', 't');
        $this->db->where('tahun', '2022');
        $this->db->where('semester', '1');
        $this->db->group_by('approv_dosen');
        $query = $this->db->get('skripsi');
        return $query;
    }

    function get_kkl_individu()
    {
        $this->db->select("COUNT(*) as jml, pk.approv_dosen, CASE
                WHEN pk.approv_dosen = 't' THEN 'Selesai'
                ELSE
                    'Belum Selesai'
            END as label");
        $this->db->join('pembimbing_kkl pk', 'pk.id_kkl = kkl.id', 'left');
        $this->db->where('kkl.approv_wakademik', 't');
        $this->db->where('kkl.kategori', 'i');
        $this->db->where('tahun', '2022');
        $this->db->where('semester', '1');
        $this->db->group_by('pk.approv_dosen');
        $query = $this->db->get('kkl');
        return $query;
    }

    function get_kkl_kelompok()
    {
        $this->db->select("COUNT(*) as jml, approv_dosen, CASE
                WHEN approv_dosen = 't' THEN 'Selesai'
                ELSE
                    'Belum Selesai'
            END as label");
        $this->db->where('tahun', '2022');
        $this->db->where('semester', '1');
        $this->db->group_by('approv_dosen');
        $query = $this->db->get('kelompok_kkl');
        return $query;
    }

    // jml mhs bimbingan kp dosen
    function view_jml_kp()
    {
        $npp = $this->session->userdata('username');
        $this->db->select('COUNT(nim) as jml');
        $this->db->where('npp_dosen', $npp);
        $query = $this->db->get('v_rekap_count_jml_bimbingan_kp');
        return $query->row_array();
    }
    function view_jml_skripsi()
    {
        $npp = $this->session->userdata('username');
        $this->db->select('COUNT(nim) as jml');
        $this->db->where('npp_dosen', $npp);
        $query = $this->db->get('v_rekap_count_jml_bimbingan_skripsi');
        return $query->row_array();
    }
    function view_jml_individu()
    {
        $npp = $this->session->userdata('username');
        $this->db->select('COUNT(nim) as jml');
        $this->db->where('npp_dosen', $npp);
        $query = $this->db->get('v_rekap_count_jml_bimbingan_kkl_individu');
        return $query->row_array();
    }
    function view_jml_kelompok()
    {
        $npp = $this->session->userdata('username');
        $this->db->select('COUNT(id_kelompok_kkl) as jml');
        $this->db->where('npp_dosen', $npp);
        $query = $this->db->get('v_rekap_count_jml_bimbingan_kkl_kelompok');
        return $query->row_array();
    }

    // waktu bimbingan mhs
    function time_skripsi()
    {
        $nim = $this->session->userdata('username');
        $query = $this->db->query(
            "SELECT id_s, nim, tgl_awal, tgl_akhir FROM 	
            (SELECT max(id) as id_s, nim FROM skripsi s GROUP BY nim) v_skripsi
            LEFT JOIN sk_skripsi sk ON sk.id_skripsi = v_skripsi.id_s
            where v_skripsi.nim = '$nim' ORDER BY id_s DESC LIMIT 1
            "
        );
        return $query->row_array();
    }

    function time_kp()
    {
        $nim = $this->session->userdata('username');
        $query = $this->db->query(
            "SELECT id_s, nim, tgl_awal, tgl_akhir FROM
            (SELECT max(id) as id_s, id_kp FROM sk_kerjapraktek GROUP BY id_kp) v_sk
            LEFT JOIN sk_kerjapraktek sk ON sk.id = v_sk.id_s
            LEFT JOIN kerja_praktek s ON s.id = sk.id_kp
            where s.nim = '$nim' ORDER BY id_s DESC LIMIT 1
            "
        );
        return $query->row_array();
    }

    function time_individu()
    {
        $nim = $this->session->userdata('username');
        $query = $this->db->query(
            "SELECT nim, tgl_awal, tgl_akhir FROM kkl 
            LEFT JOIN pembimbing_kkl pk on pk.id_kkl = kkl.id
            WHERE kkl.nim = '$nim' AND kkl.kategori = 'i'
            "
        );
        return $query->row_array();
    }

    function time_kelompok()
    {
        $nim = $this->session->userdata('username');
        $query = $this->db->query(
            "SELECT km.nim as nim_km, tgl_awal, tgl_akhir FROM kelompok_kkl kk
            LEFT JOIN kelompok_mhs km ON km.id_kelompok_kkl = kk.id
            LEFT JOIN kkl ON kkl.id = km.id_kkl
            WHERE km.nim = '$nim' AND kkl.kategori = 'k'
            "
        );
        return $query->row_array();
    }
}
