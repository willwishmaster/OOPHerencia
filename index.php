<?php

class Usuario{

    private $nombre;
    private $dni;
    private $edad;

    public function __construct($nombre, $dni, $edad)
    {
        echo " El constructor se ejecuta al iniciar la aplicacion"."<br/>";
        $this->nombre = $nombre;
        $this->dni = $dni;
        $this->edad = $edad;
    }

    // public function getNombre(){
    //     return $this->nombre;
    // }

    // public function setNombre($nombre){
    //     $this->nombre = $nombre;
    // }

    public function __get($propiedad)
    {
        if(property_exists($this, $propiedad)){
            return $this->$propiedad;
        }
    }

    public function __set($propiedad,$value)
    {
        if(property_exists($this, $propiedad)){
            $this->$propiedad = $value;
        }
    }

    public function obtenerDatos(){
        echo $this->nombre."<br/>";
        echo $this->dni."<br/>";
    }

    public function __destruct()
    {
        echo "<br/>". " El destructor se ejecuta al cerrar la aplicacion";
    }
}

$usuario = new Usuario("John", 787879, 20);
$usuario->obtenerDatos();
$usuario->__set("nombre","Alex");
echo "El nuevo nombre es: " . $usuario->__get("nombre")."<br/>";

$usuario->__set("edad",22);
echo "La nueva edad es: " . $usuario->__get("edad");

?>