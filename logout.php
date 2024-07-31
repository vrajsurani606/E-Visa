<?php
session_start();
if(isset($_REQUEST['logout']))
{
    if(isset($_SESSION['username']))
    {
    // Unset the username session variable
    session_destroy(); // Destroy the session

    header("Location: login.html"); // Redirect to the login page
    } 
        else {
    header("Location: login.html"); // Redirect to the login page if the session is not set
    
    }
}
