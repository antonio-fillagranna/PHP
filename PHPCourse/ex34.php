<!DOCTYPE html>
<html>
<body>

<?php
// Converte float para int
// A conversão de float para int remove a parte decimal do número, resultando em um número inteiro.
// A conversão é feita usando o operador de cast (int) ou a função intval().
// A conversão de float para int é útil quando se deseja trabalhar apenas com a parte inteira de um número, como em cálculos financeiros ou contagens.
// Exemplo de uso da conversão de float para int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Converte string para int
// A conversão de string para int é feita da mesma forma que a conversão de float para int.
// A string deve conter um número válido, caso contrário, a conversão resultará em 0.
// A conversão de string para int é útil quando se deseja trabalhar com números armazenados como strings, como em entradas de usuário ou dados de banco de dados.
// Exemplo de uso da conversão de string para int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>

</body>
</html>