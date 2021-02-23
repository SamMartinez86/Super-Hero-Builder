<?php
    require_once('./header.php');
?>  

<?php
    require_once('./User/UserCLS.php');

    //$user = new user();
    //$user->getUser(1);

    $user = new user();
    $user->getUserN('ironman@avengers.com');

    echo $user->getUsername();
    echo "<br />";
    echo $user->getFirstName();
    echo "<br />";
    echo $user->getLastName();
    echo "<br />";
    echo $user->getAbilityRating();
?>

<?php
    require_once('./footer.php');
?> 
