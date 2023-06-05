<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan javascript</title>
</head>
<body>
    
    <?php
        echo "Belajar Javascript PHP<br>"
    ?>

    <script>
        document.write("Belajar <strong>script</strong> javascript<br>");

        var bil1 = 5;
        var bil2 = 7;
        var hasil = bil1 + bil2;
        document.write("<br>Hasil Penjumlahan dari "+bil1+" dengan "+bil2+" adalah "+hasil);
    
        for(let i=0; i<10; i++){
            document.write("<br>Perulangan ke-"+i);
        }



    </script>

</body>
</html>