<?php
session_start();

    $db_hostname = "127.0.0.1";
    $db_username = "root";
    $db_password = "";
    $db_name = "pglife";
    // $db_table ="title";

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    if (mysqli_connect_errno()) {
        // Throw error message based on ajax or not
        echo "Failed to connect to MySQL! Please contact the admin.";
        return;
    }
if($_POST) {
    $id=$_POST['city'];

    
}   


else{
    $id=$_GET['city'];

}


$sql = "SELECT * FROM pgweb where city='$id'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Best PG's in <?= $row['city'];?> | PG Life</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    <link href="css/common.css" rel="stylesheet" />
    <link href="css/property_list.css" rel="stylesheet" />
</head>

<body>
<?php
    include "includes/header.php";
    ?>

    <div id="loading">
    </div>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb py-2">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
            <?= $row['city'];?>
            </li>
        </ol>
    </nav>

    <div class="page-container">
        <div class="filter-bar row justify-content-around">
            <div class="col-auto" data-toggle="modal" data-target="#filter-modal">
                <img src="img/filter.png" alt="filter" />
                <span>Filter</span>
            </div>
            <div class="col-auto">
                <img src="img/desc.png" alt="sort-desc" />
                <span>Highest rent first</span>
            </div>
            <div class="col-auto">
                <img src="img/asc.png" alt="sort-asc" />
                <span>Lowest rent first</span>
            </div>
        </div>

        
        <?php
                $row_count = mysqli_num_rows($result);
                if ($row_count > 0) {
                    foreach($result as $data){ ?>
        <div class="property-card row">


            <div class="image-container col-md-4">
                <img src="img/<?= $data['image1'] ?>" />
            </div>
            <div class="content-container col-md-8">
                <div class="row no-gutters justify-content-between">
                    <div class="star-container" title="4.5">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="interested-container">
                        <i class="far fa-heart"></i>
                        <div class="interested-text">3 interested</div>
                    </div>
                </div>
                <div class="detail-container">
                    <div class="property-name"><?= $data['pgname'];?></div>
                    <div class="property-address"> <?= $data['address'];?> </div>
                    <div class="property-gender">
                        <img src="img/<?= $data['image5'] ?>"/>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="rent-container col-6">
                        <div class="rent">Rs 9,500/-</div>
                        <div class="rent-unit">per month</div>
                    </div>
                    <div class="button-container col-6">
                        <a  href="property_detail.php?t=<?= $data['id'] ?>" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>
        </div>
        <?php } }

    else{
  $response = array("something went wrong");
  echo json_encode($response);
  return;
}
?> 

     
    </div>

    <div class="modal fade" id="filter-modal" tabindex="-1" role="dialog" aria-labelledby="filter-heading" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="filter-heading">Filters</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <h5>Gender</h5>
                    <hr />
                    <div>
                        <button class="btn btn-outline-dark btn-active" onclick="ajax(this.value)">
                            No Filter
                        </button>
                        <button class="btn btn-outline-dark" onclick="ajax(this.value)">
                            <i class="fas fa-venus-mars"></i>Unisex
                        </button>
                        <button class="btn btn-outline-dark" onclick="ajax(this.value)">
                            <i class="fas fa-mars"></i>Male
                        </button>
                        <button class="btn btn-outline-dark" onclick="ajax(this.value)">
                            <i class="fas fa-venus"></i>Female
                        </button>
                    </div>
                </div>

                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-success">Okay</button>
                </div>
            </div>
        </div>
    </div>

    <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
    ?>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script>
        function ajax($data){
            alert($data);
        }
    </script>
</body>

</html>
