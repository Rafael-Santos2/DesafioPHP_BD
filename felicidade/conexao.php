<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "felicidade";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    echo "Erro de conexão" . $conn->connect_error;
} else {
    echo "";
}

?>