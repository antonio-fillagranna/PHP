<!DOCTYPE html>
<html>
<body>

<?php
class Carro {
  public $cor;
  public $modelo;
  public function __construct($cor, $modelo) {
    $this->cor = $cor;
    $this->modelo = $modelo;
  }
  public function mensagem() {
    return "Meu carro é um " . $this->cor . " " . $this->modelo . "!";
  }
}

$meuCarro = new Carro("preto", "Volvo");
echo $meuCarro -> mensagem();
echo "<br>";
$meuCarro = new Carro("vermelho", "Toyota");
echo $meuCarro -> mensagem();
?>

</body>
</html>