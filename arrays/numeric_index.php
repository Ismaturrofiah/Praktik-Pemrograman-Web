<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h1>My First PHP page</h1>

    <?php
    $buah[0] = "mangga";
    $buah[1] = "apel";
    $buah[2] = "pisang";
    $buah[3] = "jambu";
    echo "Berikut ini adalah 2 buah yang saya suka, yaitu "
    . $buah[0] . " & " . $buah[1];
    echo "<br>Namun, saya juga suka buah "
    . $buah[2] . " & " . $buah[3];
    ?>
</body>
</html>