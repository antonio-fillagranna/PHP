<!DOCTYPE html>
<html>
<body>

<?php
// Usar uma constante dentro de uma função (quando ela é definida fora da função)
// Definindo uma constante
// A constante é definida com a função define() e não pode ser alterada ou removida
// As constantes são globais e podem ser acessadas de qualquer lugar do script
define("SAUDACOES", "Bem vindo ao PHP!");

function meuTeste() {
  echo SAUDACOES;
}
 
meuTeste();
?> 

</body>
</html>