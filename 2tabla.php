<?php
$monto = $_POST['monto'];
$interes = $_POST['interes'];
$periodo = $_POST['periodo'];

$interes=$interes/100;
$abono = $monto/$periodo;
$saldo = $monto;



echo '<table border="1"> ';
echo '<tr> ';

        echo '<td>';
        echo 'Perido';
        echo '</td> ';

        echo '<td>';
        echo 'Saldo';
        echo '</td> ';
    
        echo '<td>';
        echo 'Interes';
        echo '</td> ';
    
        echo '<td>';
        echo 'Abono';
        echo '</td> ';
    
        echo '<td>';
        echo 'Pago';
        echo '</td> ';

    echo '</tr> ';

    

for($i=1;$i<=$periodo;$i++) {
    echo '<tr> ';

        echo '<td>';
            echo $i;
        echo '</td> ';

        echo '<td>';
            echo 'Q. '. number_format($saldo, 2, '.', ',');
        echo '</td> ';
    
        echo '<td>';
            echo 'Q. '. number_format($saldo*$interes, 2, '.', ',');
        echo '</td> ';
    
        echo '<td>';
            echo 'Q. '. number_format($abono, 2, '.', ',');
        echo '</td> ';
    
        echo '<td>';
            echo 'Q. '. number_format(($abono+($saldo*$interes)), 2, '.', ',');
        echo '</td> ';

    echo '</tr> ';

   $saldo = $saldo - $abono;

}
echo '</table> ';


?>