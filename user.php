<?php
session_start();
require("database_connect.php");

$id=$_SESSION['user_id'];

// $sql = "SELECT * FROM title WHERE id='$id'";


$sql="SELECT *
FROM booking
INNER JOIN title ON title.id=booking.user_id WHERE title.id='$id'";


$result = mysqli_query($conn, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}

$row_count = mysqli_num_rows($result);
if ($row_count == 0) {
    $response = array("success" => false, "message" => "Login failed! Invalid email or password.");
    echo json_encode($response);
    return;
}

$row = mysqli_fetch_assoc($result);
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
   
</head>
<body>
     <?php
    include "includes\header.php";
    ?>
    
    <div><h1 style="background-color: rgb(42, 192, 252);font-weight: 600; padding-left:20px">User/Profile</h1></div>

    <section style="background-color: #eee;">
  <div class="container py-5"  style="border: 1px solid black; margin-top:50px">


    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="img/user.png" alt="User"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3"><?= $row['full_name'];?></h5>
            <!-- <p class="text-muted mb-1">Full Stack Developer</p>
            <p class="text-muted mb-4">Bay Area, San Francisco, CA</p> -->
            <div class="d-flex justify-content-center mb-2">
            <a href="index.php"> <button type="button" class="btn btn-primary">Book PG</button></a>
             <a href="index.php"> <button type="button" class="btn btn-outline-primary ms-1">Home</button></a>
            </div>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              <!-- <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fas fa-globe fa-lg text-warning"></i>
                <p class="mb-0">https://mdbootstrap.com</p>
              </li> -->
              <!-- <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                <p class="mb-0">mdbootstrap</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                <p class="mb-0">@mdbootstrap</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                <p class="mb-0">mdbootstrap</p>
              </li> -->
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-circle-exclamation fa-lg" style="color: #3b5998;"></i>
                <a href="logout.php"> <button type="button" class="btn btn-outline-primary ms-1">Logout</button></a>
                <i class="fa-regular fa-circle-exclamation"></i>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8 ">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"> <?= $row['full_name'];?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"> <?= $row['email'];?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"> <?= $row['phone'];?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Gender</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"> <?= $row['gender'];?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">College</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"> <?= $row['college_name'];?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card mb-6">
              <div class="card-body">
                <p class="mb-4 text-center"> See your all the booked <span class="text-primary  font-italic me-1">PG</span>
                </p>
                <!-- <p class="mb-1 text-center" style="font-size: .77rem;">Web Design</p> -->
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>


             
                <table class="table ">
                <thead>
                  <tr>
                  <!-- <th scope="col">Id</th> -->
                    <th scope="col"></th>
                  
                  
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
                    <td> <p class="mt-4 mb-1 text-center" style="font-size: 1rem;"><?= $row['pg_name'];?></p></td>
                  </tr>
    


 <?php }

}else{
  $response = array("something went wrong");
  echo json_encode($response);
  return;
}
?>
   
  </tbody>
</table> </div>
                
               
             
                <a href="booking_list.php" > <button type="button" class="btn btn-primary mt-4 mb-1 text-center" style="margin-left: 40%;">See Bookings</button></a>

              
              </div>
            </div>
          <!-- </div>
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                </p>
                <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                <div class="progress rounded mb-2" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>