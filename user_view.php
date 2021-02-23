<?php
    require_once('./User/UserCLS.php');
    $user = new user();
    //$user->getAbility(9);

    $user->getEverybody();

    /*
    echo $user->getUserId();
    echo "<br />";
    echo $user->getUsername();
    echo "<br />";
    echo $user->getFirstName();
    echo "<br />";
    echo $user->getLastName();
    echo "<br />";
    echo $user->getPassword();
    echo "<br />";
    echo $user->getAbilityRating();
    */
?>
