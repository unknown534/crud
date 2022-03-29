<?php
require('functions.php');
$user=query("SELECT * FROM tb_user");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>EMAIL</title>
  
  <!-- HTML -->
  

  <!-- Custom Styles -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
    <br>
    <a href="tambah.php">Tambah data</a><br><br>
  <table border="1" cellspacing="0" cellpadding="5">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Aksi</th>
    </tr>
    <?php $i=1 ?>
    <?php foreach($user as $row): ?>
    <tr>
      <td><?=$i ?></td>
      <td><?=$row["nama"]?></td>
      <td><?=$row["email"]?></td>
      <td><a href="ubah.php?no=<?=$row['no'];?>">ubah</a> | <a href="hapus.php?no=<?=$row['no'];?>"onclick="return confirm('yakin?');">hapus</a></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
  </table>
  <!-- Project -->
  <script src="main.js"></script>
</body>
</html>
