<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>veiculo</title>
</head>
<body>
    <?php
    class Carro {
        public $marca;
        public $modelo;
        public $ligado = false;

        public function __construct($marca, $modelo) {
            $this->marca = $marca;  
            $this->modelo = $modelo;
        }

        public function ligar() {
            $this->ligado = true;
            echo "O {$this->modelo} fez 'vrum vrum!!' Certamente está ligado.<br>";
        }

        public function status() {
            $estado = $this->ligado ? "ligado" : "desligado";
            echo "O carro {$this->marca} {$this->modelo} está {$estado}.<br>";
        }
    }
    ?>
</body>
</html>