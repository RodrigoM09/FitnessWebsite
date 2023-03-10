<?php
require '../config/database.php';

//Get signup form data if signup button was clicked
if(isset($_POST['submit'])){
    
} else {
    // If page was accessed with out click
    header('location: ' . ROOT_URL . 'views/signup.php');
    die();
}
?>