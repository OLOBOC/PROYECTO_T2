<?php
include_once 'clases/Miembro.php';
class Alumno extends Miembro
{
    private $asignaturas = [];
    private $cursoAbonado;
    private $edad;

    public function __construct($id, $nombre, $apellidos, $email, $edad, $cursoAbonado = false)
    {
        parent::__construct($id, $nombre, $apellidos, $email, $edad);
        $this->cursoAbonado = $cursoAbonado;
        $this->edad = $edad;
    }
    public function getAsignaturas()
    {
        return $this->asignaturas;
    }

    public function getEdad() {
        return $this->edad;
    }

    //Metodos
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
    //Comprobar que no se puede matricular a un alumno dos veces en la misma asignatura.
    // public function matricularEnAsignatura($asignatura)
    // {
    //     if (!in_array($asignatura, $this->asignaturas)) {
    //         $this->asignaturas[] = $asignatura;
    //         echo "Te has matriculado en la asignatura: " . $asignatura->getNombre() . ".<br>";
    //     } else {
    //         echo "Ya estás matriculado en la asignatura: " . $asignatura->getNombre() . ".<br>";
    //     }
    // }

    //metodo estatico crearalumnmuestra(llmar en eel index)
    public static function crearAlumnosDeMuestra($asignaturas)
    {
        $alumnos = [
            new Alumno(1, "Laura", "Martínez", "laura.martinez@email.com", 22),
            new Alumno(2, "Sergio", "López", "sergio.lopez@email.com", 25),
            new Alumno(3, "Carlos", "García", "carlos.garcia@email.com", 24),
            new Alumno(4, "Marta", "Sánchez", "marta.sanchez@email.com", 23),
            new Alumno(5, "Alba", "Fernández", "alba.fernandez@email.com", 21),
            new Alumno(6, "David", "Rodríguez", "david.rodriguez@email.com", 26),
            new Alumno(7, "Lucía", "Jiménez", "lucia.jimenez@email.com", 20),
            new Alumno(8, "Jorge", "Pérez", "jorge.perez@email.com", 22),
            new Alumno(9, "Elena", "Romero", "elena.romero@email.com", 23),
            new Alumno(10, "Pablo", "Torres", "pablo.torres@email.com", 24),
        ];

        return $alumnos;
    }


}
