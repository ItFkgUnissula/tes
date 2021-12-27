<?php

class ConfigurasiClass
{
    var $konek_ke_db;
    function __construct($koneksi)
    {
        $this->konek_ke_db = $koneksi;
    }


    //membuat fungsi menampilkan data dari database
    function tampil_data(){
        $hasil = 1;
        $sql = "SELECT * FROM `coba_mhs`";
        $query = mysqli_query($this->konek_ke_db,$sql);
        if (!$query){
            $hasil = 0;
        }
        return $query;
    }

    //membuat fungsi input data dari database
    function input_data($nama){
        $hasil = 1;
        $sql = "INSERT INTO `coba_mhs` (`id`,`nama`) VALUE (null,'$nama')";
        $query = mysqli_query($this->konek_ke_db,$sql);
        if (!$query){
            $hasil = 0;
        }
        return $hasil;
    }

    //membuat fungsi menampilkan data dari database berdasarkan id untuk update
    function tampil_data_id($id){
        $hasil = 1;
        $sql = "SELECT * FROM `coba_mhs` WHERE `id`='$id'";
        $query = mysqli_query($this->konek_ke_db,$sql);
        if (!$query) {
            $hasil = 0;
        }
        $data = mysqli_fetch_array($query);
        return $data;
    }

    //membuat fungsi update data dari database
    function update_data($id,$nama){
        $hasil = 1;
        $sql = "UPDATE `coba_mhs` SET `nama`='$nama' WHERE `id`='$id'";
        $query = mysqli_query($this->konek_ke_db,$sql);
        if (!$query) {
            $hasil = 0;
        }
        return $hasil;
    }

    //membuat fungsi hapus data dari database
    function hapus_data($id){
        $hasil = 1;
        $sql = "DELETE FROM `coba_mhs` WHERE `id`='$id'";
        $query = mysqli_query($this->konek_ke_db,$sql);
        if (!$query) {
            $hasil = 0;
        }
        return $hasil;
    }


}