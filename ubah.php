<?php
require('functions.php');
$no=$_GET["no"];
$user=query("SELECT * FROM tb_user WHERE no = '$no'")[0];
if (isset($_POST["submit"])) {
    if (ubah($_POST)>0) {
        echo("
        <script>
        alert('data berhasil diubah');
        document.location.href='index.php';
        </script>");
    }
    else {
        echo("
        <script>
        alert('data gagal diubah');
        <!-- document.location.href='index.php'; -->
        </script>");
        echo mysqli_error($db);
    }
}

?>



<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Tambah data</title>
    </head>
    <body>
        <h2>Tambah data</h2>
        <form action="" method="POST">
            <input type="hidden" name="no" value="<?=$user["no"];?>">
            <ul>
                <li>
                    <label>Nama</label>
                    <input type="text" name="nama" required value="<?=$user["nama"];?>"/>
                </li>
                <li>
                    <label>Email</label>
                    <input type="text" name="email" required value="<?=$user["email"];?>"/>
                </li>
                <li>
                    <button type="submit" name="submit">Ubah</button>
                </li>
            </ul>
        </form>
    </body>
</html>