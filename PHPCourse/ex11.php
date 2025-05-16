<!DOCTYPE html>
<html>
<body>

<?php
$x = 5;
$y = 10;
/*
O $GLOBALS é um array superglobal em PHP que permite acessar variáveis globais 
de qualquer parte do código, incluindo dentro de funções. Como o PHP normalmente 
trata variáveis dentro de funções como locais, sem $GLOBALS, a função meuTeste() 
não conseguiria modificar $y, porque $x e $y foram declarados fora dela.
*/
function meuTeste() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}
/*
Sem $GLOBALS, qualquer alteração feita em $y dentro da função não afetaria sua versão global. 
Esse mecanismo é útil, mas precisa ser usado com cuidado: o abuso de variáveis globais pode tornar 
o código menos previsível e mais difícil de depurar. Uma alternativa mais segura seria usar return para retornar valores modificados.
*/
meuTeste();
echo $y;
?>

</body>
</html>