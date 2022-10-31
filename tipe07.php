<?php 
class objek {
    function proses_objek()
    {
        echo "Proses Objek 1";
    }
    function proses_objek2()
    {
        echo "Proses Objek 2";
    }
}
$var_baru = new objek;
$var_baru -> proses_objek();
echo "</br>";
$var_baru -> proses_objek2();
?>