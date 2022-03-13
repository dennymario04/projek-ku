<?php
include '../Config/conf.php';

$id = $_GET['id_pendaftar'];
$sql = "UPDATE calon_siswa WHERE id_pendaftar=$id";
if($conn -> query($sql)===TRUE){
    echo "<script>alert('Data sudah berhasil di update!!');window.location='../component/view.php'</script>";
} else{
    echo "<script>alert('Data belum berhasil di update!!');window.location='../component/view.php'</script>";
}
?>