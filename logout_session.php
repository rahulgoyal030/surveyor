<?php  

session_start();

// remove all session variables
session_unset(); 

// destroy the session 
session_destroy();

$name = "login_source";

setcookie("$name", "", time() - 3000 , "/");



echo "session  and cookie is destroyed ";
?>