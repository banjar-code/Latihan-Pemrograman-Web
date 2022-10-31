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
    Nama : <input type="text" name="nami" size="10" placeholder="Masukan Nama" maxlength="15" > </br>
    Password : <input type="password" name="pass" size="20"> </br>
    saran : <textarea name="saran" cols="50" rows="5"></textarea></br>
    Lulusan : <select name='lulusan'>
                <option value=''> pilih salah satu </option>
                <option value='SMA' selected> Sekolah Menengah Atas </option>
                <option value='SMK'> Sekolah Menengah Kejuruan </option>
                <option value='MA'> Madrasah Aliyah </option>
                <option value='PAKET C'> Program Paket C </option>
              </select>
            </br>
    Jenis Kelamin : <input type="radio" name="jk" value="L">Laki Laki</input>
                    <input type="radio" name="jk" value="P">Perempuan </input>
            </br>
    syarat2 : <input type="checkbox" name="syarat1" value="ijazah"> ijazah<br>
          <input type="checkbox" name="syarat2" value="foto"> foto berwarna 3x4 1 lmbr <br>
          <input type="checkbox" name="syarat3" value="uang"> uang pendaftaran<br>
          <input type="submit" name="tombol" value="OK">
    </form>
<?php
if(isset($_POST['tombol'])){
echo "test ".$_POST['lulusan']." ";
}
?>
</body>
</html>