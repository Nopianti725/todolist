<?php
error_reporting(0);
?>
<?php
include "..//config.php";
$tugas=$_POST['tugas'];
$jangkawaktu=$_POST['jangkawaktu'];
$keterangan=$_POST['keterangan'];
$sql="insert into tbtodo (tugas,jangkawaktu,keterangan) values ('$tugas','$jangkawaktu','$keterangan')";
//echo $sql;
mysqli_query($mysqli,$sql);
$r=mysqli_affected_rows(mysql: $mysqli);
if ($r > 0){
    header("location:http:/dbtodo_vika/index.php?halaman=todo&pesan_tambah=berhasil");
}else{
    header("location:http:/dbtodo_vika/index.php?halaman=todo&pesan_tambah=gagal");
}
?>