<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
</head>
<body>
    
<?php
    if(isset($_POST["txUSER"])){
        $usr = $_POST["txUSER"];
        if($usr==""){
            echo "<div><h3 style='color:red;padding:5px;'>User Name/Password salah</h3></div>";
        }
    }

    if(isset($_POST["txPASSKEY"])){
        $pwd = $_POST["tXPASSKEY"];
        if($pwd==""){
            echo "<div><h3 style='color:red;padding:5px;'>User Name/Password salah</h3></div>";
        }
    }
?>

<form action="latihan02.php" method="POST">
    <div>
        Username
    <input type="text" id="txUSER" name="txUSER" required>
    </div>

    <div>
        Password
        <input type="password" id="txPASKEY" name="txPASSKEY">
    </div>

    <div>
        <button type="submit"> Login </button>
        <a href="daftar.php"> Daftar </button>
    </div>
</form>

</body>
</html>








