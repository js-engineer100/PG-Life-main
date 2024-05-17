<?php
session_start();
require("database_connect.php");

$id=$_SESSION['user_id'];
$sql = "SELECT * FROM booking WHERE user_id='$id'";
$result = mysqli_query($conn, $sql);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings</title>
    <?php
    include "includes/head_links.php";
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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
                <a href="property_list.php"> My Bookings</a>
            </li>
            
        </ol>
    </nav>
    
<!-- <div><h1 style="background-color: rgb(42, 192, 252);font-weight: 600; padding-left:20px">My Bookings</h1></div>
<div class="container align-center" style="border: solid black 2px; margin-top: 100px; padding: 20px ;"> -->


            
              <table class="table table-dark">
                <thead>
                  <tr>
                  <!-- <th scope="col">Id</th> -->
                    <th scope="col">Name</th>
                    <th scope="col">PG Name</th>
                    <th scope="col">Rooms</th>
                    <th scope="col">City</th>
                  
                  </tr>
                </thead>
                
                <tbody>
                <?php
              $row_count = mysqli_num_rows($result);
              if ($row_count > 0) {
                foreach($result as $data){?>

                  <tr>
                    <!-- <th scope="row">1</th> -->
                    <!-- <td><?= $data['id'] ?></td> -->
                    <td><?= $data['name'] ?></td>
                    <td><?= $data['pg_name'] ?></td>
                    <td><?= $data['rooms'] ?></td>
                    <td><?= $data['city_n'] ?></td>
                    <td><a href="view_details.php?t=<?= $data['id'] ?>"><button  style="background-color: skyblue;">view</button></a></td>
                    <td><a href="delete.php?t=<?= $data['id'] ?>"><button onclick="confirm('do you really want to cancel this booking')"; style="background-color:red;">Cancel</button></a></td>
                  </tr>
    


 <?php }

}else{
  $response = "No Bookings Found";
  echo json_encode($response);
  return;
}
?>
   
  </tbody>
</table> </div>


</body>
</html>