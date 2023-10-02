<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

include("dbConnect.php");



if(isset($_GET['id'])){
        if( (isset($_POST)) and count($_POST) > 0){

    
        $name = $_POST['name'];
        $Roll = $_POST['Roll'];
        $clases = $_POST['clases'];
        $section = $_POST['section'];
        $address = $_POST['address'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $id = $_GET['id'];

        
        $sql = "UPDATE students SET
        name = '$name',Roll = '$Roll', clases = '$clases', section = '$section',address = '$address',mobile = '$mobile',email = '$email'
        WHERE id = $id";

    if($res = $conn->query($sql)){
        echo json_encode([
            'success' => true,
            "message" => "student updated successfully"
        ]);
    }else{
        echo json_encode([
            'success' => false,
            "message" => "Failed to update student"
        ]);
    }
}else{
    echo json_encode([
        'success' => false,
        "message" => "not post data available",
        "data" => $_POST
    ]);
}
}else{
    echo json_encode([
        'success' => false,
        "message" => "no id available"
    ]);
}




?>