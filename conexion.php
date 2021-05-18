<?php
$servername = "localhost";
$database = "sst";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Falló la conexión " . mysqli_connect_error());
}
echo "<div style=display:none;>Te conectaste!</div>";

?>