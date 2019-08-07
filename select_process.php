<?php 

    include("connection.php");

    $negeri = $_POST["state"];

    $sql = "INSERT INTO state_select (state_id) VALUES ('".$negeri."')";
    $result = mysqli_query($conn, $sql);

    if ($result){
        echo json_encode ("success");
    }

?>