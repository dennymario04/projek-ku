<?php

DEFINE('DB_HOST','localhost');
DEFINE('DB_USER','root');
DEFINE('DB_PASS','');
DEFINE('DB_NAME','sekolahit');

class Database{
    public $conn = "";

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
    function viewData(){
        $result = mysqli_query($this -> conn ,"SELECT * FROM calon_siswa");
       if($result ->num_rows > 0){
        echo 
        "<script>
            console.log('Data Fetch');
        </script>";
       }
    }
}





$DBConn = new Database();
$View = new Fungsi();
$View -> viewData();
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