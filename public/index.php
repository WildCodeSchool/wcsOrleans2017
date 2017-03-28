<?php

require '../config/connect.php';
require __DIR__ . '/../vendor/autoload.php';

$route = $_GET['route'];

if ($route == 'listEleve') {
    $eleve = new \wcs\controller\EleveController();
    $render = $eleve->listAll();

} elseif ($route == 'showEleve') {
    $eleve = new \wcs\controller\EleveController();
    $render = $eleve->show($_GET['id']);
}  else {
    header('Location: index.php');
}

require '../src/view/partial/header.php';
echo $render;
require '../src/view/partial/footer.php';

?>



