<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h1>My First PHP page</h1>

    <?php
    $fruits = array('apple', 'banana', 'orange');
    foreach ($fruits as $fruit)
    {
    echo $fruit;
    echo "<br/>";
    }
    ?>
</body>
</html>