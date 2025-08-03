<!DOCTYPE html>
<html>
<body>

<h1>Operadores lógicos: && </h1>

<p>Vai escrever a mensagem se as duas condições forem verdadeiras.</p>

<?php
// Ele é o mesmo que o operador 'and', mas com maior precedência
// Isso significa que ele é avaliado antes de outros operadores, como 'or' ou 'xor'
// Portanto, é recomendado usá-lo quando você quiser garantir que ambas as condições sejam avaliadas
// Ou alteranivamente, você pode usar parênteses para garantir a ordem de avaliação
// Exemplo: if ((($x == 100) and ($y == 50)) or $x == 200){
// Ele vai entender a precedência sem parênteses usando o && vs and ($x == 100 && $y == 50 or $x == 200){
$x = 100;  
$y = 50;

if ($x == 100 && $y == 50) {
    echo "Olá mundo!";
}
?>  

</body>
</html>
