<?php
include_once 'clases/Miembro.php';
include_once 'clases/Profesor.php';
include_once 'clases/Alumno.php';
include_once 'clases/Asignatura.php';
// declarar variable asignaturas
$asignaturas = ["DWES", "DWEC", "DIW", "DAW"];

//llamada alumnosmuestra
$alumnos = Alumno::crearAlumnosDeMuestra($asignaturas);

//llamada profesoresmuestra
$profesores = Profesor::crearProfesoresDeMuestra($asignaturas);

//llamada asigmuestra
$asignaturas = Asignatura::crearAsignaturasDeMuestra();

// lista alumn 
foreach ($alumnos as $alumno) {
    echo "Nombre: " . $alumno->getNombre() . ", Email: " . $alumno->getEmail();
}

// lista prof
echo "<h2>Profesores</h2>";
foreach ($profesores as $profesor) {
    echo  "Nombre: " . $profesor->getNombre() . ", Email: " . $profesor->getEmail();
}

// lista asig
echo "<h2>Asignaturas</h2>";
foreach ($asignaturas as $asignatura) {
    echo "<li>" . "Nombre: " . $asignatura->getNombre() . ", Créditos: " . $asignatura->getCreditos() . "</li>";
}

//-------------------------
//listado de alumnos que tienen 23 años o menos
$filtradoalumn = array_filter($alumnos, function($alumn) {
    return $alumn->getEdad() <= 23;
});

