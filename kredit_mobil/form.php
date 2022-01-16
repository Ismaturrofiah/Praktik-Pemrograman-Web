<?php
    require 'hasil.php';

    $error = "";
    $benar = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["harga"] && $_POST["dp"] && $_POST["tahun"] && $_POST["bunga"])){
            $error = "Mohon data diisi";
        } else {
            $benar = test_input($_POST["harga"] && $_POST["dp"] && $_POST["tahun"] && $_POST["bunga"]);
        }
    }

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengisian</title>
    <link rel="stylesheet" href="style.css">
    <style>
    p span.error {
        color:red;
    }</style>
</head>
<body>
    <div class="wrap">
        <h1>Simulasi Kredit Mobil</h1>
        <form method="POST" action="hasil.php <?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>">

        <label for="Harga Mobil">Harga Mobil</label><br>
        <input type="number" name="harga" min="100000000">
        <p><span class = "error"><?php echo $error; ?></span></p>
            
        <label for="Uang Muka">Uang Muka</label><br>
        <input type="number" name="dp" min="0.3*harga" max="harga">
        <p><span class = "error"><?php echo $error; ?></span></p>

        <label for="Lama Angsuran">Lama Angsuran (tahun)</label><br>
        <select name="tahun"><br>
            <option value=" ">---Select---</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <p><span class = "error"><?php echo $error; ?></span></p>

        <label for="Bunga">Bunga (%)</label><br>
        <input type="number" name="bunga" min="5" max="10">
        <p><span class = "error"><?php echo $error; ?></span></p>
            
        <input type="Submit" name="Submit" value="Submit">
        <input type="reset" name="reset" value="Reset">

        </form>
    </div>
</body></html>
