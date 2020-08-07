<?php
//PATRON DE DISEÑO FROMCONTROLLER como un template para inicializar llamados de otros archivos

ini_set('display_errors', 1);
ini_set('display_starup_error', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use App\Models\Job;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'php_fundamentos',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();


//COMO HACER RUTAS en el proyecto
//si esta definid y tiene un valor = get, sino agrega '/'
$route = $_GET['route'] ?? '/';

if ($route == '/') {    
    require '../index.php';
}elseif ($route == 'addJob') {
    require '../addJob.php';
}