<!DOCTYPE html>
<html>
<body>

<?php
// Esse operador é chamado de "Spaceship Operator" e é usado para comparar dois valores.
// Ele retorna -1 se o primeiro valor for menor, 0 se forem iguais, e
// 1 se o primeiro valor for maior que o segundo.
// É útil para ordenação e comparação de valores.
// Exemplo de uso do operador <=> em PHP
$x = 5;  
$y = 10;

echo ($x <=> $y); // -1 porque 5 é menor que 10
echo "<br>";

$x = 10;  
$y = 10;

echo ($x <=> $y); // 0 porque 10 é igual a 10
echo "<br>";

$x = 15;  
$y = 10;

echo ($x <=> $y); // 1 porque 15 é maior que 10
?>  

</body>
</html>
