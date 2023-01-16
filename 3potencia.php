<?php


$numero = $_POST['numero'];

$trianguloPascal= array(
array(2),//0  para 2
array(3,3),//1 para 3
array(4,6,4),//2 para 4, etc
array(5,10,10,5),
array(6,15,20,15,6),
array(7,21,35,35,21,7),
array(8,28,56,70,56,28,8),
array(9,36,84,126,126,84,36,9),
array(10,45,120,210,252,210,120,45,10)
);



//$i para b
//$j para a
$posicionArrayTriangulo=0;
$j=$numero-1;


echo 'a'."<sup>".$numero."</sup>".' ';


for($i=1;$i<$numero;$i++) {

    $nivel=$numero-2;
    $str = $trianguloPascal[$nivel][$posicionArrayTriangulo];

    echo '+ '.$str.'(a'."<sup>".$j."</sup>".')(b'."<sup>".$i."</sup>".') ';
    $posicionArrayTriangulo++;

    $j--;
}

echo '+b'."<sup>".$numero."</sup>".' ';




?>