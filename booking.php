<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css\booking.css"  rel="stylesheet"/>
    <?php
    include "includes/head_links.php";
    ?>
<link href="css/bootstrap.min.css" rel="stylesheet" />

    
    <title>Book your room | PG Life</title>

  
</head>
<body>


  <div><a href="property_detail2.php"><button >Back</button></a></div>
  <form method="post"  role="form" action="api/booking_details.php" >
  <div><h1>Book Your PG</h1></div>
  <div class="elem-group">
    <label for="name">Your Name</label>
    <input type="text" id="name" name="name" placeholder="Your Name" pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <div class="elem-group">
    <label for="email">Your E-mail</label>
    <input type="email" id="email" name="email" placeholder="your Email" required>
  </div>
  <div class="elem-group">
    <label for="phone">Your Phone</label>
    <input type="tel" id="phone" name="phone" placeholder="Mobile" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>
  </div>
  <hr>
  <div class="elem-group inlined">
    <label for="adult">People</label>
    <input type="number" id="adult" name="people" placeholder="1" min="1" max="3" required>
  </div>
  <div class="elem-group inlined">
    <label for="child">Rooms</label>
    <input type="number" id="child" name="rooms" placeholder="1" min="1" max="3" required>
  </div>
  <div class="elem-group inlined">
    <label for="checkin-date">Date of birth</label>
    <input type="date" id="" name="dob" required>
  </div>
  <br>
  <div class="elem-group inlined">
    <label for="checkout-date">Check-in Date</label>
    <input type="date" id="arrival" name="arrival" >
  </div>
  <div class="elem-group">
    <label for="room-selection">Select Room Preference</label>
    <select id="room-selection" name="room_preference" required>
        <option value="">Choose a Room from the List</option>
        <option value="connecting">Connecting</option>
        <option value="adjoining">Adjoining</option>
        <option value="adjacent">Adjacent</option>
    </select>
  </div>
  <hr>
  <div class="elem-group">
    <label for="message">your payable amount is  :</label>
    <!-- <textarea id="message" name="message" placeholder="Tell us anything else that might be important." required></textarea> -->
    Rs. 9500/- per month
</div><a href="">
  <button type="submit">Book The Rooms</button></a>
</form>



<script src="\js\booking.js"></script>
</body>
</html>