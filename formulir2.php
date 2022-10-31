<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
</head>
<body>
    <form method="POST" action="">
    Masukan Jumlah Baris: <input type="text" name="angka" size="2"></br>
          <input type="submit" name="tombol" value="OK">
    </form>
<?php
if(isset($_POST['tombol'])){
echo "test ".$_POST['angka']." ";
for($a = 1; $a <=$_POST['angka']; $a++) {
    echo "</br>$a";
   }
}
?>
</body>
</html>