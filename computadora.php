<?php

class Computadora {
    private $marca;
    private $procesador;
    private $ram;
    

    public function __construct($marca, $procesador, $ram) {
        $this->marca = $marca;
        $this->procesador = $procesador;
        $this->ram = $ram;
    }

    public function mostrar_Especificaciones() {
        echo "Marca: " . $this->marca . PHP_EOL;
        echo "Procesador: " . $this->procesador . PHP_EOL;
        echo "RAM: " . $this->ram . PHP_EOL;
    }

    public function getRam(){
        return $this->ram;
    }
}
