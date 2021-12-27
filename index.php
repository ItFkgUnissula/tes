<?php

include "koneksi.php";
include "ConfigurasiClass.php";

$dataClass = new ConfigurasiClass($konek_ke_db);

$getDataDb = $dataClass->tampil_data();
while ($data = mysqli_fetch_array($getDataDb)){
    echo $data['nama'];
}



?>
