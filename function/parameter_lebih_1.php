<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h1>My First PHP page</h1>

    <?php
    function suka($buah, $sayur)
    {
        echo "Saya suka buah " . $buah . " dan sayur " . $sayur . "
<br><br>";
    }
    suka("mangga", "wortel");
    suka("apel", "brokoli");
    suka("jeruk", "buncis");
    ?>
</body>
</html>