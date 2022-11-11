<?php
$num = $_POST['num'];

if($num > 0){
    echo "Valor Positivo";
}else if($num < 0){
    echo "Valor Negativo";
}else{
    echo "Igual a Zero";
}
?>