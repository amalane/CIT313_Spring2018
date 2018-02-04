<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once("classes/users.class.php");
include_once('classes/user_type1.class.php');
include_once('classes/user_type2.class.php');


$user = new user_type1("Regular User", "bob");
$user->first_name = "Bob";
$user->last_name = "Jim";
$user->email_address = "bob.jim@email.com";

$admin = new user_type2("Administrator", "alice");
$admin->first_name = "Alice";
$admin->last_name = "Jane";
$admin->email_address = "alice.jane@email.com";



echo "User Level: " . $user->user_level . "<br/>";
echo "Registered User ID: " . $user->user_id . "<br/>";
echo "Registered User Type: " . $user->user_type . "<br/>";
echo "Registered First Name: " . $user->first_name . "<br/>";
echo "Registered Last Name: " . $user->last_name . "<br/>";
echo "Registered Email: " . $user->email_address . "<br/>";

echo "<hr/>";

echo "User Level: " . $admin->user_level . "<br/>";
echo "Admin User ID: " . $admin->user_id . "<br/>";
echo "Admin User Type: " . $admin->user_type . "<br/>";
echo "Admin First Name: " . $admin->first_name . "<br/>";
echo "Admin Last Name: " . $admin->last_name . "<br/>";
echo "Admin Email: " . $admin->email_address . "<br/>";


?>