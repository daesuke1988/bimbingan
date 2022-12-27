<?php if (!defined('BASEPATH')) exit('No Direct script access allowed');
class Rekapmodels extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // menampilkan jumlah mhasiswa yang masuk berstatus bimbingan
    function jml_mhs_bimbingan($tahun = null, $semester = null)
    {
        $where_tahun_skripsi = '';
        $where_tahun_kp = '';
        $where_tahun_kkl = '';
        $where_semester_skripsi = '';
        $where_semester_kp = '';
        $where_semester_kkl = '';

        if ($tahun) {
            $where_tahun_skripsi = "WHERE v_rekap_count_jml_bimbingan_skripsi.tahun = '$tahun'";
            $where_tahun_kp = "WHERE v_rekap_count_jml_bimbingan_kp.tahun = '$tahun'";
            $where_tahun_kkl = "WHERE v_rekap_count_jml_bimbingan_kkl_individu.tahun = '$tahun'";
        }
        if ($semester) {
            $where_semester_skripsi = "AND v_rekap_count_jml_bimbingan_skripsi.semester = '$semester'";
            $where_semester_kp = "AND v_rekap_count_jml_bimbingan_kp.semester = '$semester'";
            $where_semester_kkl = "AND v_rekap_count_jml_bimbingan_kkl_individu.semester = '$semester'";
        }
        $query = $this->db->query("SELECT concat(d.gelar_depan || '' || d.nmdos || ', ' || d.gelar_belakang) AS dosen, d.nodos,
            CASE
                WHEN v_skripsi.jml_mhs_s IS NULL THEN '0'
                ELSE v_skripsi.jml_mhs_s
            END AS jml_mhs_s,
            CASE
                WHEN v_kp.jml_mhs_kp IS NULL THEN '0'
                ELSE v_kp.jml_mhs_kp
            END AS jml_mhs_kp,
            CASE
                WHEN v_kkl.jml_mhs_kkl IS NULL THEN '0'
                ELSE v_kkl.jml_mhs_kkl
            END AS jml_mhs_kkl
            FROM dosen d
            LEFT JOIN
            (SELECT COUNT(nim) as jml_mhs_s, npp_dosen, tahun, semester, dosen FROM v_rekap_count_jml_bimbingan_skripsi
            $where_tahun_skripsi $where_semester_skripsi
            GROUP BY npp_dosen, tahun, semester, dosen)v_skripsi ON v_skripsi.npp_dosen = d.nodos
            LEFT JOIN
            (SELECT COUNT(nim) as jml_mhs_kp, npp_dosen, tahun, semester FROM v_rekap_count_jml_bimbingan_kp
            $where_tahun_kp $where_semester_kp
            GROUP BY npp_dosen, tahun, semester)v_kp ON v_kp.npp_dosen = d.nodos
            LEFT JOIN (SELECT COUNT(nim) as jml_mhs_kkl, npp_dosen, tahun, semester FROM v_rekap_count_jml_bimbingan_kkl_individu
            $where_tahun_kkl $where_semester_kkl
            GROUP BY npp_dosen, tahun, semester)v_kkl ON v_kkl.npp_dosen = d.nodos
            WHERE v_skripsi.jml_mhs_s IS NOT NULL OR jml_mhs_kp IS NOT NULL OR jml_mhs_kkl IS NOT NULL
            ");
        return $query;
    }

    // menampilkan data jumlah bimbingn dosen
    function jml_bimbingan_kp($tahun = null, $semester = null)
    {
        $group = $this->session->userdata('group_id');
        $npp = $this->session->userdata('username');
        if ($group == '4') {
            $this->db->where('npp_dosen', $npp);
        }

        if ($tahun) {
            $this->db->where('tahun', $tahun);
        }
        if ($semester) {
            $this->db->where('semester', $semester);
        }


        $this->db->select('*');
        $this->db->order_by('dosen', 'ASC');
        $this->db->order_by('tahun', 'DESC');
        $this->db->order_by('semester', 'DESC');
        $query = $this->db->get('v_rekap_count_jml_bimbingan_kp');
        return $query;
    }
    // menampilkan data jumlah bimbingn dosen
    function jml_bimbingan_skripsi($tahun = null, $semester = null)
    {
        $group = $this->session->userdata('group_id');
        $npp = $this->session->userdata('username');
        if ($group == '4') {
            $this->db->where('npp_dosen', $npp);
        }

        if ($tahun) {
            $this->db->where('tahun', $tahun);
        }
        if ($semester) {
            $this->db->where('semester', $semester);
        }
        $this->db->select('*');
        $this->db->order_by('dosen', 'ASC');
        $this->db->order_by('tahun', 'DESC');
        $this->db->order_by('semester', 'DESC');
        $query = $this->db->get('v_rekap_count_jml_bimbingan_skripsi');
        return $query;
    }
    // menampilkan data jumlah bimbingn dosen
    function jml_bimbingan_kkl_individu($tahun = null, $semester = null)
    {
        $group = $this->session->userdata('group_id');
        $npp = $this->session->userdata('username');
        if ($group == '4') {
            $this->db->where('npp_dosen', $npp);
        }

        if ($tahun) {
            $this->db->where('tahun', $tahun);
        }
        if ($semester) {
            $this->db->where('semester', $semester);
        }
        $this->db->select('*');
        $this->db->order_by('dosen', 'ASC');
        $this->db->order_by('tahun', 'DESC');
        $this->db->order_by('semester', 'DESC');
        $query = $this->db->get('v_rekap_count_jml_bimbingan_kkl_individu');
        return $query;
    }
    // menampilkan data jumlah bimbingn dosen
    function jml_bimbingan_kkl_kelompok($tahun = null, $semester = null)
    {
        $group = $this->session->userdata('group_id');
        $npp = $this->session->userdata('username');
        if ($group == '4') {
            $this->db->where('npp_dosen', $npp);
        }

        if ($tahun) {
            $this->db->where('tahun', $tahun);
        }
        if ($semester) {
            $this->db->where('semester', $semester);
        }
        $this->db->select('*');
        $this->db->order_by('dosen', 'ASC');
        $this->db->order_by('tahun', 'DESC');
        $this->db->order_by('semester', 'DESC');
        $query = $this->db->get('v_rekap_count_jml_bimbingan_kkl_kelompok');
        return $query;
    }
}
