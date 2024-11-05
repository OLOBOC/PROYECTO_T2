<?php

include_once('clases/Miembro.php');
class Profesor extends Miembro {
    private $titular;
    private $asignatura; 

    public function __construct($id, $nombre, $apellidos, $email, $edad, $asignatura) {
        parent::__construct($id, $nombre, $apellidos, $email, $edad);
        $this->titular = false;  
        $this->asignatura = $asignatura;
    }

    public function isTitular() {
        return $this->titular;
    }

    public function getAsignatura() {
        return $this->asignatura;
    }

    public static function crearProfesoresDeMuestra($asignaturas) {
        return [
            new Profesor(1, "Steve", "Wozniak", "steve@apple.com", 70, $asignaturas[0]),
            new Profesor(2, "Ada", "Lovelace", "ada@gmail.com", 36, $asignaturas[2]),
            new Profesor(3, "Taylor", "Otwell", "taylor@laravel.com", 35, $asignaturas[1]),
            new Profesor(4, "Rasmus", "Lerdorf", "rasmus@php.com", 55, $asignaturas[3])
        ];
    }
    
}
?>