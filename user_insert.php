  <?php

session_start();

require_once('./User/UserCLS.php');

$user = new user();
$user->setUsername($_POST["username"]);
$user->setFirstName($_POST["firstName"]);
$user->setLastName($_POST["lastName"]);
$user->setPassword($_POST["password"]);
$user->setAbilityRating($_POST["ability_rating"]);
$user->createUser(); 

?>