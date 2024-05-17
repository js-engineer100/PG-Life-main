<?php
session_start();
require("../includes/database_connect.php");

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
// $message = $_POST['message'];



$sql = "SELECT * FROM booking WHERE email='$email'";
$result = mysqli_query($conn, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}

$row_count = mysqli_num_rows($result);
if ($row_count != 0) {
    $response = array("success" => false, "message" => "This email id is already registered with us!");
    echo json_encode($response);
    return;
}

// $sql = "INSERT INTO title (name, email, phone, people, rooms, dob, arrival, room_preference, message) VALUES ('$email', '$password', '$full_name', '$phone', '$gender', '$college_name')";
$sql ="INSERT INTO `booking` (`user_id`,`name`, `email`, `phone`, `people`, `rooms`, `dob`, `arrival`, `room_pr`,`pg_name`,`city_n`) VALUES ('$user_id','$name', '$email', '$phone', '$people', '$rooms', '$dob', '$arrival', '$room_preference', '$pg_name', '$city_n')";
$result = mysqli_query($conn, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}

$response = array("success" => true, "message" => "Your account has been created successfully!");
header("Location:../thanks.php");

echo json_encode($response);
mysqli_close($conn);
