<?php 

include("dbConnect.php");

$sql = "SELECT * FROM students ORDER BY id ASC";
$result = $conn->query(($sql));

$data = $result->fetch_all();
echo json_encode($data);


// echo '<pre>'; print_r($data);
