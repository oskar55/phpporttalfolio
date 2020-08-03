<?php

require_once 'vendor/autoload.php';

use App\Models\Job;
use App\Models\Project;
use App\Models\Printable;


//instancias del objeto Job
$job1 = new Job('PHP Developer', 'un duro en todo desarrollo, se puede aprender mas y mas, ya tiempo trabajando en este lenguaje con el aprendi a programas');
$job1->months = 6; 

$job2 = new Job('React Native Developer', 'apenas estamos aprendiendo para sacar apps moviles');
$job2->months = 2; 

$project1 = new Project('Project 1', 'descripcion del proyecto 1');

//matriz de objetos para ser recorridos en la vista
$jobs = [
    $job1,
    $job2,  
];

//matriz para los proyectos
$projects = [
  $project1
];

  //los argumentos deben cumplir con la INTERFAZ prntable
  function printElement(Printable $job){
    //if para el resto de codigo usando CONTINUE no tiene necesidad de alvergar el codigo adentro, porque esto rompe el cliclo FOR
    if ($job->visible == false) {                  
      return;
    }    
    //contenido de la funcion
    echo '<li class="work-position">';
    echo '<h5>'. $job->getTitle() . '</h5>';
    echo '<p>'. $job->getDescription() .'</p>';
    echo '<p>'. $job->getDurationAsString() .'</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }