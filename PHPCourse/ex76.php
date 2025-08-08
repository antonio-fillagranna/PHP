<!DOCTYPE html>
<html>
<body>

<?php
// A diferença entre arrays e arrays associativos é que os arrays associativos usam chaves nomeadas que você atribui a eles.
// Em um array normal, as chaves são números, começando do zero e aumentando em 1 para cada valor subsequente.
// Além disso, os arrays podem ser unidos usando o operador de union (+). Que é o foco deste exemplo.
// O operador de union (união) é usado para unir dois arrays.
$x = array("a" => "vermelho", "b" => "verde");  
$y = array("c" => "azul", "d" => "amarelo");  

print_r($x + $y); // union de $x e $y
?>  

</body>
</html>
