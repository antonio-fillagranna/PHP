<!DOCTYPE html>
<html>
<body>

<?php
/*
Além do operador de incremento ++, aqui vemos tbm o uso de variavel estática "static"
se fosse uma variável normal, ela seria reiniciada a cada chamada da função
mas como é uma variável estática, ela mantém o valor entre as chamadas.
*/
function meuTeste() {
  static $x = 0;
  echo $x;
  $x++;
}

meuTeste();
echo "<br>";
meuTeste();
echo "<br>";
meuTeste();
?>

</body>
</html>