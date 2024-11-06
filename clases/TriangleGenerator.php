<?php

class Trianglulo {

   
    public function generartriangulo(int $altura): string {
        // cadena vacia por si es negativo
        if ($altura < 0) {
            return "Error es negativo";
        }
        $triangulo = ""; // Cadena para almacenar el triángulo completo

        // Bucle para las filas del triángulo
        for ($i = 0; $i < $altura; $i++) {
            // Calculo de los espacios 
            $spacios = str_repeat("&nbsp;", $altura - $i - 1); //con sqrt calculo la reiz cuadrada y repito

            // Calculo asteriscos
            $asteriscos= str_repeat("*", $i * 2 + 1);

            // espacios y asteriscos
            $triangulo .= "<p>" .$spacios .$spacios .$asteriscos. "</p>\n";
        }

        return $triangulo; 
    }
}


?>