<?php
require '../Config/conf.php';

if(isset($_GET['id_pendaftar'])){
    //ambil id dari tabel
    $id = $_GET['id_pendaftar'];
    //buat query untuk menghapus data di tabel
    //$sql = "DELETE FROM calon_siswa WHERE id_pendaftar=$id";
    $stmt = $conn -> prepare("DELETE FROM calon_siswa WHERE id_pendaftar=?");
    $stmt -> bind_param('i',$_GET['id_pendaftar']);
    $stmt -> execute();
    if($stmt->affected_rows === 0){
        echo "<script>alert('Data tidak bisa dihapus');window.location='../component/view.php'</script>";
    }else{
        echo "<script>alert('Data berhasil dihapus');window.location='../component/view.php'</script>";
    }

}