<?php
$numero = $_POST['numero'];
$factorial=1;
for($i=1;$i<=$numero;$i++) {
    $factorial=$factorial*$i;
}

echo "El factorial de ".$numero." es ".$factorial;

?>