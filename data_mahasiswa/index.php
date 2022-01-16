<?php
    require 'functions.php';
    $rows = query("SELECT * FROM tb_mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Master Data Mahasiswa</h1>
    <a href="tambah.php">Tambah data</a>
        <table border="1" cellspacing=0 cellpadding=10>
            <thread>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
                <th>Action</th>
            </thread>
            <tbody>
            <?php $i=1; ?>
            <?php foreach ($rows as $row): ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row["Nim"]; ?></td>
                    <td><?php echo $row["Nama"]; ?></td>
                    <td><?php echo $row["Email"]; ?></td>
                    <td><?php echo $row["Jurusan"]; ?></td>
                    <td>
                        <a href="ubah.php?id=<?php echo $row["Id"];?>">Ubah | </a>
                        <a href="hapus.php?id=<?php echo $row["Id"];?>"
                        onclick="return confirm('Apakah anda yakin akan menghapus data?')">Hapus</a>
                    </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</body>
</html>
