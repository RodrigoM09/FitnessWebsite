<?php
session_start();
require '../config/database.php';

//Get signup form data if signup button was clicked
if(isset($_POST['submit'])){
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $avatar = $_FILES['avatar'];

    //Check input values
    if(!$firstname) {
        $_SESSION['signup'] = "Please enter your first name.";
    } elseif (!$lastname) {
        $_SESSION['signup'] = "Please enter your last name.";
    } elseif (!$username) {
        $_SESSION['signup'] = "Please enter your username.";
    } elseif (!$email) {
        $_SESSION['signup'] = "Please enter a valid email.";
    } elseif (strlen($createpassword) < 8 || strlen($confirmpassword) < 8) {
        $_SESSION['signup'] = "Password should eight or more characters.";
    } elseif (!$avatar['name']) {
        $_SESSION['signup'] = "Please add an image.";
    }else {
        //Check password match
        if($createpassword !== $confirmpassword){
            $_SESSION['signup'] = "Passwords do not match";
        } else {
            //Hash Password
            $hash_password = password_hash($createpassword, PASSWORD_DEFAULT);
            $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email'";
            $user_check_result = mysqli_query($connection, $user_check_query);
            if(mysqli_num_rows($user_check_result) > 0){
                $_SESSION['signup'] = "Username or Email already exists.";
            } else {
                //Rename Avatar
                $time = time(); // use time of upload to create unique image name.
                $avatar_name = $time . $avatar['name'];
                $avatar_tmp_name = $avatar['tmp_name'];
                $avatar_destination_path = 'images/' . $avatar_name;

                //Check to make sure its an actual image.
                $allowed_files = ['png', 'jpg', 'jpeg'];
                $extention = explode(".", $avatar_name);
                $extention = end($extention);
                if(in_array($extention, $allowed_files)){
                    // Check Files Size(1mb)
                    if($avatar['size'] < 1000000){
                        //Upload
                        move_uploaded_file($avatar_tmp_name, $avatar_destination_path);
                    } else {
                        $_SESSION['signup'] = 'File size is to big, should be less than 1mb';
                    }
                } else {
                    $_SESSION['signup'] = 'File type should be png, jpg or jpeg';

                }
                
            }
        }
    }

    //Check SESSION for errors
    if(isset($_SESSION['signup'])){
        $_SESSION['signup-data'] = $_POST;
        header('location: ' . ROOT_URL . 'views/signup.php');
        die();
    } else {
        $insert_user_query = "INSERT INTO users set firstname='$firstname', lastname='$lastname', username='$username', email='$email', password='$hash_password', avatar='$avatar_name', admin=0";
        $insert_user_result = mysqli_query($connection, $insert_user_query);
        if(!mysqli_errno($connection)){
            // Redirect to Log in page
            $_SESSION['singup-success'] = "Registration Succesful. Please log in";
            header('location : ' . ROOT_URL . 'views/signin.php');
            die();
        }
    }
} else {
    // If page was accessed with out click
    header('location: ' . ROOT_URL . 'views/signup.php');
    die();
}

?>