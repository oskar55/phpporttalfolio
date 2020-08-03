<?php

namespace App\Models;

class Job extends BaseElement  {
    //la clase ya esta heredando todo de BASEELEMENT

    public function __construct($title, $description){
        $newTitle = 'JOB: '.$title;
        parent::__construct($newTitle, $description);
    }

    //metodos
    public function getDurationAsString(){
        $years = floor($this->months / 12);
        $extraMonths = $this->months % 12;
        return "JOB duration: $years Years $extraMonths months";
    }   

    
}