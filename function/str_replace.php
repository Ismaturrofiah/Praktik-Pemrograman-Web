<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h1>My First PHP page</h1>

    <?php
    $stringawal = "selamat datang di halaman web ini";
    $ubahstring = str_replace("web", "website", $stringawal);
    echo "$ubahstring";
    ?>

    <?php
    $stringawal = "selamat datang di modul web ini";
    $ubahstring = str_replace("website", "web", $stringawal);
    echo "$ubahstring";
    ?>

    <?php
    $katalama = "Saat senja itu bukan apa-apa bagiku <br>
    Apa yang kamu inginkan di dunia ini? <br>
    Emaskah ? <br>
    Atau kedamaian ?<br>
    Bunda pernah berpesan <br>
    Tak ada apa-apa yang berharga didunia ini nak <br>,
    kecuali ketuguhanmu akan agamamu <br>";
    $diubah = array('senja', 'kamu', 'emaskah', 'kedamaian');
    $pengubah = array('malam', 'aku', 'uangkah', 'kemakmuran');
    $katabaru = str_replace($diubah, $pengubah, $katalama);
    echo "kata lama <br>";
    echo "<hr>";
    echo $katalama . "<br><br>";
    echo "setelah diubah <br>";
    echo "<hr>";
    echo $katabaru . "<br>";
    ?>
</body>
</html>