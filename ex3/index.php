<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

function myLoad($class) {
    include_once('classes/'.strtolower($class).'.class.php');
}

spl_autoload_register('myLoad');


$static_result = RegisteredUser::mathProblem(40,40);


?>



<!DOCTYPE html>
<html>
<head>
    <title>CIT313 - Spring 2018 - Exercise 3 - AmandaLane</title>
</head>
<body>
<p>Before You Fill Out This Form, Let's Do Some Math!: <?php echo $static_result; ?></p>	
<form id="form1" name="form1" method="post" action="results.php">
<table width="500" border="0" cellpadding="5" cellspacing="5">
  <tr>
    <td width="169">First Name:</td>
    <td width="321"><label for="fname"></label>
      <input type="text" name="fname" id="fname" /></td>
  </tr>
  <tr>
    <td>Last Name:</td>
    <td><input type="text" name="lname" id="lname" /></td>
  </tr>
  <tr>
    <td>Email Address:</td>
    <td><input type="text" name="email" id="email" /></td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="submit" id="submit" value="Register" /></td>
  </tr>
</table>
</form>
	
</body>
</html>