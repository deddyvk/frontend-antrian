<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "antrian";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//mysqli_close($conn);

?>