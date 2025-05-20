<?php
/**
 * Script de práctica para phpDocumentor.
 *
 * Este archivo contiene ejemplos de funciones documentadas para demostrar
 * el uso de phpDocumentor y sus etiquetas.
 *
 * @author Luis Lara Anguiano
 * @version 1.0.0
 */

/**
 * Suma dos números enteros.
 *
 * Esta función recibe dos números enteros como parámetros y devuelve la suma de ambos.
 *
 * @param int $num1 El primer número entero.
 * @param int $num2 El segundo número entero.
 * @return int La suma de $num1 y $num2.
 * @internal Esta es una nota interna para desarrolladores: ¡Asegúrate de que los parámetros sean realmente enteros!
 */
function sumarEnteros(int $num1, int $num2): int
{
    return $num1 + $num2;
}

/**
 * Genera un saludo personalizado.
 *
 * Esta función toma un nombre como entrada y devuelve un saludo personalizado.
 * Si no se proporciona un nombre, utiliza "Mundo" como valor predeterminado.
 *
 * @param string $nombre El nombre de la persona a saludar. Por defecto es "Mundo".
 * @return string El mensaje de saludo.
 * @author Luis Lara Anguiano
 * @version 1.0.1 Se añadió un valor por defecto para el parámetro nombre.
 */
function generarSaludo(string $nombre = "Mundo"): string
{
    /**
     * @internal Considerar añadir más opciones de personalización del saludo en el futuro.
     */
    return "¡Hola, " . $nombre . "!";
}
?>