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
}
