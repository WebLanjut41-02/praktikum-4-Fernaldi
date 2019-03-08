<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="<?php echo base_url(); ?>index.php/controller/registrasion" method="POST">
    <tr>
        <td><h1>Registrasi</h1></td><br>
    </tr>
    <tr>
        <td>Nama :</td>
        <td><input type="text" name="Nama"></td><br>
    </tr>
    <tr>
        <td>Email   :</td>
        <td><input type="text" name="Email"></td><br>
    </tr>
    <tr>
        <td>Password    :</td>
        <td><input type="password" name="Password"></td><br>
    </tr>
    <tr>
        <td>Alamat  :</td>
        <td><input type="text" name="Alamat"></td><br>
    </tr>
    <tr>
        <td><input type="submit" name="submit"></td>
    </tr>
    </form>
</body>
</html>