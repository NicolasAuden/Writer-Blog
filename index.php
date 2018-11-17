<?php

session_start();
ob_start();


//includes
include_once("model/BddConnect.php");

include_once("layout/layout.php");

ob_end_flush();

?>

