<?php if (!defined('BASEPATH')) exit('No Direct script access allowed');
class Accmodels extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get_kp($tahun = null, $semester = null)
    {
        $group = $this->session->userdata('group_id');
        $npp = $this->session->userdata('username');
        $where_dosen = '';
        if ($group == '5') {
            $where_dosen = "AND d.npp = '$npp'";
        }

        $where_tahun_kp = '';
        $where_semester_kp = '';
        if ($tahun) {
            $where_tahun_kp = "AND s.tahun = '$tahun'";
        }
        if ($semester) {
            $where_semester_kp = "AND s.semester = '$semester'";
        }
        $query = $this->db->query("
        SELECT s.id as id_kp, s.nim, s.nama, p.nama as nm_prodi, s.judul, s.lokasi, s.tahun, s.semester, DATE(s.time_approv_dosen) as tgl_approv, sk.tgl_awal,
                CASE 
                    WHEN v_bimb.jml_bimbingan IS NULL THEN '0'
                    ELSE v_bimb.jml_bimbingan
                END AS jml_bimbingan,
                CASE
                    WHEN pk.status1 = true THEN concat((((d1.gelar_depan::text || ''::text) || d1.nmdos::text) || ', '::text) || d1.gelar_belakang::text)
                    WHEN pk.status2 = true THEN concat((((d2.gelar_depan::text || ''::text) || d2.nmdos::text) || ', '::text) || d2.gelar_belakang::text)
                    ELSE 'dosen belum disetujui'::text
                END AS dosen,
                CASE
                    WHEN pk.status1 = true THEN d1.nodos
                    WHEN pk.status2 = true THEN d2.nodos
                    ELSE ''::character varying
                END AS npp_dosen
        FROM kerja_praktek s
            LEFT JOIN pembimbing_kp pk ON pk.id_kp = s.id
            LEFT JOIN dosen d1 ON d1.id = pk.id_dosen1
            LEFT JOIN dosen d2 ON d2.id = pk.id_dosen2
            LEFT JOIN mhs m ON m.nim = s.nim
            LEFT JOIN prodi p ON p.id = m.kdpst
            LEFT JOIN ( SELECT max(sk_kerjapraktek.id) AS id_sk,sk_kerjapraktek.id_kp
                FROM sk_kerjapraktek
                GROUP BY sk_kerjapraktek.id_kp) skp ON skp.id_kp = s.id
            LEFT JOIN sk_kerjapraktek sk ON sk.id = skp.id_sk
            LEFT JOIN ( SELECT count(bk.id) AS jml_bimbingan,bk.id_kp
                FROM bimbingan_kp bk
                LEFT JOIN users u ON u.id = bk.id_user
                LEFT JOIN users_groups ug ON ug.user_id = u.id
                WHERE ug.group_id = 4
                GROUP BY bk.id_kp) v_bimb ON v_bimb.id_kp = s.id
        WHERE s.approv_dosen = 't' $where_tahun_kp $where_semester_kp $where_dosen ORDER BY s.tahun DESC, s.semester DESC, s.nim ASC
        ");
        return $query;
    }

    function get_skripsi($tahun = null, $semester = null)
    {
        $group = $this->session->userdata('group_id');
        $npp = $this->session->userdata('username');
        $where_dosen = '';
        if ($group == '5') {
            $where_dosen = "AND d.npp = '$npp'";
        }

        $where_tahun_kp = '';
        $where_semester_kp = '';
        if ($tahun) {
            $where_tahun_kp = "AND s.tahun = '$tahun'";
        }
        if ($semester) {
            $where_semester_kp = "AND s.semester = '$semester'";
        }
        $query = $this->db->query("
            SELECT 
                s.id as id_skripsi, s.nim, s.nama, p.nama as nm_prodi, s.judul, s.tahun, s.semester, DATE(s.time_approv_dosen) as tgl_approv, sk.tgl_awal,
                CASE 
                    WHEN v_bimb.jml_bimbingan IS NULL THEN '0'
                    ELSE v_bimb.jml_bimbingan
                END AS jml_bimbingan,
                CASE
                    WHEN pk.status1 = true THEN concat((((d1.gelar_depan::text || ''::text) || d1.nmdos::text) || ', '::text) || d1.gelar_belakang::text)
                    WHEN pk.status2 = true THEN concat((((d2.gelar_depan::text || ''::text) || d2.nmdos::text) || ', '::text) || d2.gelar_belakang::text)
                    ELSE 'dosen belum disetujui'::text
                END AS dosen,
                CASE
                    WHEN pk.status1 = true THEN d1.nodos
                    WHEN pk.status2 = true THEN d2.nodos
                    ELSE ''::character varying
                END AS npp_dosen
            FROM skripsi s
                LEFT JOIN pembimbing_skripsi pk ON pk.id_skripsi = s.id
                LEFT JOIN dosen d1 ON d1.id = pk.id_dosen1
                LEFT JOIN dosen d2 ON d2.id = pk.id_dosen2
                                LEFT JOIN mhs m ON m.nim = s.nim
                                LEFT JOIN prodi p ON p.id = m.kdpst
                    LEFT JOIN sk_skripsi sk ON sk.id_skripsi = s.id
                    LEFT JOIN 
                    ( SELECT count(bk.id) AS jml_bimbingan,
                        bk.id_skripsi
                    FROM bimbingan_skripsi bk
                        LEFT JOIN users u ON u.id = bk.id_user
                        LEFT JOIN users_groups ug ON ug.user_id = u.id
                    WHERE ug.group_id = 4
                    GROUP BY bk.id_skripsi) v_bimb ON v_bimb.id_skripsi = s.id
            WHERE s.approv_dosen = 't' $where_tahun_kp $where_semester_kp $where_dosen ORDER BY s.tahun DESC, s.semester DESC, s.nim ASC
        ");
        return $query;
    }

    function get_kkl_individu($tahun = null, $semester = null)
    {
        $group = $this->session->userdata('group_id');
        $npp = $this->session->userdata('username');
        $where_dosen = '';
        if ($group == '5') {
            $where_dosen = "AND d.npp = '$npp'";
        }

        $where_tahun_kp = '';
        $where_semester_kp = '';
        if ($tahun) {
            $where_tahun_kp = "AND kkl.tahun = '$tahun'";
        }
        if ($semester) {
            $where_semester_kp = "AND kkl.semester = '$semester'";
        }
        $query = $this->db->query("
                SELECT
                    CASE
                        WHEN v_bimb.jml_bimbingan IS NULL THEN '0'::bigint
                        ELSE v_bimb.jml_bimbingan
                    END AS jml_bimbingan,
                    kkl.nim, kkl.nama, kkl.judul, kkl.lokasi, kkl.tahun, kkl.semester, pk.tgl_awal, DATE(pk.time_approv_dosen) as tgl_approv,
                    concat(d.gelar_depan|| '' || d.nmdos || ', ' || d.gelar_belakang) AS dosen, d.nodos AS npp_dosen, kkl.id as id_kkl, p.nama as nm_prodi
                FROM kkl
                    LEFT JOIN pembimbing_kkl pk ON pk.id_kkl = kkl.id
                    LEFT JOIN dosen d ON d.id = pk.id_dosen
                    LEFT JOIN mhs m ON m.nim = kkl.nim
                    LEFT JOIN prodi p ON p.id = m.kdpst
                    LEFT JOIN ( SELECT count(bk.id) AS jml_bimbingan,
                            bk.id_kkl
                        FROM bimbingan_kkl_individu bk
                            LEFT JOIN users u ON u.id = bk.id_user
                            LEFT JOIN users_groups ug ON ug.user_id = u.id
                        WHERE ug.group_id = 4
                        GROUP BY bk.id_kkl) v_bimb ON v_bimb.id_kkl = kkl.id
                WHERE pk.approv_dosen = 't' $where_tahun_kp $where_semester_kp $where_dosen ORDER BY kkl.tahun DESC, kkl.semester DESC, kkl.nim ASC
        ");
        return $query;
    }

    function get_kkl_kelompok($tahun = null, $semester = null)
    {
        $group = $this->session->userdata('group_id');
        $npp = $this->session->userdata('username');
        $where_dosen = '';
        if ($group == '5') {
            $where_dosen = "AND d.nodos = '$npp'";
        }

        $where_tahun_kp = '';
        $where_semester_kp = '';
        if ($tahun) {
            $where_tahun_kp = "AND kk.tahun = '$tahun'";
        }
        if ($semester) {
            $where_semester_kp = "AND kk.semester = '$semester'";
        }
        $query = $this->db->query("
                SELECT kk.id AS id_kelompok_kkl,
                    kk.tahun,
                    kk.semester,
                    k.nama AS nm_kelompok,
                    d.nodos AS npp_dosen,
                    DATE(kk.time_approv_dosen) as tgl_approv,
                    kk.tgl_awal,
                        CASE
                            WHEN kk.id_dosen IS NOT NULL THEN concat((((d.gelar_depan::text || ''::text) || d.nmdos::text) || ', '::text) || d.gelar_belakang::text)
                            ELSE 'dosen belum diset'::text
                        END AS dosen,
                    concat((kk.tgl_awal || ' s.d '::text) || kk.tgl_akhir) AS tanggal,
                    ( SELECT count(*) AS jumlah
                        FROM kelompok_mhs
                        WHERE kelompok_mhs.id_kelompok_kkl = kk.id) AS jml_mhs, v_bimb.jml_bimbingan
                FROM kelompok_kkl kk
                    LEFT JOIN kelompok k ON k.id = kk.id_kelompok
                    LEFT JOIN dosen d ON d.id = kk.id_dosen
                        LEFT JOIN ( SELECT count(bk.id) AS jml_bimbingan,
                                    bk.id_kelompok_kkl
                    FROM bimbingan_kkl_kelompok bk
                    LEFT JOIN users u ON u.id = bk.id_user
                    LEFT JOIN users_groups ug ON ug.user_id = u.id
                    WHERE ug.group_id = 4 AND id_kategori = 'k'
                    GROUP BY bk.id_kelompok_kkl) v_bimb ON v_bimb.id_kelompok_kkl = kk.id
                    WHERE kk.approv_dosen = 't'  $where_tahun_kp $where_semester_kp $where_dosen
        ");
        return $query;
    }
}
