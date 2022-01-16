<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h1>My First PHP page</h1>

    <?php
    Echo date("m-d-y");
    ?>

    <?php
    $today = date("F j, Y, g:i a");
    echo "$today <br><br>";
    $today = date("m.d.y");
    echo "$today <br><br>";
    $today = date("j, n, Y");
    echo "$today <br><br>";
    $today = date("Ymd");
    echo "$today <br><br>";
    $today = date("H:i:s");
    echo "$today <br><br>";
    ?>

</body>
</html>