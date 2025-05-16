<!DOCTYPE html>
<html>
<body>

<?php
/*
Regras para variáveis em PHP:
- Uma variável começa com o símbolo $, seguido pelo nome da variável.
- O nome de uma variável deve começar com uma letra ou o caractere underscore (_).
- O nome de uma variável não pode começar com um número.
- O nome de uma variável pode conter apenas caracteres alfanuméricos e underscores (A-Z, 0-9 e _).
- Os nomes das variáveis são sensíveis a maiúsculas e minúsculas ($idade e $IDADE são variáveis diferentes).
- O nome de uma variável não pode conter espaços em branco.
- O nome de uma variável não pode conter caracteres especiais, como @, #, $, %, etc.
- O nome de uma variável não pode ser uma palavra reservada do PHP (como if, else, while, etc.).
*/
$x = 5;
$y = 10;

function meuTeste() {
  global $x, $y;
  $y = $x + $y;
}

meuTeste(); // executar função
echo $y; // exibir o novo valor para a variável $y
?>

</body>
</html>