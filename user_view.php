<?php
    require_once('./header.php');
?>  

<?php
    require_once('./User/UserCLS.php');


    $user = new user();
    //$user->getUser(1);


    $user->getAbility(9);

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

<?php
    require_once('./footer.php');
?> 
