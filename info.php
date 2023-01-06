<?php 
    header("Content-Type: application/json");
    if (isset($_POST["name"])){
        $name = $_POST["name"];
        if ($name == "abc"){
            echo json_encode(array("valid" => true));
        }
        else{
            echo json_encode(array("valid" => false));
        }
    }
    else {
        echo json_encode(array("valid" => false));
    }
?>