<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

function myLoad($class) {
    include_once('classes/'.strtolower($class).'.class.php');
}

spl_autoload_register('myLoad');

function object_test( $user) {
    return $user instanceof RegisteredUser;
}

$user = new RegisteredUser( 'regular', 'newuser');

$user->first_name = $_POST["fname"];
$user->last_name = $_POST["lname"];
$user->email_address = $_POST["email"];

if( object_test($user) == false ) {
    echo "Ojbect test failed. Not a RegisteredUser object";
    exit;
}

?> 


<!DOCTYPE html>
<html>
<head>
    <title>CIT313 - Fall 2014 - Exercise 3 - CRobertDillon</title>
</head>
<body>
The registered user's first name is: <?php echo $user->first_name; ?><br/>The registered user's last name is: <?php echo $user->last_name; ?><br/>The registered user's email address is: <?php echo $user->email_address; ?><br/><hr/>Processing Complete	

	
</body>
</html>