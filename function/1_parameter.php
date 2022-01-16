<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h1>My First PHP page</h1>

    <?php
    function favorit($masakan)
    {
        echo "Saya suka makan " . $masakan . " <br><br>";
    }
    favorit("soto");
    favorit("sate");
    favorit("nasi kebuli");
    ?>
</body>
</html>
