<?php if (!defined('BASEPATH')) exit('No Direct script access allowed');
class Akademikmodels extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function dosen()
    {
        $query = $this->db->query("
            SELECT concat(gelar_depan||' '||nmdos||' '||gelar_belakang) as nm_dosen, id FROM dosen ORDER BY nmdos ASC
        ");
        return $query->result_array();
    }

    function biodata($nim)
    {
        $query = $this->db->query(
            "SELECT m.nim, m.namamhs as nm_mhs, p.nama as nm_prodi FROM mhs m
            LEFT JOIN prodi p ON p.id = m.kdpst
            WHERE m.nim = '$nim'"
        );
        return $query->row_array();
    }

    function data_studi($nim)
    {
        $query = $this->db->query("
            SELECT m.nim, sum(sks) as sks_total, sum(kn.bobot * ds.sks)/sum(sks) as ipk FROM data_studi ds
            LEFT JOIN krs k on k.id = ds.id_krs
            LEFT JOIN mhs m ON m.id = k.id_mhs
            LEFT JOIN konversi_nilai kn ON kn.id = ds.id_konversi
            WHERE m.nim = '$nim' AND concat(k.tahun||''||k.semester) < '20221'
            GROUP BY m.nim
        ");
        return $query->row_array();
    }

    function cek_krs_kp($nim)
    {
        $query = $this->db->query("
            SELECT m.nim, ds.nama, k.tahun, k.semester FROM data_studi ds
            LEFT JOIN krs k on k.id = ds.id_krs
            LEFT JOIN mhs m ON m.id = k.id_mhs
            WHERE m.nim = '$nim' AND k.tahun = '2022' AND k.semester = '1' AND ds.nama ILIKE 'Kerja Praktek'
        ");
        return $query->row_array();
    }

    function cek_krs_kkl($nim, $tahun, $semester)
    {
        $query = $this->db->query("
            SELECT m.nim, ds.nama, k.tahun, k.semester FROM data_studi ds
            LEFT JOIN krs k on k.id = ds.id_krs
            LEFT JOIN mhs m ON m.id = k.id_mhs
            WHERE m.nim = '$nim' AND k.tahun = '$tahun' AND k.semester = '$semester' AND (ds.nama ILIKE 'Kuliah Kerja Lapang' or ds.nama ILIKE 'KKL')
        ");
        return $query->row_array();
    }

    // cek id user dosen
    function cek_id_user($npp)
    {
        $this->db->where('username', $npp);
        $query = $this->db->get('users');
        return $query->row_array();
    }

    // menampilkan nim
    function mhs()
    {
        $query = $this->db->get('mhs');
        return $query;
    }

    // cek pembayaran kp
    function cek_pembayaran_kp($nim, $tahun, $semester)
    {
        $this->db->where('jenis_pembayaran', 'Kerja Praktek');
        $this->db->where('nim', $nim);
        $this->db->where('tahun', $tahun);
        $this->db->where('semester', $semester);
        $query = $this->db->get('pembayaran');
        return $query->row_array();
    }
    // cek pembayaran kkl
    function cek_pembayaran_kkl($nim, $tahun, $semester)
    {
        $this->db->where('jenis_pembayaran', 'KKL');
        $this->db->where('nim', $nim);
        $this->db->where('tahun', $tahun);
        $this->db->where('semester', $semester);
        $query = $this->db->get('pembayaran');
        return $query->row_array();
    }
    // cek pembayaran skripsi
    function cek_pembayaran_skripsi($nim, $tahun, $semester)
    {
        $this->db->where('jenis_pembayaran', 'Skripsi');
        $this->db->where('nim', $nim);
        $this->db->where('tahun', $tahun);
        $this->db->where('semester', $semester);
        $query = $this->db->get('pembayaran');
        return $query->row_array();
    }
}
