<?php
$peso=85;
$altura=1.81;
$imc =$peso/$altura **2;


if ($imc < 18){
    echo "esta abaixo". PHP_EOL;


}elseif($imc < 25){
    echo"esta na media". PHP_EOL;

}else {
 echo"acima". PHP_EOL;


}


