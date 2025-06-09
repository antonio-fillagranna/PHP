<!DOCTYPE html>
<html>
<body>

<?php
// Verifica se o tipo de uma variável é inteiro
$x = 5985;
var_dump(is_int($x));

echo "<br>";

// Verifica novamente...
$x = 59.85;
var_dump(is_int($x));
?>

</body>
</html>