<?php
require '../Config/conf.php';

if(isset($_GET['id_pendaftar'])){
    //ambil id dari tabel
    $id = $_GET['id_pendaftar'];
    //buat query untuk menghapus data di tabel
    $sql = "DELETE FROM calon_siswa WHERE id_pendaftar=$id";

    if($conn -> query($sql)===TRUE){
        echo "<script>alert('Data sudah dihapus');window.location='../component/view.php'</script>";
    }else{
        echo "<script>alert('Data tidak bisa dihapus');window.location='../component/view.php'</script>";
    }
}