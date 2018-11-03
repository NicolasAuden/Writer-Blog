<?php

require '../app/Autoloader.php';
App\Autoloader::register();

if(isset($_GET['p'])){
    $p = $_GET['p'];
} else {
    $p = 'home';
}

ob_start();
if($p === 'home') {
    require ROOT . "/pages/home.php";
} elseif ($p === 'single') {
    require ROOT . "/pages/single.php";
}
$content = ob_get_clean();
require ROOT . "/pages/templates/default.php";

?>

