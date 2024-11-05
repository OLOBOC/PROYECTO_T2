<?php
include_once 'clases/Miembro.php';
include_once 'clases/Profesor.php';
include_once 'clases/Alumno.php';
include_once 'clases/Asignatura.php';

$asignaturas = ["DWES", "DWEC", "DIW", "DAW"];

//llamada alumnosmuestra
$alumnos = Alumno::crearAlumnosDeMuestra($asignaturas);

//llamada profesoresmuestra
$profesores = Profesor::crearProfesoresDeMuestra($asignaturas);

// lista alumn 

foreach ($alumnos as $alumno) {
    echo "Nombre: " . $alumno->getNombre() . ", Email: " . $alumno->getEmail() ;
}

// lista prof
echo "<h2>Profesores</h2>";
foreach ($profesores as $profesor) {
    echo  "Nombre: " . $profesor->getNombre() . ", Email: " . $profesor->getEmail();
}
?>