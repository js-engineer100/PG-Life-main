<?php
session_start();
require("includes/database_connect.php");

$user_id=$_SESSION['user_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$people = $_POST['people'];
$rooms = $_POST['rooms'];
$dob = $_POST['dob'];
$arrival = $_POST['arrival'];
$room_preference = $_POST['room_preference'];
$pg_name=$_SESSION['pg_n'];
$city_n=$_SESSION['city_n'];

$id=$_SESSION['ids'];



// $sql = "INSERT INTO user (email, password, full_name, phone, gender, college_name) VALUES ('$email', '$password', '$full_name', '$phone', '$gender', '$college_name')";
$sql ="UPDATE booking SET name='$name', email='$email', phone='$phone', people='$people', rooms='$rooms', dob='$dob', arrival='$arrival', room_pr='$room_preference' WHERE id=$id";
$result = mysqli_query($conn, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}

// $response = array("success" => true, "message" => "Your account has been created successfully!");
// echo json_encode($response);
// mysqli_close($conn);
header("Location:view_details.php");

?>







