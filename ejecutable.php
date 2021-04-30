<?php
$num1 = $_POST['n1'];
  $num2 = $_POST['n2'];
  $opera=$_POST['operaciones'];
 
if($opera == 1){
    $Resultado = $num1 + $num2;
}
else if($opera == 2){
    $Resultado = $num1 - $num2;
}
 
else if($opera == 3){
    $Resultado = $num1 * $num2;
}
 
else if($opera == 4){
    $Resultado = $num1 / $num2;
}
 
echo "La solución es: ".$Resultado;


?>