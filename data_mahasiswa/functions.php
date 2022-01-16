<?php
    $conn = mysqli_connect("localhost","root","","db_kampus");

    function query($query)
    {
        global $conn;
        $result = mysqli_query($conn,$query);
        $row = [];
        while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data)
    {
        global $conn;
        $nim = $data["Nim"];
        $nama = $data["Nama"];
        $email = $data["Email"];
        $jurusan = $data["Jurusan"];

        $query = "INSERT INTO tb_mahasiswa VALUES (' ' , '$nim', '$nama', '$email', '$jurusan')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function hapus($id)
    {
        global $conn;
        $query = "DELETE FROM tb_mahasiswa WHERE id=$id";
        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);
    }

    function ubah($data)
    {
        global $conn;
        $id = $data["Id"];
        $nim = $data["Nim"];
        $nama = $data["Nama"];
        $email = $data["Email"];
        $jurusan = $data["Jurusan"];

        $query = "UPDATE tb_mahasiswa SET 
                Nim = '$nim',
                Nama = '$nama',
                Email = '$email',
                Jurusan = '$jurusan'
                WHERE id=$id
        ";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
?>