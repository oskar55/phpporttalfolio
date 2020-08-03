<?php
namespace App\Models;


//interfaz, esa funcion que contiene se declara de nuevo de manera publica dentro de otra clase o archivo y funcionara
interface Printable {
    public function getDescription();
}