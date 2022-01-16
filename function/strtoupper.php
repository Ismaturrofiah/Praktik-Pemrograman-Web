<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h1>My First PHP page</h1>

    <?php
    $katalama = "Indonesia merdeka pada tanggal 17 agustus 1945";
    $katabaru = strtoupper($katalama);
    echo "kata lama - $katalama <br><br>";
    echo "kata baru - $katabaru";
    ?>
</body>
</html>