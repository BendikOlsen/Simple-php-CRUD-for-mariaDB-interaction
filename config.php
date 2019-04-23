<?php

$dbuser = 'root';
$dbpass = 'Cm102d86Tt';
$dbhost = 'localhost';
$dbname     = 'DEMO';
$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$link) {
        die('Could not connect:'.mysqli_error());
};

?>

