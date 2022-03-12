<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIT | Form Daftar</title>
</head>

<body>
    <a href="../index.php">- Back</a>
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
            <p>Pilih Jurusan:</p>
            <select name="jurusan">
                <option>Tekhnik Komputer dan Jaringan</option>
                <option>Tekhnik Sepeda Motor</option>
                <option>Akuntansi dan Bisnis</option>
            </select>
            <br>
            <label for="asal_sekolah">Asal sekolah</label>
            <input type="text" name="asal_sekolah" id="asal_sekolah"> <br>

            <input type="submit" name="submit" value="submit" id="submit">
        </form>
    </div>
</body>

</html>