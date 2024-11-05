<?php

class Alumno extends Miembro
{
    private $asignaturas = [];
    private $cursoAbonado;

    public function __construct($id, $nombre, $apellidos, $email, $edad, $cursoAbonado = false)
    {
        parent::__construct($id, $nombre, $apellidos, $email, $edad);
        $this->cursoAbonado = $cursoAbonado;
    }
    public function getAsignaturas()
    {
        return $this->asignaturas;
    }



    //metodos
    public function abonarCurso()
    {
        $cursoAbonado = true;
    }


    public function matricularEnAsignatura($asignatura)
    {
        if (!in_array($asignatura, $this->asignaturas)) {
            $this->asignaturas[] = $asignatura;
        }
    }
    
}
