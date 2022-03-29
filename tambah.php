<?php
require('functions.php');
if (isset($_POST["submit"])) {
    if (tambah($_POST)>0) {
        echo("
        <script>
        alert('data berhasil ditambahkan');
        document.location.href='index.php';
        </script>");
    }
    else {
        echo("
        <script>
        alert('data gagal ditambahkan');
        document.location.href='index.php';
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
            <ul>
                <li>
                    <label>Nama</label>
                    <input type="text" name="nama" required/>
                </li>
                <li>
                    <label>Email</label>
                    <input type="text" name="email" required/>
                </li>
                <li>
                    <button type="submit" name="submit">Tambah</button>
                </li>
            </ul>
        </form>
    </body>
</html>