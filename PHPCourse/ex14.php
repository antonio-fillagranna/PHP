<!DOCTYPE html>
<html>
<body>

<?php
/*
Com PHP, existem basicamente duas maneiras de obter saída: echo e print.
echo e print são praticamente iguais. Ambos são usados para exibir dados na tela.
As diferenças são pequenas: echo não retorna valor, enquanto print retorna o valor 1,
(podendo este valor ser usado como boolean para retornar em uma expressão). echo pode 
aceitar múltiplos parâmetros (embora isso seja raro), enquanto print aceita apenas um argumento. 
echo é ligeiramente mais rápido que print.
A instrução echo pode ser usada com ou sem parênteses: echo ou echo().
*/
$txt1 = "Aprendendo PHP";
$txt2 = "https://github.com/antonio-fillagranna/PHP/tree/main/PHPCourse";

echo "<h2>$txt1</h2>";
echo "<p>Estudando em: $txt2</p>";
?>

</body>
</html>
