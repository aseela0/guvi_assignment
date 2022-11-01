<?php 

$server = "sql12.freemysqlhosting.net";
$user = "sql12530715";
$pass = "eay5juGxXM";
$database = "sql12530715";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>