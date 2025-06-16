<!DOCTYPE html>
<html>
<body>

<?php
// Verifica se a variável é numérica
// A função is_numeric() retorna TRUE se a variável for numérica, caso contrário, retorna FALSE.
// A função is_numeric() aceita números inteiros, números de ponto flutuante e strings numéricas.
// A função is_numeric() não aceita strings que contenham caracteres não numéricos, como letras ou símbolos especiais.
// A função is_numeric() é útil para validar entradas de usuário, especialmente quando se espera um número.
// Exemplo de uso da função is_numeric()
$x = 5985;
var_dump(is_numeric($x));

echo "<br>";

$x = "5985";
var_dump(is_numeric($x));

echo "<br>";

$x = "59.85" + 100;
var_dump(is_numeric($x));

echo "<br>";

$x = "Olá";
var_dump(is_numeric($x));
?>

</body>
</html>