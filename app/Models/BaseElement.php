<?php

namespace App\Models;
require_once 'Printable.php';


class BaseElement implements Printable{
    //propiedades
    public $title;
    public $description;
    public $visible = true;
    public $months;

    public function __construct($title, $description){
      $this->setTitle($title);
      $this->description = $description;
    }
    
    //metodos
    public function setTitle($title){
      if ($title == '') {
        $this->title = 'N/A';
      } else {
        $this->title = $title;
      }
    }

    public function getTitle(){
        return $this->title;
    }

    public function getDurationAsString(){
      $years = floor($this->months / 12);
      $extraMonths = $this->months % 12;
      return "$years Years $extraMonths months";
    }

    //interface que permitira negar o permitir como una validacion la descripcion
    public function getDescription(){
      return $this->description;
    }

}