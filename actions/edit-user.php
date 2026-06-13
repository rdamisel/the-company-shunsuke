<?php
    include "../classes/User.php";

    //create an object

    $user = new User;

    $user->update($_POST, $_FILES);


?>