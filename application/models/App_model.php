<?php defined('BASEPATH') or exit('No direct script access allowed');
class App_model extends CI_Model
{
    function tampil_data() //UNTUK MENAMPILKAN DATA DARI TABLE datapaket//
    {
        return $this->db->get('datapaket');
    }

    public function Prosesinsert($table, $data) //UNTUK INSERT DATA KE DB//
    {
        $insert = $this->db->insert($table, $data);
        return $insert;
    }

    public function M_hapus($noresi) //UNTUK HAPUS DATA DARI TABLE datapaket
    {
        $this->db->where('noresi', $noresi);
        $this->db->delete('datapaket');
    }

    function ubah_data($where,$table) // MENGAMBIL DATA DARI TABLE datapaket UNTUK EDIT DATA
    {
        return $this->db->get_where($table,$where);
    }

    function update_data($where,$data,$table) // UPDATE DATA PADA TABLE datapaket
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

}
