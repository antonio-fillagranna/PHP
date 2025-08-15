<!DOCTYPE html>
<html>
<body>

<?php
  // Operador ternário para definir o status do usuário
  // a variável $usuario é o valor de $_GET['usuario']
  // e 'anônimo' se não existir
  // O operador ternário verifica uma condição e retorna um valor baseado nela
  
  // se empty($usuario) = TRUE, define $status = "anônimo"
  echo $status = (empty($usuario)) ? "anônimo" : "logado";
  echo("<br>");

  $usuario = "John Doe";
  // se empty($usuario) = FALSE, define $status = "logado"
  echo $status = (empty($usuario)) ? "anônimo" : "logado";
?>

</body>
</html>