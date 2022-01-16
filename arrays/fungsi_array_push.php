<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h1>My First PHP page</h1>

    <?php
    $program = array("HTML", "PHP");
    array_push($program, "CSS", "JavaScript");
    foreach ($program as $prg) {
    echo $prg . "<br><br>";
    }
    ?>
</body>
</html>