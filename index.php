<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
include("dbConnect.php");


if(isset($_POST) and isset($_POST['student'])){

    $_POST = json_decode($_POST['student'],true);

    $name = $_POST['name'];
    $Roll = $_POST['Roll'];
    $clases = $_POST['clases'];
    $section = $_POST['section'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];


    $sql = "INSERT INTO students (name,Roll, clases, section,address,mobile,email) VALUES ('$name','$Roll','$clases','$section','$address','$mobile','$email')";

    if($conn->query($sql))
    {
        echo json_encode(["success" => true, "message" => "Student inserted successfully"]);

    }
    else{
        echo json_encode(["success" => false, "message" => "Student insertion failed"]);
    }

    $conn->close();
}else{
    echo json_encode(["success" => false, "message" => "not valid request method"]);
}

?>