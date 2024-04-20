<?php
$servername = "localhost";
$username = "meu_usuario";
$password = "senha-usuario";
$database = "banco-de-dados";

$conn = new mysqli($servername, $username, $password, $database);

if($conn -> connect_error){
    die("Conecção falhou: " . $conn->connect_errno);
}

?>