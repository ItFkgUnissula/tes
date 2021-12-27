
<?php
include "koneksi.php";
include "ConfigurasiClass.php";


$dataClass = new ConfigurasiClass($konek_ke_db);

if (isset($_POST['submit_btn'])){
    $nama = $_POST['nama_php'];

    $dataClass->input_data($nama);
    $sukses = 1;
    if ($sukses == 1){
        echo '
        <script>
        alert("input sukses");
        window.location.href = "input_data.php";
        </script>
        ';
    }
}


?>


<center>
    <div>
        <br>
        <form action="" method="post">
            <div class="row">
                <input type="text" name="nama_php" placeholder="Nama">
            </div>
            <br>
            <div class="row">
                <button type="submit" name="submit_btn">Input Data</button>
            </div>
        </form>
    </div>
</center>


