<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h1>My First PHP page</h1>

    <?php
    //Array Hari
    $array_hari = array(
        1 => "Senin", "Selasa", "Rabu", "Kamis", "Jumat",
        "Sabtu", "Minggu"
    );
    $hari = $array_hari[date("N")];
    //Format Tanggal
    $tanggal = date("j");
    //Array Bulan
    $array_bulan = array(
        1 => "Januari", "Februari", "Maret",
        "April", "Mei",
        "Juni", "Juli", "Agustus", "September", "Oktober",
        "November", "Desember"
    );
    $bulan = $array_bulan[date("n")];

    $tahun = date("Y");
    echo $hari . ", " . $tanggal . " " . $bulan . " " . $tahun;
    ?>
</body>
</html>