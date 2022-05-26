<?php
require "../Config/conf.php";
if(isset($_POST['submit'])){
    //ambil data dari form
    $id = $_POST['id_pendaftar'];
    $nama = $_POST['nama']; 
    $alamat = $_POST['alamat'];
    $noHp = $_POST['noHp'];
    $email = $_POST['email'];
    $jurusan = $_POST['jurusan'];
    $asalSekolah = $_POST['asal_sekolah'];

    //query sql
   // $sql = "UPDATE calon_siswa SET nama ='$nama',alamat = '$alamat', noHp = '$noHp', email = '$email', jurusan = '$jurusan', asal_sekolah = '$asalSekolah'
     //       WHERE id_pendaftar = $id";
    $stmt = $conn -> prepare("UPDATE calon_siswa SET nama =?,alamat = ?,noHp = ?, email = ?, jurusan = ?, asal_sekolah = ? WHERE id_pendaftar = ?");
    $stmt -> bind_param('ssssssi',$_POST['nama'],$_POST['alamat'],$_POST['noHp'],$_POST['email'],$_POST['jurusan'],$_POST['asal_sekolah'],$_POST['id_pendaftar']);
    $stmt -> execute();
    if($stmt->affected_rows === 0){
        echo "<script>alert('Data gagal diupdate');window.location='../component/form_edit.php'</script>";
    }else{
        echo "<script>alert('Data sudah diupdate');window.location='../component/view.php'</script>";
    }
}