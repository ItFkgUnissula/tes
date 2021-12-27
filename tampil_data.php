<?php

include "koneksi.php";
include "ConfigurasiClass.php";

?>

<html>
<head>
    <title>

    </title>
</head>
<body>
<table border="2px solid">
    <thead>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>aksi</th>
    </tr>
    </thead>
    <tbody>
    <?php

    $dataClass = new ConfigurasiClass($konek_ke_db);

    $getDataDb = $dataClass->tampil_data();
    $no=1;
    while ($data = mysqli_fetch_array($getDataDb)){
        $id = $data['id'];
        ?>
            <tr>
                <td>
                    <?php echo $no++;?>
                </td>
                <td>
                    <?php echo $data['nama']; ?>
                </td>
                <td>
                    <a href="update_data.php?&id=<?php echo $id;?>">[up]</a> |
                    <a href="hapus_data.php?&id=<?php echo $id;?>" onclick="confirm('yskin mau hapus?')">[del]</a>
                </td>
            </tr>
        <?php
    }
    ?>
    </tbody>

</table>
</body>
</html>
