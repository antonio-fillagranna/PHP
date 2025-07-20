<!DOCTYPE html>
<html>
<body>

<?php
// Esse código verifica se duas variáveis são diferentes usando o operador de comparação estrita (!==).
// O operador !== verifica tanto o valor quanto o tipo das variáveis.
// Se as variáveis forem do mesmo tipo e valor, o resultado será false.
// Se forem de tipos diferentes ou valores diferentes, o resultado será true.
$x = 100;  
$y = "100";

var_dump($x !== $y);
?>  

</body>
</html>
