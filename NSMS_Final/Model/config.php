<?php
$host = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "nsms";

function getConnection() {
    global $host, $dbuser, $dbpass, $dbname;
    $conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
    
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
    
    return $conn;
}
?>
