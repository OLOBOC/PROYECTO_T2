<?php
abstract class Miembro {
    private $id;
    private $nombre;
    private $apellidos;
    private $email;
    

    public function __construct($id, $nombre, $apellidos, $email, $edad) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        }

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

    

    
}
?>
