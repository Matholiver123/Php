<?php
$idade = 18;
if($idade >= 0 && $idade<= 12){
    echo(" Criança");
} elseif ($idade >= 13 && $idade <= 17) {
    echo("adolescente");
}else{
    echo("Adulto");
}
?>