<?php
$angka1 = $_POST['angka'];
if ($_POST['kirim_form'] == 'ada'){
    if($angka1 == true){
        echo "<pre>";
        echo '<a href="'. $_SERVER['PHP_SELF'] .'"> Silahkan Coba Lagi</a>';
        echo "</pre>";
    } else
    {
        echo "<pre>";
        echo " Yang anda masukan adalah 0 atau kosong </br>";
        echo '<a href="'. $_SERVER['PHP_SELF'] .'"> Silahkan Coba Lagi</a>';
        echo "</pre>";
    } else
    {
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Masukan sembarang nilai: <input type="text" nama="angka" /></br>
        <input type="hidden" name="kirim_form" value="ada" />
        <input type="submit" name="submit" value="Kirim" />
        </form>
        <?php
    }
}
?>