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
            $stmt = $conn -> prepare("INSERT INTO calon_siswa(nama,alamat,noHp,email,jurusan,asal_sekolah) VALUES (?,?,?,?,?,?)");
            $stmt->bind_param('ssssss',$_POST['nama'],$_POST['alamat'],$_POST['noHp'],$_POST['email'],$_POST['jurusan'],$_POST['asal_sekolah']);
            $stmt->execute();
            if($stmt->affected_rows === 0){
                echo "<script>alert('Data Gagal disimpan,cek kembali!');window.location='../component/form_daftar.php'</script>";
            }else{
                echo "<script>alert('Data sudah berhasil tersimpan');window.location='../index.php'</script>";
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