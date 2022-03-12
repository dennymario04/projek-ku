<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Form Pendaftar</h1>
    <div class="form-regis">
        <form action="../component/insertDb.php" method="post">
            <h3>Isi data anda dibawah ini</h3>
            <label for="nama">Nama</label> 
            <input type="text" name="nama" id="nama"> <br>
            <label for="alamat">Alamat</label> 
            <input type="text" name="alamat" id="alamat"> <br>
            <label for="noHp">Nomor HP</label> 
            <input type="text" name="noHp" id="noHp"> <br>
            <label for="email">Email</label> 
            <input type="email" name="email" id="email"> <br>
            <p>Pilih Jurusan : </p>
            <input type="radio" name="jurusan" id="tkj" value="Tekhnik Komputer dan Jaringan">
            <label for="tkj">Tekhnik Komputer dan Jaringan</label> <br>
            <input type="radio" name="jurusan" id="tsm" value="Tekhnik Sepeda Motor">
            <label for="tkj">Tekhnik Sepeda Motor</label> <br>
            <input type="radio" name="jurusan" id="akb" value="Akuntansi dan Bisnis">
            <label for="tkj">Akuntansi dan Bisnis</label> <br>
            <label for="asal_sekolah">Asal Sekolah</label>
            <input type="text" name="asal_sekolah" id="asal_sekolah">

            <input type="submit" value="submit" id="submit">
        </form>
    </div>
</body>

</html>