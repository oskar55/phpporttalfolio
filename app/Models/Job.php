<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Job extends Model  {

    //la tabla que usara eloquent ilumminate database ORM
    protected $table = 'jobs';

    //metodos
    public function getDurationAsString(){
        $years = floor($this->months / 12);
        $extraMonths = $this->months % 12;
        return "JOB duration: $years Years $extraMonths months";
    }   

    
}