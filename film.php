<?php

require './connect.php';
$page = isset($_GET['page']) ? $_GET['page'] : 0;

$query = "SELECT * FROM film LIMIT 0,12";
$sql = $conn->query($query);
$data = [];

while ($row = $sql->fetch_assoc()) {
    array_push($data, $row);
}

header("Content-Type: application/json");
echo json_encode($data);
