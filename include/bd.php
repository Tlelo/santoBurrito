<?php
$servername = "localhost";
$database = "Santoburrito";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Conectado con éxito";
mysqli_close($conn);
?>