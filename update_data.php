
<?php
include "koneksi.php";
include "ConfigurasiClass.php";

$id = $_GET['id'];

$dataClass = new ConfigurasiClass($konek_ke_db);
$data_id = $dataClass->tampil_data_id($id);

if (isset($_POST['submit_btn'])){
    $nama = $_POST['nama_php'];

    $dataClass->update_data($id,$nama);
    $sukses = 1;
    if ($sukses == 1){
        echo '
        <script>
        alert("update sukses");
        window.location.href = "tampil_data.php";
        </script>
        ';
    }
}




$id_u = $data_id['id'];
$nama_u = $data_id['nama'];


?>



<center>
    <div>
        <br>
        <form action="" method="post">
            <div class="row">
                <input type="text" name="nama_php" value="<?php echo $nama_u; ?>" placeholder="Nama">
            </div>
            <br>
            <div class="row">
                <button type="submit" name="submit_btn">Update Data</button>
            </div>
        </form>
    </div>
</center>


