<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h1>My First PHP page</h1>

    <?php
    $PhoneNumber = "800-555-5555";
    $hasil = explode("-", $PhoneNumber);
    echo " Phone Number = $PhoneNumber <br>";
    echo "Pecahan 1 = $hasil[0]<br>";
    echo "Pecahan 2 = $hasil[1]<br>";
    echo "Pecahan 3 = $hasil[2]";
    ?>
</body>
</html>