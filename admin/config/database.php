<?php
require 'constants.php';

//Connect to Database
$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);

if (mysqli_errno($connection)){
    die(mysqli_error($connection));
}
?>