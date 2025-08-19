<!DOCTYPE html>
<html>
<body>

<?php
// Além do if e do else temos o elseif (SE NÃO, SE)
// Podemos usar quantos elseif forem necessários
// Também podemos usar o else no final, mas ele é opcional
// O elseif como o nome já diz é uma junção do if com o else
// Ou seja, se a condição do if for falsa, ele verifica a condição do elseif
$t = date("H");
echo "<p>A hora (do servidor) é " . $t;
echo ", e exibirá a seguinte mensagem:</p>";

if ($t < "10") {
  echo "Tenha uma boa manhã!";
} elseif ($t < "20") {
  echo "Tenha um bom dia!";
} else {
  echo "Tenha uma boa noite!";
}
?>

</body>
</html>