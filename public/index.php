<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "../core/init.php";
// var_dump($connexion);
require_once "../app/routers/index.php";
require_once "../app/views/templates/index.php";