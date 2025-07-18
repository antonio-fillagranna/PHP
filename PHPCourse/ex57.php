<!DOCTYPE html>
<html>
<body>

<?php
// Esse exemplo demonstra o operador de comparação "diferente" (<>) totalmente equivalente ao !=
// que verifica se dois valores são diferentes entre si.
// O operador retorna true se os valores forem diferentes e false se forem iguais.
// Neste caso, estamos comparando um inteiro e uma string que representam o mesmo número.
// O resultado será false, pois 100 (inteiro) e "100" (string) são considerados iguais em PHP.
// Se você quiser verificar se eles são diferentes, use o operador !==.
$x = 100;  
$y = "100";

var_dump($x <> $y);
?>  

</body>
</html>
