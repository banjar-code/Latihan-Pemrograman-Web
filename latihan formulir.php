<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
<form method="POST" action="">
<form method="POST" action="">
    Masukan Jumlah Baris: <input type="text" name="angka" size="2"></br>
          <input type="submit" name="tombol" value="OK">
    </form>
    
   
<table width="50%" border="1" cellspacing="0" cellpadding="10" align="center">
        <tr bgcolor="gren" align="center"><th >NO</th> <th>Nama</th><th>Alamat</th></tr>
        <?php
if(isset($_POST['tombol'])){
echo "test ".$_POST['angka']." ";
for($a = 1; $a <=$_POST['angka']; $a++);
}
?>

        <tr align="center"><?php  echo " <td> $a </td>"; ?> <td>saya</td> <td>alamat</td></tr>
        <tr align="center"><?php  echo " <td> $a </td>"; ?> <td>saya</td> <td>alamat</td></tr>
        <tr align="center"><?php  echo " <td> $a </td>"; ?> <td>saya</td> <td>alamat</td></tr>
        <tr align="center"><?php  echo " <td> $a </td>"; ?> <td>saya</td> <td>alamat</td></tr>
        <tr align="center"><?php  echo " <td> $a </td>"; ?> <td>saya</td> <td>alamat</td></tr>
        
    </table>
    </form>

</body>
</html>