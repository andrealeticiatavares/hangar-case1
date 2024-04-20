<?php
require conexao.php;

//Consulta para obter os dados dos pedidos
$query = "SELECT 
            DATE(order_date) AS date_order, 
            SUM(order_total) AS total_orders 
            FROM orders 
            GROUP BY DATE(order_date)";
$result = $conn -> query($sql);

$order_per_days = array();

//Verifica se a resultados da consulta e coloca dentro do array
if($result -> num_rows > 0){
    while($row = $result -> fetch_assoc()){
        $order_per_days [$row["date_order"]] = $row["total_orders"];
    }
} else{
    echo "Não foram encontrados resultados";
}

// Função para calcular a média por dia 
function calculateAverage($order_per_days){
    $total_orders = array_sum($order_per_days);
    $total_days = count($order_per_days);
    return $total_orders / $total_days;

}

$average_order = calculateAverage($order_per_days);


?>