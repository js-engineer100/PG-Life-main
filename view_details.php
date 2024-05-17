<?php
session_start();
require("database_connect.php");
if(!$_GET){
  $id=$_SESSION['ids'];

}else{
$id=$_GET['t'];}

$sql = "SELECT * FROM booking WHERE id='$id'";
$result = mysqli_query($conn, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}

$row_count = mysqli_num_rows($result);
if ($row_count == 0) {
    $response = array("success" => false, "message" => "No Data Found.");
    echo json_encode($response);
    return;
}

$row = mysqli_fetch_assoc($result);
$_SESSION['ids']=$row['id'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
<link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
<link href="css/common.css" rel="stylesheet" />
    <style>
        label,h2{
            font-weight: 600;
        font-family: 'Open Sans', sans-serif;

        }
        div{
    font-family: 'Open Sans', sans-serif;

        }
    </style>
</head>
<body>
     <?php
    include "includes\header.php";
    ?>
     <nav aria-label="breadcrumb">
        <ol class="breadcrumb py-2">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="property_list.php"> <?= $row['pg_name'];?></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
            Details
            </li>
        </ol>
    </nav>
    
    <!-- <div><h1 style="background-color: rgb(42, 192, 252);font-weight: 600; padding-left:20px">Bookings Details</h1></div> -->


    <div class="container text-center" style="border: solid black 2px; margin-top: 100px; padding: 20px ;">
        <div class="row">
            <div class="col">
                <label>
             <h2>Pg Details</h2></label>
            </div>
            
          </div><hr>
          <div class="row">
            <div class="col"><div><label for="">Pg Name</label></div>
            
            <?= $row['pg_name'];?>
            </div>

            <div class="col">
            <div><label for="">City</label></div>
              <?= $row['city_n'];?>
              
          </div>
        </div><hr>
            <div class="row">
                <div class="col">
                <div><label for="">Booked Rooms</label></div>
              <?= $row['rooms'];?>
                  
                </div>
                <div class="col">
                <div><label for="">Room Preference</label></div>
              <?= $row['room_pr'];?>
                  
                </div>
           
                <div class="col">
                <div><label for="">Booked at</label></div>
              <?= $row['created_at'];?>
                  
                </div>
          </div>
    </div>


    <div class="container text-center" style="border: solid black 2px; margin-top: 100px; padding: 20px ;">
        <div class="row">
            <div class="col">
                <label>
             <h2>My Details</h2></label>
            </div>
            
          </div><hr style="font-weight: 300;">
          <div class="row">
            <div class="col"><div><label for="">Name</label></div>
            
            <?= $row['name'];?>
            </div>
            <div class="col">
            <div><label for="">Email</label></div>
              <?= $row['email'];?>
              
          </div>
        </div><hr>
            <div class="row">
                <div class="col">
                <div><label for="">Mobile No.</label></div>
              <?= $row['phone'];?>
                  
                </div>
                <div class="col">
                <div><label for="">Persons</label></div>
              <?= $row['people'];?>
                  
                </div>
           
          </div>
          
        </div>
    <div class="container text-center" style="border: solid black 2px; margin-top: 100px; padding: 20px ;">


    <a href="updating2.php" class="btn btn-primary">Edit Details</a>
    </div>
  </body>

</html>