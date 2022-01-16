<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h1>My First PHP page</h1>

    <?php
    $lusa = mktime(0, 0, 0, date("d") + 2, date("y"));
    echo "lusa adalah tanggal " . date("d/m/y", $lusa);
    ?>

    <?php
    $besok = mktime(0, 0, 0, date("m"), date("d") + 1, date("Y"));
    $bulankemarin = mktime(
        0,
        0,
        0,
        date("m") - 1,
        date("d"),
        date("Y")
    );
    $tahundepan = mktime(
        0,
        0,
        0,
        date("m"),
        date("d"),
        date("Y") + 1
    );
    echo "Besok adalah tanggal " . date("d/m/y", $besok) . "<br><br>";
    echo "Bulan Kemarin adalah tanggal " . date(
        "d/m/y",
        $bulankemarin
    ) . "<br><br>";
    echo "Tahun depan adalah tanggal " . date("d/m/y", $tahundepan) .
        "<br><br>";
    ?>

</body>
</html>