<?php

require '../config/connect.php';
require __DIR__ . '/../vendor/autoload.php';

$route = $_GET['route'] ?? 'listEleve';
$render = '';

if ($route == 'listEleve') {
    $eleve = new \wcs\controller\EleveController();
    $render = $eleve->listAll();

} elseif ($route == 'showEleve') {
    $eleve = new \wcs\controller\EleveController();
    $render = $eleve->show($_GET['id']);
} elseif ($route == 'addEleve') {
    $eleve = new \wcs\controller\EleveController();
    $render = $eleve->add();
}


require '../src/view/partial/header.php';
echo $render;
require '../src/view/partial/footer.php';
