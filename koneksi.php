<?php

/*
 * Keterangan
 * localhost = alamat locahost
 * root = username defauld localhost
 * password kosong
 * coba = nama database
 * */
$konek_ke_db = mysqli_connect('localhost','root','','coba');
if (!$konek_ke_db){
    echo "database tidak konek";
}
/*else{
    echo "database konek";
}*/


?>