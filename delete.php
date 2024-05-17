<?php
session_start();
require("includes/database_connect.php");


$id=$_GET["t"];
$sql = "SELECT * FROM booking WHERE name='$name'";
$result = mysqli_query($conn, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "you have no booking");
    echo json_encode($response);
    return;
}

// $row_count = mysqli_num_rows($result);
// if ($row_count != 0) {
//     $response = array("success" => false, "message" => "This email id is already registered with us!");
//     echo json_encode($response);
//     return;
// }


// $sql = "INSERT INTO user (email, password, full_name, phone, gender, college_name) VALUES ('$email', '$password', '$full_name', '$phone', '$gender', '$college_name')";
$sql ="DELETE FROM `booking` WHERE id=$id";
$result = mysqli_query($conn, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}

// $response = array("success" => true, "message" => "Your account has been created successfully!");
// echo json_encode($response);
// mysqli_close($conn);
header("Location:booking_list.php");

?>







