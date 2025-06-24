<!DOCTYPE html>
<html>
<body>

<?php
// Exemplo de uso da função round() em PHP
// A função round() arredonda um número para o inteiro mais próximo
// Se o número estiver exatamente entre dois inteiros, ele arredonda para o inteiro par mais próximo
// Exemplo: round(0.50) arredonda para 0, round(1.50) arredonda para 2
// Sintaxe: round(float $value, int $precision = 0, int $mode = PHP_ROUND_HALF_UP): float
// O parâmetro precision define o número de casas decimais a serem arredondadas
// O parâmetro mode define o modo de arredondamento (opcional)
// Exemplo de uso:
echo(round(0.60) . "<br>");
echo(round(0.50) . "<br>");
echo(round(0.49) . "<br>");
echo(round(-4.40) . "<br>");
echo(round(-4.60));
?>

</body>
</html>
