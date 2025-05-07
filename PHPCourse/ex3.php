<!DOCTYPE html>
<html>
<body>

<!--No exemplo abaixo apenas a primeira declaração exibirá o valor da variável $color! Isso ocorre porque $color, $COLOR e $coLOR são tratadas como três variáveis diferentes:
Note que: $COLOR não é o mesmo que $color:
-->

<?php
$cor = "vermelho";
echo "Meu carro é " . $cor . "<br>";
echo "Minha casa é " . $COLOR . "<br>";
echo "Meu barco é " . $coLOR . "<br>";
?>

</body>
</html>