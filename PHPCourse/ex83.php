<!DOCTYPE html>
<html>
<body>

<?php
// Exemplo de uso de operador de coalescência nula
// O operador ?? retorna o valor à esquerda se ele existir e não for nulo,
// caso contrário, retorna o valor à direita.
// O operador ?? é útil para definir valores padrão.

  // a variável $usuario é o valor de $_GET['usuario']
  // e 'anônimo' se não existir
  echo $usuario = $_GET["usuario"] ?? "anônimo";
  echo("<br>");

  // a variável $cor é "vermelho" se $cor não existir ou for nula
  echo $cor = $cor ?? "vermelho";

  /* Recapitulando os últimos exemplos:
    Operadores em PHP
      Os operadores são usados para realizar operações com variáveis e valores.
      O PHP divide os operadores nos seguintes grupos:
      - Operadores aritméticos
      - Operadores de atribuição
      - Operadores de comparação
      - Operadores de incremento/decremento
      - Operadores lógicos
      - Operadores de string
      - Operadores de array
      - Operadores de atribuição condicional
  */
?>

</body>
</html>