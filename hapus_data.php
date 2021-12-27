<?php

include "koneksi.php";
include "ConfigurasiClass.php";

$id = $_GET['id'];

$dataClass = new ConfigurasiClass($konek_ke_db);

$dataClass->hapus_data($id);

$sukses = 1;
if ($sukses == 1){
    echo '
        <script>
        alert("hapus sukses");
        window.location.href = "tampil_data.php";
        </script>
        ';
}
