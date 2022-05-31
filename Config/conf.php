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
        // buat query untuk ambil data dari database
        $stmt = $this -> conn -> prepare("SELECT * FROM calon_siswa WHERE id_pendaftar = ?");
        $stmt -> bind_param('i',$_GET['id_pendaftar']);
        $stmt -> execute();
        $result = $stmt ->get_result();
        while($data=$result->fetch_assoc()){
            $siswa[] =$data;
        }
        return $siswa;

       
        /*
        #$sql = "SELECT * FROM calon_siswa WHERE id_pendaftar=$id";
        #$query = mysqli_query($conn, $sql);
        #$siswa = mysqli_fetch_assoc($query);
        
        // jika data yang di-edit tidak ditemukan
        if( mysqli_num_rows($query) < 1 ){
            die("data tidak ditemukan...");
        }
        */
        
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
        
            //query sql
           // $sql = "UPDATE calon_siswa SET nama ='$nama',alamat = '$alamat', noHp = '$noHp', email = '$email', jurusan = '$jurusan', asal_sekolah = '$asalSekolah'
             //       WHERE id_pendaftar = $id";
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
}







$DBConn = new Database();
$Fungsi = new Fungsi();


/*
$serverName = "localhost";
$user = "root";
$password = "";
$database = "sekolahit";
//Membuat koneksi
$conn = new mysqli($serverName,$user,$password,$database);

if(mysqli_connect_error()){
    die("Tidak berhasil menghubungkan ke Database!!".mysqli_connect_error());
}

while($row = $result -> fetch_array()){
            
            }
*/