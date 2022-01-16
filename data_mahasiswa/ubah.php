<?php

require 'functions.php';
$id = $_GET["id"];
$mhs = query("SELECT * FROM tb_mahasiswa WHERE Id = $id")[0];

if (isset($_POST["submit"])) {
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('data BERHASIL diubah');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('data GAGAL diubah');
            document.location.href = 'index.php';
        </script>
    ";
    }
}

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
<h1>Form Ubah Data Mahasiswa</h1>
        <form action=" " method="post">
            <table>
                <tr>
                    <td>No</td>
                    <td><input type="hidden" name="Id" id="Id" value="<?php echo $mhs['Id']?>"></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td><input type="text" name="Nim" id="Nim" value="<?php echo $mhs['Nim']?>"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="Nama" id="Nama" value="<?php echo $mhs['Nama']?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="Email" id="Email" value="<?php echo $mhs['Email']?>"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td><input type="text" name="Jurusan" id="Jurusan" value="<?php echo $mhs['Jurusan']?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" name="submit">Simpan</button></td>
                </tr>
            </table>
        </form>
</body>
</html>