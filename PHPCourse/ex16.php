<!DOCTYPE html>
<html>
<body>

<?php
/*
exemplo de uso de print
*/
$txt1 = "Aprendendo PHP";
$txt2 = "https://github.com/antonio-fillagranna/PHP/tree/main/PHPCourse";
/*
As strings são cercadas por aspas, mas há uma diferença entre aspas simples e aspas duplas no PHP.
Ao usar aspas duplas, variáveis podem ser inseridas diretamente na string, como no exemplo acima.
Ao usar aspas simples, as variáveis precisam ser inseridas usando o operador . desta forma:
*/
print '<h2>' . $txt1 . '</h2>';
print '<p>Estudando em: ' . $txt2 . '</p>';
?>

</body>
</html>
