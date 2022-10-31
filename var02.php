<?php
$a =1; 
$b =2;
function jumlah(){
    global $a, $b;
    $b = $a + $b;
}
echo "$a + $b = "; 
jumlah();
echo $b;
?>