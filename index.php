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
echo "<h2>Alumnos</h2>";
foreach ($alumnos as $alumno) {
    echo "<li>"."Nombre: " . $alumno->getNombre() . " ".$alumno->getApellidos(). ",  Email: " . $alumno->getEmail()."</li>" ;
}

// lista prof
echo "<h2>Profesores</h2>";
foreach ($profesores as $profesor) {
   echo "<li>" . "Nombre: " . $profesor->getNombre() . " ".$profesor->getApellidos(). ",  Email: " . $profesor->getEmail() . "</li>";
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
echo "<h2>Alumnos <= 23</h2>";
foreach ($filtradoalumn as $alumn) {
    echo "<li>" . "Nombre: " . $alumn->getNombre() . " ".$alumn->getApellidos(). ",  Email: " . $alumn->getEmail() . "</li>";
}

//matriculacion de alumnos en asignaturas
$alumnos[0]->matricularEnAsignatura($asignaturas[0]);
$alumnos[1]->matricularEnAsignatura($asignaturas[0]);
$alumnos[1]->matricularEnAsignatura($asignaturas[1]);
$alumnos[2]->matricularEnAsignatura($asignaturas[0]);
$alumnos[2]->matricularEnAsignatura($asignaturas[2]);
$alumnos[3]->matricularEnAsignatura($asignaturas[0]);
$alumnos[4]->matricularEnAsignatura($asignaturas[0]);
$alumnos[4]->matricularEnAsignatura($asignaturas[1]);
$alumnos[4]->matricularEnAsignatura($asignaturas[2]);
$alumnos[5]->matricularEnAsignatura($asignaturas[0]);
$alumnos[6]->matricularEnAsignatura($asignaturas[1]);
$alumnos[6]->matricularEnAsignatura($asignaturas[1]);
$alumnos[7]->matricularEnAsignatura($asignaturas[2]);
$alumnos[8]->matricularEnAsignatura($asignaturas[1]);
$alumnos[9]->matricularEnAsignatura($asignaturas[0]);

// // alumn que tienen al menos dos asignaturas
// echo "<h2>Alumnos con al menos dos asignaturas</h2>";
// foreach ($alumnos as $alumno) {
//     if (count($alumno->getAsignaturas()) >= 2) {
//         echo "<li>" . "Nombre: " . $alumno->getNombre() . ", Email: " . $alumno->getEmail() . "</li>";
//     }
// }


// alumnos con almenos dos asignaturas 
$filtroalumn2 = array_filter($alumnos, function($alumno) {
    return count($alumno->getAsignaturas()) >= 2;
});
//listado de el array filter de fitroalumn2 
echo "<h2>Alumnos con al menos dos asignaturas</h2>";
foreach ($filtroalumn2 as $alumno) {
    echo "<li>" . "Nombre: " . $alumno->getNombre() . " ".$alumno->getApellidos(). ",  Email: " . $alumno->getEmail() . "</li>";
}

//asignaturas con algún alumno matriculado
echo "<h2>Asignaturas con algun Alumno Matriculados</h2>";
$asignaturasMatriculadas = [];

foreach ($alumnos as $alumno) {
    foreach ($alumno->getAsignaturas() as $asignatura) {
        if (!in_array($asignatura, $asignaturasMatriculadas)) {
            $asignaturasMatriculadas[] = $asignatura;
        }
    }
}

//asignaturas que tienen al menos un alumno
foreach ($asignaturasMatriculadas as $asignaturaMatriculada) {
    echo "<li>"."Nombre: " . $asignaturaMatriculada->getNombre() . ", Créditos: " . $asignaturaMatriculada->getCreditos() . "</li>";
}


?>
<!-- <?php
        echo "--------------------------------------------------------------";

        ;

        // Matricular al primer alumno en la primera asignatura
        $alumnos[0]->matricularEnAsignatura($asignaturas[0]);
        // Intentar matricular al mismo alumno en la misma asignatura nuevamente
        $alumnos[0]->matricularEnAsignatura($asignaturas[0]);
        echo "--------------------------------------------------------------";
        ?>  -->