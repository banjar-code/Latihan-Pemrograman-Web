<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11210072 - Arif Noer Wahidin - Syarat Nikah</title>
    <style>
        table{
            border-color: white;
        }
        .kirim{
            padding-right: 30px;
            padding-left: 30px;
            padding-top: 10px;
            padding-bottom: 10px;
            background-color: #2c6dfd;
            color: #fff;
            border: 0px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
<table border='1' cellspacing='0' cellpadding='10' align='center' width='300'>
<tr><th colspan="3" align="center">Syarat Nikah</th></tr>
<tr><td>Laki-laki</td><td align="center">:</td><td><input type="checkbox" name="laki" value="1">Ada</input></td></tr>
<tr><td>Perempuan</td><td align="center">:</td><td><input type="checkbox"  name="perempuan" value="1">Ada</input></td></tr>
<tr><td>Saksi</td><td align="center">:</td><td><input type="checkbox" name="saksi" value="1">Ada</input></td></tr>
<tr><td align="center" colspan="3"> <input class="kirim" type="submit" name="tombol" value="Kirim" /></td></tr>
</table>
</form>
<?php
if(isset($_POST['tombol'])){
    $a = $_POST['laki'];
    $b = $_POST['perempuan'];
    $c = $_POST['saksi'];
    echo"<table border='0' align='center' cellpadding='10'>";
    if ($a == '1' and $b == '1' and $c == '1'){
        echo"<tr><td>Pernikahan Sah</td></tr>";
    } else if ($a == '1' and $b == '1' or $c == '0'){
        echo"<tr><td>Pernikahan Sah</td></tr>";
    } else{
        echo"<tr><td>Pernikahan Tidak Sah</td></tr>";
    }
    echo"</table>";
    }
?>
</body>
</html>