<!DOCTYPE html>
<html>
<body>

<?php
// Operador não idêntico
// O operador !== verifica se os valores e tipos são diferentes
// Neste exemplo, os arrays $x e $y são comparados
// e o resultado será TRUE, pois eles têm chaves e valores diferentes
// O operador !== retorna TRUE se os arrays não forem idênticos
// e FALSE se forem idênticos
$x = array("a" => "vermelho", "b" => "verde");  
$y = array("c" => "azul", "d" => "amarelo");  

var_dump($x !== $y);
?>  

</body>
</html>
