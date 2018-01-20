<?php
//ini_set('display_errors', 'On');
//error_reporting(E_ALL);

function favList ($arr) {
    echo "<ul>";

    foreach( $arr as $key => $value) {
        if( $key != 'myName')
            echo "<li>" . $value . "</li>";
    }

    echo "</ul>";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>CIT 31300 - Week 1 - PHP Review</title>
    <?php include 'header.php';?>
</head>

<body>
  
<?php
$myNamedArray = array('myName' => 'Amanda', 'favColor' => 'purple', 'favMovie' => 'Hocus Pocus', 'favBook' => 'Lovely Bones', 'favWebsite' => 'Reddit');

echo "<h1>My name is " . $myNamedArray['myName'] . "</h1>";

favList($myNamedArray);

?>

</body>

<footer>
    <?php include 'footer.php';?>
</footer>

</html>


