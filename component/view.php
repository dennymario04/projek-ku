<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View | Pendaftar</title>
</head>
<body>
    <?php
    include '../Config/conf.php';
    $sql = "SELECT * FROM calon_siswa";
    $result = $conn -> query($sql);
    if($result->num_rows > 0){
        while($row = $result -> fetch_assoc()){
    ?>
    <h1>View</h1>
    <table border="1">
        <thead>
            <th>ID Pendaftar</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Hp</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Sekolah Asal</th>
            <th>Opsi</th>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $row["id_pendaftar"]; ?></td>
                <td><?php echo $row["nama"]; ?></td>
                <td><?php echo $row["alamat"]; ?></td>
                <td><?php echo $row["noHp"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["jurusan"]; ?></td>
                <td><?php echo $row["asal_sekolah"]; ?></td>
                
            </tr>
        </tbody>
        <?php
            }
        }
        ?>
    </table>
</body>
</html>