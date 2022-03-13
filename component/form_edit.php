<?php
require "../Config/conf.php";
if(!isset($_GET['id_pendaftar'])){
    header("location : ../component/view.php");
}
$id = $_GET["id_pendaftar"];
$sql = "SELECT * FROM calon_siswa WHERE id_pendaftar = $id";
$siswa = $conn -> query($sql);
if($siswa -> num_rows > 0){
    while($view = $siswa -> fetch_assoc()){
 
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
            <h3>Isi data anda dibawah ini</h3>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" value="<?php echo $view['nama'];?>"> <br>
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" value="<?php echo $view['alamat'];?>"> <br>
            <label for="noHp">Nomor HP</label>
            <input type="text" name="noHp" id="noHp" value="<?php echo $view["noHp"];?>"> <br>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?php $view["email"];?>"> <br>
            <p>Pilih Jurusan:</p>
            <?php $view["jurusan"];?>
            <select name="jurusan">
                <option <?php echo($jurusan == 'Tekhnik Komputer dan Jaringan')?"selected":""?>>Tekhnik Komputer dan Jaringan</option>
                <option <?php echo($jurusan == 'Tekhnik Sepeda Motor')?"selected":""?>>Tekhnik Sepeda Motor</option>
                <option <?php echo($jurusan == 'Akuntansi dan Bisnis')?"selected":""?>>Akuntansi dan Bisnis</option>
            </select>
            <br>
            <label for="asal_sekolah">Asal sekolah</label>
            <input type="text" name="asal_sekolah" id="asal_sekolah" value="<?php echo $view['asal_sekolah'];?>"> <br>
            <input type="submit" name="submit" value="submit" id="submit">
            <?php       
             }
        }
            ?>
        </form>
</body>

</html>