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

$id=$_GET['t'];

$sql = "SELECT * FROM pgweb WHERE id='$id'";
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




$_SESSION['pg_n']=$row['pgname'];
$_SESSION['city_n']=$row['city'];



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $row['pgname'];?> | PG Life</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    <link href="css/common.css" rel="stylesheet" />
    <link href="css/property_detail.css" rel="stylesheet" />
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
            <li class="breadcrumb-item">
                <a href="property_list.php"> <?= $row['city'];?></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
            <?= $row['pgname'];?>
            </li>
        </ol>
    </nav>

    <div id="property-images" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#property-images" data-slide-to="0" class="active"></li>
            <li data-target="#property-images" data-slide-to="1" class=""></li>
            <li data-target="#property-images" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/<?= $row['image1'];?>" alt="slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/<?= $row['image2'];?>" alt="slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/<?= $row['image3'];?>" alt="slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#property-images" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#property-images" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="property-summary page-container">
        <div class="row no-gutters justify-content-between">
            <div class="star-container" title="4.8">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="interested-container">
                <i class="is-interested-image far fa-heart"></i>
                <div class="interested-text">
                    <span class="interested-user-count">6</span> interested
                </div>
            </div>
        </div>
        <div class="detail-container">
            <div class="property-name"> <?= $row['pgname'];?></div>

            <div class="property-address"> <?= $row['address'];?></div>
            <div class="property-gender">
                <img src="img/<?= $row['image5'];?>" />
            </div>
        </div>
        <div class="row no-gutters">
            <div class="rent-container col-6">
                <div class="rent">Rs 8,500/-</div>
                <div class="rent-unit">per month</div>
            </div>
            <div class="button-container col-6">
                <a href="booking.php" class="btn btn-primary">Book Now</a>
            </div>
        </div>
    </div>

    <div class="property-amenities">
        <div class="page-container">
            <h1>Amenities</h1>
            <div class="row justify-content-between">
                <div class="col-md-auto">
                    <h5>Building</h5>
                    <div class="amenity-container">
                        <img src="img/amenities/powerbackup.svg">
                        <span>Power backup</span>
                    </div>
                    <div class="amenity-container">
                        <img src="img/amenities/lift.svg">
                        <span>Lift</span>
                    </div>
                </div>

                <div class="col-md-auto">
                    <h5>Common Area</h5>
                    <div class="amenity-container">
                        <img src="img/amenities/wifi.svg">
                        <span>Wifi</span>
                    </div>
                    <div class="amenity-container">
                        <img src="img/amenities/tv.svg">
                        <span>TV</span>
                    </div>
                    <div class="amenity-container">
                        <img src="img/amenities/rowater.svg">
                        <span>Water Purifier</span>
                    </div>
                    <div class="amenity-container">
                        <img src="img/amenities/dining.svg">
                        <span>Dining</span>
                    </div>
                    <div class="amenity-container">
                        <img src="img/amenities/washingmachine.svg">
                        <span>Washing Machine</span>
                    </div>
                </div>

                <div class="col-md-auto">
                    <h5>Bedroom</h5>
                    <div class="amenity-container">
                        <img src="img/amenities/bed.svg">
                        <span>Bed with Matress</span>
                    </div>
                    <div class="amenity-container">
                        <img src="img/amenities/ac.svg">
                        <span>Air Conditioner</span>
                    </div>
                </div>

                <div class="col-md-auto">
                    <h5>Washroom</h5>
                    <div class="amenity-container">
                        <img src="img/amenities/geyser.svg">
                        <span>Geyser</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="property-about page-container">
        <h1>About the Property</h1>
        <p>Furnished studio apartment - share it with close friends! Located in posh area of Bijwasan in <?= $row['city'];?>, this house is available for both boys and girls. Go for a private room or opt for a shared one and make it your own abode. Go out with your new friends - catch a movie at the nearest cinema hall or just chill in a cafe which is not even 2 kms away. Unwind with your flatmates after a long day at work/college. With a common living area and a shared kitchen, make your own FRIENDS moments. After all, there's always a Joey with unlimited supply of food. Remember, all it needs is one crazy story to convert a roomie into a BFF. What's nearby/Your New Neighborhood 4.0 Kms from <?= $row['address'];?>.</p>
    </div>

    <div class="property-rating">
        <div class="page-container">
            <h1>Property Rating</h1>
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6">
                    <div class="rating-criteria row">
                        <div class="col-6">
                            <i class="rating-criteria-icon fas fa-broom"></i>
                            <span class="rating-criteria-text">Cleanliness</span>
                        </div>
                        <div class="rating-criteria-star-container col-6" title="4.3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>

                    <div class="rating-criteria row">
                        <div class="col-6">
                            <i class="rating-criteria-icon fas fa-utensils"></i>
                            <span class="rating-criteria-text">Food Quality</span>
                        </div>
                        <div class="rating-criteria-star-container col-6" title="3.4">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>

                    <div class="rating-criteria row">
                        <div class="col-6">
                            <i class="rating-criteria-icon fa fa-lock"></i>
                            <span class="rating-criteria-text">Safety</span>
                        </div>
                        <div class="rating-criteria-star-container col-6" title="4.8">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="rating-circle">
                        <div class="total-rating">4.2</div>
                        <div class="rating-circle-star-container">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="property-testimonials page-container">
        <h1>What people say</h1>
        <div class="testimonial-block">
            <div class="testimonial-image-container">
                <img class="testimonial-img" src="img/<?= $row['image4'];?>">
            </div>
            <div class="testimonial-text">
                <i class="fa fa-quote-left" aria-hidden="true"></i>
                <p>You just have to arrive at the place, it's fully furnished and stocked with all basic amenities and services and even your friends are welcome.</p>
            </div>
            <div class="testimonial-name">- <?= $row['test_name'];?> </div>
        </div>
        <div class="testimonial-block">
            <div class="testimonial-image-container">
                <img class="testimonial-img" src="img/<?= $row['image4'];?>">
            </div>
            <div class="testimonial-text">
                <i class="fa fa-quote-left" aria-hidden="true"></i>
                <p>You just have to arrive at the place, it's fully furnished and stocked with all basic amenities and services and even your friends are welcome.</p>
            </div>
            <div class="testimonial-name">- <?= $row['test_name2'];?> </div>
        </div>
    </div>

    <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
    ?>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>
