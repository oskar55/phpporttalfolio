<?php


use App\Models\Job;
use App\Models\Project;

$jobs = Job::all();


$project1 = new Project('Project 1', 'descripcion del proyecto 1');

//matriz para los proyectos
$projects = [
  $project1
];

  //los argumentos deben cumplir con la INTERFAZ prntable
  function printElement($job){
    //if para el resto de codigo usando CONTINUE no tiene necesidad de alvergar el codigo adentro, porque esto rompe el cliclo FOR
    // if ($job->visible == false) {                  
    //   return;
    // }

    //contenido de la funcion
    echo '<li class="work-position">';
    echo '<h5>'. $job->title . '</h5>';
    echo '<p>'. $job->description .'</p>';
    echo '<p>'. $job->getDurationAsString() .'</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }