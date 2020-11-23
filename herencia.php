<?php
class Usuario{
    protected $nombre;
    protected $edad;

    public function __construct($nombre, $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    public function obtenerNombreEdad(){
        return "<br/>"."El nombre es: ".$this->nombre . " y la edad: " . $this->edad;
    }
}

class Cliente extends Usuario{
    private $saldo;

    public function __construct($nombre, $edad, $saldo)
    {       
        parent::__construct($nombre, $edad);
        $this->saldo = $saldo;
    }
    public function pago($cantidad){
        return $this->nombre . '    pago $'. $cantidad; 
    }
    public function obtenerSaldo(){
        return $this->saldo;
    }
}

$cliente = new Cliente('Juan', 24, 5000);
echo $cliente->pago(2000);
echo $cliente->obtenerNombreEdad();

?>