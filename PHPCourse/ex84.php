<!DOCTYPE html>
<html>
<body>

<?php
/*
Declarações Condicionais em PHP
    Muito frequentemente, ao escrever código, você deseja executar ações diferentes para condições diferentes. Você pode usar declarações condicionais no seu código para fazer isso.
    No PHP, temos as seguintes declarações condicionais:
        - Declaração if – executa um código se uma condição for verdadeira
        - Declaração if...else – executa um código se uma condição for verdadeira e outro código se essa condição for falsa
        - Declaração if...elseif...else – executa códigos diferentes para mais de duas condições
        - Declaração switch – seleciona um entre vários blocos de código para ser executado
*/
$t = date("H");
// Condicional IF (SE)
// A variável $t contém a hora atual do servidor
// Se a hora for menor que 20, exiba "Tenha um bom dia!"
if ($t < "20") {
  echo "Tenha um bom dia!";
}
?>

</body>
</html>