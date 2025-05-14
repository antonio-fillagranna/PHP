<!DOCTYPE html>
<html>
<body>

<?php
$x = 5; // escopo global

function meuTeste() {
  // usar x dentro desta função gerará um erro
  echo "<p>Variável x dentro da função é: $x</p>";
}
meuTeste();

echo "<p>Variável x fora da função é: $x</p>";
?>

</body>
</html>