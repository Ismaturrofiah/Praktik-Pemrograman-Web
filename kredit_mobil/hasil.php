<?php
    function operasi($data){
    
        if(isset($_POST["Submit"])){
            $harga = $data["harga"];
            $dp = $data["dp"];
            $tahun = $data["tahun"];
            $bunga = $data["bunga"];

            $angsuran = (int)$tahun*12;
            $desimal = (int)$bunga/100;
            $totalbunga = $desimal*(int)$tahun;

            $kurang = (int)$harga - (int)$dp;
            $total = ($totalbunga*$kurang)+$kurang;
            $cicilan = (($totalbunga*$kurang)+$kurang)/$angsuran;

            $hasiloperasi = [$total,$cicilan];
        
            echo "Harga Mobil    = Rp. ".number_format($harga,2,",",".");
            echo "<br><br>";
            echo "Uang Muka      = Rp. ".number_format($dp,2,",",".");
            echo "<br><br>";
            echo "Lama Angsuran  = $tahun Tahun";
            echo "<br><br>";
            echo "Lama Angsuran  = $bunga%";
            echo "<br><br>";
            echo "Total yang harus dibayar      = Rp. ".number_format($hasiloperasi[0],2,",",".");
            echo "<br><br>";
            echo "Angsuran setiap bulan         = Rp. ".number_format($hasiloperasi[1],2,",",".");
            echo "<br><br>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Inputan</title>
    <style>
        body {
            padding-left : 10%;
            font-family : 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
    </style>
</head>
<body>
    <?php if(isset($_POST["Submit"]))
        echo "<h2>Data Hasil Inputan</h2>";
        $operasi = operasi($_POST);
        $operasi;
    ?>
</body>
</html>