<?php
abstract class Miembro {
    private $id;
    private $nombre;
    private $apellidos;
    private $email;
    private $edad;

    public function __construct($id, $nombre, $apellidos, $email, $edad) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->edad = $edad;}

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getEdad() {
        return $this->edad;
    }

    
}
?>
