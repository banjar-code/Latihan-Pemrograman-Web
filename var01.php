<?php
$a = 1; /* Variable global */
function Test() {
    global $a;
    echo $a; /* Variable local*/
}

Test();
?>