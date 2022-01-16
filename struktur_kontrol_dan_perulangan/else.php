<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h1>My First PHP page</h1>

    <?php
    $age = 50;
    echo "my age is " . $age . "<br><br>";
    if ($age < 30) {
    echo "My age is less than 30!";
    } else {
    echo "My age is greater than or equal 30!";
    }
    ?>
</body>
</html>