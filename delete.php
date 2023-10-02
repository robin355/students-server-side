<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

include("dbConnect.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM students WHERE id = $id";

    if($conn->query($sql)){
        echo json_encode([
            'success' => true,
            "message" => "Student deleted successfully"
        ]);
    }else{
        echo json_encode([
            'success' => false,
            "message" => "Failed to delete student"
        ]);
    }
}else{
    echo json_encode([
        'success' => false,
        "message" => "no id available"
    ]);
}




?>