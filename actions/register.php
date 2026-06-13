<?php 
    include "../classes/User.php";

    // Create an Object
    $user = new User;

    // Call the method
    $user->store($_POST);

    // $_POST holds all the data from the form in views/register.php
?>