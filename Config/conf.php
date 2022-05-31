<?php

DEFINE('DB_HOST','localhost');
DEFINE('DB_USER','root');
DEFINE('DB_PASS','');
DEFINE('DB_NAME','sekolahit');

class Database{
    public $conn;

    function __construct(){
        $this -> conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        if(msyqli_connect_error()){
            die("Tidak berhasil menghubungkan ke Database!!".mysqli_connect_error());
        }else{
            echo "console.log('Database Connected Successfully')";
        }
    }
}

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
*/