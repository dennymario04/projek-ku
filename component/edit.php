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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <h1>Edit Data</h1>
</body>
</html>