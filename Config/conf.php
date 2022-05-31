<?php

DEFINE('DB_HOST','localhost');
DEFINE('DB_USER','root');
DEFINE('DB_PASS','');
DEFINE('DB_NAME','sekolahit');

class Database{
    public $conn = "";
    #fungsi koneksi ke database
    function __construct(){
        $this -> conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        if(mysqli_connect_errno()){
            die("Tidak berhasil menghubungkan ke Database!!".mysqli_connect_error());
        }else{
            echo "<script>console.log('Database Connected');</script>";
        }
    }
}

class Fungsi extends Database{
    #fungsi select
    function viewData(){
        $result = mysqli_query($this -> conn ,"SELECT * FROM calon_siswa");
        while($data = mysqli_fetch_array($result)){
            $row[] = $data;
      }
      return $row;
    }

    #fungsi insert
    function insertData(){
        if(isset($_POST['submit'])){
            //ambil data dari form
            $nama = $_POST['nama']; 
            $alamat = $_POST['alamat'];
            $noHp = $_POST['noHp'];
            $email = $_POST['email'];
            $jurusan = $_POST['jurusan'];
            $asalSekolah = $_POST['asal_sekolah'];
            //Operasi insert
            $stmt = $this->conn -> prepare("INSERT INTO calon_siswa(nama,alamat,noHp,email,jurusan,asal_sekolah) VALUES (?,?,?,?,?,?)");
            $stmt->bind_param('ssssss',$_POST['nama'],$_POST['alamat'],$_POST['noHp'],$_POST['email'],$_POST['jurusan'],$_POST['asal_sekolah']);
            $stmt->execute();
            if($stmt->affected_rows === 0){
                echo "<script>alert('Data Gagal disimpan,cek kembali!');window.location='../component/form_daftar.php'</script>";
            }else{
                echo "<script>alert('Data sudah berhasil tersimpan');window.location='../index.php'</script>";
            }
        }
    }
    #fungsi edit
    function pickupData(){
        #ini untuk form edit
        if( !isset($_GET['id_pendaftar']) ){
            header('Location: view.php');
        }
        $id = $_GET['id_pendaftar'];
        $stmt = $this -> conn -> prepare("SELECT * FROM calon_siswa WHERE id_pendaftar = ?");
        $stmt -> bind_param('i',$_GET['id_pendaftar']);
        $stmt -> execute();
        $result = $stmt ->get_result();
        while($data=$result->fetch_assoc()){
            $siswa[] =$data;
        }
        return $siswa;

        
    }
    function updateData(){
        if(isset($_POST['submit'])){
            //ambil data dari form
            $id = $_POST['id_pendaftar'];
            $nama = $_POST['nama']; 
            $alamat = $_POST['alamat'];
            $noHp = $_POST['noHp'];
            $email = $_POST['email'];
            $jurusan = $_POST['jurusan'];
            $asalSekolah = $_POST['asal_sekolah'];
        
            $stmt = $this -> conn -> prepare("UPDATE calon_siswa SET nama =?,alamat = ?,noHp = ?, email = ?, jurusan = ?, asal_sekolah = ? WHERE id_pendaftar = ?");
            $stmt -> bind_param('ssssssi',$_POST['nama'],$_POST['alamat'],$_POST['noHp'],$_POST['email'],$_POST['jurusan'],$_POST['asal_sekolah'],$_POST['id_pendaftar']);
            $stmt -> execute();
            if($stmt->affected_rows === 0){
                echo "<script>alert('Data gagal diupdate');window.location='../component/form_edit.php'</script>";
            }else{
                echo "<script>alert('Data sudah diupdate');window.location='../component/view.php'</script>";
            }
        }
    }
    function hapusData(){
        if(isset($_GET['id_pendaftar'])){
            //ambil id dari tabel
            $id = $_GET['id_pendaftar'];
         
            $stmt = $this -> conn -> prepare("DELETE FROM calon_siswa WHERE id_pendaftar=?");
            $stmt -> bind_param('i',$_GET['id_pendaftar']);
            $stmt -> execute();
            if($stmt->affected_rows === 0){
                echo "<script>alert('Data tidak bisa dihapus');window.location='../component/view.php'</script>";
            }else{
                echo "<script>alert('Data berhasil dihapus');window.location='../component/view.php'</script>";
            }
        
        }
    }
}

$DBConn = new Database();
$Fungsi = new Fungsi();

