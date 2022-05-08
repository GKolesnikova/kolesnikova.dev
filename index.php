<?php 
require __DIR__ . '\autoload.php';

$ctrl = (empty($_GET['page'])) ? 'Main' : ucfirst($_GET['page']) ;
$action = (empty($_GET['action'])) ? 'defaultAction' : lcfirst($_GET['action']) . 'Action' ;

\App\Loader::start('\App\Controllers\\' . $ctrl, $action);