<!DOCTYPE html>
<html>
<body>

<?php
// Condicional Switch Case
// Exemplo de uso do switch case em PHP
$corFavorita = "vermelho";

switch ($corFavorita) {
  case "vermelho":
    echo "Sua cor favorita é vermelho!";
    break;
  case "azul":
    echo "Sua cor favorita é azul!";
    break;
  case "verde":
    echo "Sua cor favorita é verde!";
    break;
  default:
    echo "Sua cor favorita não é vermelho, azul nem verde!";
}
?>

</body>
</html>