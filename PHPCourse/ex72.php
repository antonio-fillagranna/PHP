<!DOCTYPE html>
<html>
<body>

<h1>peradores lógicos: || </h1>

<p>WVai escrever a mensagem se pelo menos uma das condições forem verdadeiras.</p>

<?php
// Assim como visto no último exemplo, o operador || é um substituto do operador 'or'
// A diferença é que o operador '||' tem maior precedência do que 'or'
// Isso significa que ele é avaliado antes de outros operadores, como 'and' ou 'xor'
// Portanto, é recomendado usá-lo quando você quiser garantir que pelo menos uma das condições seja
$x = 100;  
$y = 50;

if ($x == 100 || $y == 80) {
    echo "Olá mundo!";
}
?>  

</body>
</html>