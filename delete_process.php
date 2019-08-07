<?php

include("connection.php");

$negeri = $_POST['select'];

$sql = "DELETE FROM state_select WHERE select_id='".$negeri."'";
$result = mysqli_query($conn, $sql);

if ($result){
    echo json_encode ("success");
}
?>