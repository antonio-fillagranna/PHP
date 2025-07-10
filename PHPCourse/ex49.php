<!DOCTYPE html>
<html>
<body>

<?php
// Comparação de igualdade e identidade em PHP
// O operador '=' é usado para atribuição
// O operador '==' verifica se os valores são iguais
// O operador '===' verifica se os valores e os tipos são iguais   
$x = 100;  
$y = "100";

var_dump($x == $y); //retorna verdadeiro porque o valor é o mesmo
var_dump($x === $y); //retorna falso porque o tipo é diferente
?>  

</body>
</html>
