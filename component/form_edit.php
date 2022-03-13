<?php
require "../Config/conf.php";

if( !isset($_GET['id_pendaftar']) ){
    header('Location: view.php');
}

//ambil id dari query string
$id = $_GET['id_pendaftar'];
// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id_pendaftar=$id";
$query = mysqli_query($conn, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
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
    <div class="form-regis">
        <form action="../component/edit.php" method="post">
            <h3>Edit Data</h3>
            <label for="ID">ID Pendaftar</label>
            <input type="hidden" name="id_pendaftar" id="id_pendaftar"  value="<?php echo $siswa["id_pendaftar"];?>"> <br>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" value="<?php echo $siswa['nama'];?>"> <br>
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" value="<?php echo $siswa['alamat'];?>"> <br>
            <label for="noHp">Nomor HP</label>
            <input type="text" name="noHp" id="noHp" value="<?php echo $siswa["noHp"];?>"> <br>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?php echo $siswa["email"];?>"> <br>
            <p>Pilih Jurusan:</p>
            <?php $siswa["jurusan"];?>
            <select name="jurusan">
                <option <?php echo($siswa == 'Tekhnik Komputer dan Jaringan')?"selected":""?>>Tekhnik Komputer dan Jaringan</option>
                <option <?php echo($siswa == 'Tekhnik Sepeda Motor')?"selected":""?>>Tekhnik Sepeda Motor</option>
                <option <?php echo($siswa == 'Akuntansi dan Bisnis')?"selected":""?>>Akuntansi dan Bisnis</option>
            </select>
            <br>
            <label for="asal_sekolah">Asal sekolah</label>
            <input type="text" name="asal_sekolah" id="asal_sekolah" value="<?php echo $siswa['asal_sekolah'];?>"> <br>
            <input type="submit" name="submit" value="submit" id="submit">
        
        </form>
</body>

</html>