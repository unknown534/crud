<?php
$db=mysqli_connect("localhost","root","","db_mail");
function query($query){
    global $db;
    $result=mysqli_query($db,$query);
    $rows=[];
    while($row=mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}
function tambah($data){
    global $db;
    $nama=htmlspecialchars($_POST["nama"]);
    $email=htmlspecialchars($_POST["email"]);
    $query="INSERT INTO tb_user VALUES ('','$nama','$email')";
    mysqli_query($db,$query);
    return mysqli_affected_rows($db);
}
function hapus($no){
    global $db;
    mysqli_query($db,"DELETE FROM tb_user WHERE no = '$no'");
    return mysqli_affected_rows($db);
}
function ubah($data){
    global $db;
    $no=$_POST["no"];
    $nama=htmlspecialchars($_POST["nama"]);
    $email=htmlspecialchars($_POST["email"]);
    $query="UPDATE tb_user SET nama ='$nama',email='$email' WHERE no='$no'";
    mysqli_query($db,$query);
    return mysqli_affected_rows($db);
}
?>