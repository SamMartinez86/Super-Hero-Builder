<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

require_once('./User/UserCLS.php');

$user = new user();
$user->deleteUser($_POST['username']);

?>