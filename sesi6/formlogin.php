<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>
    
    <form action="registrasi.php" method="POST">
        <table>
            <tr>
                <td><label for="nama">User Name</label></td>
                <td> : <input type="text" name="username"></td>
            </tr>

            <tr>
                <td><label for="password">Password</label></td>
                <td> : <input type="password" name="password"></td>
            </tr>
        </table>
           <button type="submit">Login</button>
    </form>
   
</body>
</html>