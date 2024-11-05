<?php
include_once 'clases/Miembro.php';
include_once 'clases/Profesor.php';
include_once 'clases/Alumno.php';
include_once 'clases/Asignatura.php';

//llamada alumnosmuestra
$alumnos = Alumno::crearAlumnosDeMuestra($asignaturas);

// lista alumn 

foreach ($alumnos as $alumno) {
    echo "Nombre: " . $alumno->getNombre() . ", Email: " . $alumno->getEmail() ;
}
?>