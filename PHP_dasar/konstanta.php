<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h1>My First PHP page</h1>

    <?php
    define("PHI",3.14);
    $jari_jari = 1000;
    $keliling = 2 * PHI * $jari_jari;
    printf("PHI = %s<br>\n", PHI);
    printf("Keliling = %s <br>\n", $keliling)
    ?>
</body>
</html>