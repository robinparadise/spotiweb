<?php
$fruits = ["apple", "banana", "cherry"];

// Output the data as JSON
header('Content-Type: application/json');
echo json_encode($fruits);
?>