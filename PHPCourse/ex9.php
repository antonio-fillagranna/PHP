<!DOCTYPE html>
<html>
<body>

<?php
function meuTeste() {
  $x = 5; // escopo local
  echo "<p>Variável x dentro da função é: $x</p>";
}
meuTeste();

// usar x fora da função gerará um erro
echo "<p>Variável x fora da função é: $x</p>";
?>

</body>
</html>