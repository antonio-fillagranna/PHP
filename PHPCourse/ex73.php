<!DOCTYPE html>
<html>
<body>

<h1>Operadores lógicos: ! </h1>

<p>Vai escrever a mensagem se a condição NÃO é verdadeira</p>

<?php
// Neste exemplo, a mensagem será escrita porque a condição é falsa
// O operador ! inverte o resultado da condição
// Se $x não for igual a 90, a mensagem será exibida
// Se $x for igual a 90, a mensagem não será exibida
// Neste caso, $x é 100, então a mensagem será exibida
$x = 100;

if (!($x == 90)) {
    echo "Olá mundo!";
}
?>  

</body>
</html>