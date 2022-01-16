<html>

<head>
    <title>Submit</title>
</head>

<body>
    <h1>Hasil Submit</h1>
    <?php
        $nama = $_POST['nama'];
        $TTL = $_POST['TTL'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];
        $no_telepon = $_POST['no_telepon'];

        echo "Nama Lengkap : " . $nama . ".<br>";
        echo "Tempat, Tanggal Lahir : " . $TTL . ".<br>";
        echo "Jenis Kelamin : " . $jenis_kelamin . ".<br>";
        echo "Agama : " . $agama . ".<br>";
        echo "Alamat : " . $alamat . ".<br>";
        echo "Email : " . $email . ".<br>";
        echo "No Telepon : " . $no_telepon . ".<br>";
    ?>        
</body>

</html>