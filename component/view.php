<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View | Pendaftar</title>
</head>

<body>
    <a href="../index.php">- Back</a>
    <table border="1" style="width: 100%;">
        <thead>
            <tr>
                <th>ID Pendaftar</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Hp</th>
                <th>Email</th>
                <th>Jurusan</th>
                <th>Sekolah Asal</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <?php
    include '../Config/conf.php';
    $sql = "SELECT * FROM calon_siswa";
    $result = $conn -> query($sql);
    if($result->num_rows > 0){
        while($row = $result -> fetch_array()){
    ?>
                <td><?php echo $row["id_pendaftar"]; ?></td>
                <td><?php echo $row["nama"]; ?></td>
                <td><?php echo $row["alamat"]; ?></td>
                <td><?php echo $row["noHp"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["jurusan"]; ?></td>
                <td><?php echo $row["asal_sekolah"]; ?></td>
                <td>
                    <a href="#">Edit</a>
                    <a href="../component/hapus.php?id_pendaftar=<?php echo $row["id_pendaftar"];?>">Hapus</a>
                </td>
            </tr>
            <?php
            }
        }   
        ?>
        </tbody>

    </table>



    <p>Total: <?php echo mysqli_num_rows($result); ?></p>
</body>

</html>