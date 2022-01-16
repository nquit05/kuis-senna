<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_soal extends CI_Model
{
    public function get()
    {
        $statement = "SELECT * FROM paket_soal 
        JOIN soal ON soal.paket_soal_id = paket_soal.id_paket_soal";
        return $this->db->query($statement)->result();
    }

    // public function store($data)
    // {
    //     $statement = "INSERT INTO paket_soal (nama,jenis) VALUES (?,?)";
    //     $this->db->query($statement, array($data['nama'], $data['jenis']));
    //     return $this->db->affected_rows();
    // }

    // public function update($data)
    // {
    //     $query = " UPDATE paket_soal set nama=? , jenis=?  where id_paket_soal=?";
    //     $this->db->query($query, array($data['nama'], $data['jenis'], $data['id_paket_soal']));
    //     return $this->db->affected_rows();
    // }

    // public function destroy($id)
    // {
    //     $query = " DELETE from paket_soal WHERE id_paket_soal = ?";
    //     $this->db->query($query, array($id));
    //     return $this->db->affected_rows();
    // }
}
