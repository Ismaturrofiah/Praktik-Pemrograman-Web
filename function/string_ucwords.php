<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h1>My First PHP page</h1>

    <?php
    $title= "selamat pagi dunia";
    $ucTitle = ucwords($title);
    echo "Old title - $title <br>";
    echo "New title - $ucTitle";
    ?>

    <?php
    $titleString = "a title that could use some hELP";
    $lowercaseTitle = strtolower($titleString);
    $ucTitleString = ucwords($lowercaseTitle);
    echo "Old title - $titleString <br />";
    echo "New title - $ucTitleString";
    ?>
</body>
</html>