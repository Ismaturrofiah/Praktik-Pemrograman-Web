<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h1>My First PHP page</h1>

    <?php
    $arrayBuah = array("Jeruk", "Apel"); // array mula-mula
    echo $arrayBuah[0] . "<br>"; // menghasilkan 'Jeruk'
    echo $arrayBuah[1] . "<br>"; // menghasilkan 'Apel'
    // elemen array menjadi 'Pisang, Jeruk, Apel'
    array_unshift($arrayBuah, "Pisang");
    echo $arrayBuah[0] . "<br>"; // menghasilkan 'Pisang'
    echo $arrayBuah[1] . "<br>"; // menghasilkan 'Jeruk'
    echo $arrayBuah[2] . "<br>"; // menghasilkan 'Apel'
    ?>
</body>
</html>