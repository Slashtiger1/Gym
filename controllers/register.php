<?php

require_once('connection.php');

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    echo 'Bad Request Type';
    die();
}


$email =  $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if(empty($email)){
    echo 'Email Cannot be Empty';
    die();
}

if(empty($password)){
    echo 'Password Cannot be Empty';
    die();
}

if(empty($confirm_password)){
    echo 'Confirm Password Cannot be Empty';
    die();
}

if($password !== $confirm_password){
    echo 'Password Do not Match';
    die();
}


echo 'All Checked Now Insert';


$conn = new connection();



var_dump($conn->get_connection_details());

?>