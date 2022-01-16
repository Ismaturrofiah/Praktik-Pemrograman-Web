<?php 
require 'functions.php';

if (isset($_POST["submit"])) {
    if(tambah($_POST)>0) {
        echo "
        <script>
            alert('Data BERHASIL ditambahkan');
            document.location.href = 'index.php';
        </script>
        ";
    }
    else{
        echo"
        <script>
            alert('Data GAGAL ditambahkan');
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
    <h1>Form Tambah Data Mahasiswa</h1>
        <form action=" " method="post">
            <table>
                <tr>
                    <td>NIM</td>
                    <td><input type="text" name="Nim" id="Nim"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="Nama" id="Nama"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="Email" id="Email"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td><input type="text" name="Jurusan" id="Jurusan"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" name="submit">Simpan</button></td>
                </tr>
            </table>
        </form>
</body>
</html>