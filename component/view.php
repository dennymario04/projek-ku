<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Sekolah IT | Pendaftar </title>
</head>

<body>
    <style>
        td a {
            text-decoration: none;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color: black;
        }

        td a:hover {
            color: white;
        }
    </style>
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

    <h1 style="margin:20px;">Sekolah IT | Daftar Siswa</h1>

    <table class="table table-primary table-sm" style="text-align: center;">
        <thead>
            <tr>
                <th scope="col">ID Pendaftar</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Nomor Hp</th>
                <th scope="col">Email</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Sekolah Asal</th>
                <th scope="col">Opsi</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
    require_once '../Config/conf.php';
    $result = $Fungsi -> viewData();
    foreach($result as $row){
    
    ?>
                <td><?php echo $row["id_pendaftar"]; ?></td>
                <td><?php echo $row["nama"]; ?></td>
                <td><?php echo $row["alamat"]; ?></td>
                <td><?php echo $row["noHp"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["jurusan"]; ?></td>
                <td><?php echo $row["asal_sekolah"]; ?></td>
                <td>
                    <button type="button" class="btn btn-primary"><a
                            href="../component/form_edit.php?id_pendaftar=<?php echo $row["id_pendaftar"]?>">Edit</a></button>
                    <button type="button" class="btn btn-danger"><a
                            href="../component/hapus.php?id_pendaftar=<?php echo $row["id_pendaftar"];?>">Hapus</a></button>
                </td>

            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>