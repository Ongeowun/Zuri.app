<?php
/*Creating a connection to the database*/
$uname = "localhost";
$name = "root";
$password = "";
$db = "zuricode";

$conn = mysqli_connect($uname, $name, $password, $db);

if(!$conn) {
    echo "Login failed";
}
?>