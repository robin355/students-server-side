<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

include("dbConnect.php");

$sql = "SELECT * FROM students";
$result = $conn->query(($sql));

$data = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($data);


?>

