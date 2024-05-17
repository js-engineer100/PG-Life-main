<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | PG Life</title>

    <?php
    include "includes/head_links.php";
    ?>
    <link href="css/home.css" rel="stylesheet" />
    <style>
       .jo{
    visibility: hidden;
    /* height: 0px;
    width: 0px; */
    position: absolute;
    top: 0%;
    transition: transform 0.4s, center 0.4s ;
  }
  .jok{
    visibility: visible;
    position: absolute;
    top: 20%;
    left: 50%;
    transform: translate(-50%,-50%);
  } 
     </style>
</head>


<body>
    <?php
    include "includes/header.php";
    ?>

    <div class="banner-container">
        <h2 class="white pb-3">Happiness per Square Foot</h2>

        
                    <?php
                //Check if user is loging or not
                if (!isset($_SESSION["user_id"])) {
                ?>
                    <h2 class="white pb-3">Find the best <span style="font-size: 8rem; font-weight: 600;">PG</span>  in Your Locality
        </h2>
        <div class="jo" id="jab"> 
        <div class="j">
        <div class="modal-dialog"  role="document" style=" font-family: 'Courier New', Courier, monospace;">
            <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title">Welcome Students!</h4>
                  <div style="width: 50px;  padding-left: 10px;">

                    <i class="fa-solid fa-face-smile-wink fa-bounce fa-2xl"></i>
                  </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="ok()">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>We are here to find you a best PG like HOME...</p>
                <h5 style="font-size: 1.7rem; font-weight: 600; ">Help us to Find You a PG </h5>
                <div style="padding-left: 45%;">
                    <i class="fa-solid fa-house fa-2xl"></i>
                </div>
              </div>
              <div class="modal-footer">
                  <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#signup-modal" >Signup / Login</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="ok()">Close</button>
              </div>
            </div>
          </div>
        </div>
        </div>
        </div>
                <?php
                } else {
                ?>
                    <form id="search-form" action="property_list.php" method="post">
            <div class="input-group city-search">
                <input type="text" class="form-control input-city" id='city' name='city' placeholder="Enter your city to search for PGs" />
                <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary" >
                        <i class="fa fa-search"></i>
                    </button>







                </div>
            </div>
        </form>
                <?php
                }
                ?>
    </div>

    <div class="page-container">
        <h1 class="city-heading">
            Major Cities
        </h1>
        <div class="row">
            <div class="city-card-container col-md">
                <a href="property_list.php?city=Delhi">
                    <div class="city-card rounded-circle">
                        <img src="img/delhi.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Mumbai">
                    <div class="city-card rounded-circle">
                        <img src="img/mumbai.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=Bangluru">
                    <div class="city-card rounded-circle">
                        <img src="img/bangalore.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php?city=hyderabad">
                    <div class="city-card rounded-circle">
                        <img src="img/hyderabad.png" class="city-img" />
                    </div>
                </a>
            </div>
        </div>
    </div>


    

    <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
    ?>

<script > let j=document.getElementById('jab');
        lock=()=>{
         
          j.classList.add("jok");
          
        }
        setTimeout(lock,5000);
        function ok(){
          j.classList.remove("jok");
    
        }
        // let v=document.getElementsByTagName('div');
        function signup(){
            j.classList.add("modal")
        }</script>
         <script>
            function sutri(){

                let v =document.getElementById("city").value;
                if(v=="hydrabad"){
                    window.open("hydrabad.php");
                }
                else if(v=="Hydrabad"){
                    window.open("hydrabad.php");

                }
            
                else if(v=="delhi"){
                    window.open("delhi.php");

                } else if(v=="Delhi"){
                    window.open("delhi.php");

                }
                else if(v=="banglore"){
                    window.open("benglore.php");
                }
               
                else if(v=="Banglore"){
                    window.open("benglore.php");
                }
                else if(v=="Chennai"){
                    window.open("chennai.php");
                }
                else if(v=="chennai"){
                    window.open("chennai.php");
                }
               
                
            };

        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>

</body>


</html>
