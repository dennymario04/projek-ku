<!doctype html>
<html lang="en">

<head>
    <style>
        .center-form {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            padding: 10px;
        }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Sekolah IT | Pendaftaran</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color:#F4FCD9;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../img/logo-sekolah.png" alt="logo-sekolah" width="75" height="75">
                | Sekolah IT
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Area</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="center-form">
        <form action="../component/insertDb.php" method="post" >
            <h1 style="text-align:center; margin:20px;">Sekolah IT | Daftar Baru</h1>
            <div class="mb-3">
                <label for="nama" id="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

            <div class="mb-3">
                <label for="alamat" id="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>
            <div class="mb-3">
                <label for="noHp" id="noHp" class="form-label">Nomor Handphone / Whatsapp</label>
                <input type="text" class="form-control" id="noHp" name="noHp" required>
            </div>
            <div class="mb-3">
                <label for="email" id="email" class="form-label">Masukan Email</label>
                <input type="email" class="form-control" id="nama" name="email" required>
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" for="jurusan">Jurusan</label>
                <select class="form-select" id="jurusan" name="jurusan">
                    <option selected disabled>Pilih Jurusan : </option>
                    <option value="Tekhnik Komputer dan Jaringan">Tekhnik Komputer dan Jaringan</option>
                    <option value="Tekhnik Sepeda Motor">Tekhnik Sepeda Motor</option>
                    <option value="Akuntansi dan Bisnis">Akuntansi dan Bisnis</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="asal_sekolah" id="asal_sekolah" class="form-label">Asal sekolah</label>
                <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" required>
            </div>

            <button type="submit" name="submit" id="submit" class="btn btn-primary">Daftar</button>
        </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>