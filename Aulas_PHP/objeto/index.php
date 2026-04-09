<?php
class Frutas {

  public $nome;
  public $cor;

  function set_details($nome, $cor) {
    $this->nome = $nome;
    $this->cor = $cor;
  }

  function get_details() {
    echo "Nome: " . $this->name . ". Cor: " . $this->color .".<br>";
  }
}
?>