<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "720_space";

$connect = new PDO('mysql:host=localhost;dbname=720_space','root','');
    //new PDO('mysql:host=localhost;dbname=720_space','root','');
    //mysqli_connect($serverName, $userName, $password, $databaseName);

    // if (!$connect) {
    //     echo "Error: Unable to  connect to MySQL. " . PHP_EOL;
    //     echo "Debugging errno " . mysqli_connect_errno() . PHP_EOL;
    //     echo "Debugging errno " . mysqli_connect_error() . PHP_EOL;
    //     }

        session_start();
?>