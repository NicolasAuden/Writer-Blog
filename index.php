<?php

session_start();
require '../app/Autoloader.php';
App\Autoloader::register();

$app = App\App::getInstance();


$posts = $app->getTable('Posts');
$posts->all();







/*if(isset($_GET['p'])){
    $p = $_GET['p'];
} else {
    $p = 'home';
}

ob_start();
if($p === 'home') {
    require '../pages/home.php';
} elseif ($p === 'article') {
    require '../pages/single.php';
}elseif ($p === 'category') {
    require '../pages/categorie.php';
}

$content = ob_get_clean();
require '../pages/templates/default.php';*/

?>

