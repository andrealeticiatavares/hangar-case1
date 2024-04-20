<?php
require 'conexao,php';

$request = 'SELECT * FROM orders';
$result = mysql_query($conexao,$query);

$order = [];
while($row = mysqli_featch_assoc($result)){
    $order[] = $row;
}
?>