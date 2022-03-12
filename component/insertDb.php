<?php
require "../Config/conf.php";
if(isset($_POST['submit'])){
    //ambil data dari form
    $nama = $_POST['nama']; 
    $alamat = $_POST['alamat'];
    $noHp = $_POST['noHp'];
    $email = $_POST['email'];
    $jurusan = $_POST['jurusan'];
    $asalSekolah = $_POST['asal_sekolah'];

    //query sql
    $sql = "INSERT INTO calon_siswa(nama,alamat,noHp,email,jurusan,asal_sekolah) 
            VALUES('$nama','$alamat','$noHp','$email','$jurusan','$asalSekolah')";
    if($conn -> query($sql)===TRUE){
        echo "<script>alert('Data sudah berhasil tersimpan');window.location='../index.php'</script>";
    }else{
        echo "<script>alert('Data Gagal disimpan,cek kembali!');window.location='../component/form_daftar.php'</script>";
    }
}