<?php require "partials/head.php" ?>

<?php require "partials/nav.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracking Services</title>

      <style>
        @import url("https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600&display=swap");
*{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

body {
  color: #2c3e50;
  font-family: 'Montserrat', sans-serif;
  width: 100%;
  height: 100%;
  position: relative;
  display: block;
  margin: 0rem auto;
}

h2, h4, h6 {
  margin: 0;
  padding: 0;
  display: inline-block;
}

.root {
  padding: 1rem;
  border-radius: 5px;
  box-shadow: 0 2rem 6rem rgba(0, 0, 0, 0.3);
  height:100vh;
}

figure {
  display: flex;
}
figure img {
  width: 8rem;
  height: 8rem;
  border-radius: 15%;
  border: 1.5px solid #f05a00;
  margin-right: 1.5rem;
  padding:1rem;
}
figure figcaption {
  display: flex;
  flex-direction: column;
  justify-content: space-evenly;
}
figure figcaption h4 {
  font-size: 1.4rem;
  font-weight: 500;
}
figure figcaption h6 {
  font-size: 1rem;
  font-weight: 300;
}
figure figcaption h2 {
  font-size: 1.6rem;
  font-weight: 500;
}

.order-track {
  margin-top: 2rem;
  padding: 0 1rem;
  border-top: 1px dashed #2c3e50;
  padding-top: 2.5rem;
  display: flex;
  flex-direction: column;
}
.order-track-step {
  display: flex;
  height: 7rem;
}
.order-track-step:last-child {
  overflow: hidden;
  height: 4rem;
}
.order-track-step:last-child .order-track-status span:last-of-type {
  display: none;
}
.order-track-status {
  margin-right: 1.5rem;
  position: relative;
}
.order-track-status-dot {
  display: block;
  width: 2.2rem;
  height: 2.2rem;
  border-radius: 50%;
  background: #f05a00;
}
.order-track-status-line {
  display: block;
  margin: 0 auto;
  width: 2px;
  height: 7rem;
  background: #f05a00;
}
.order-track-text-stat {
  font-size: 1.3rem;
  font-weight: 500;
  margin-bottom: 3px;
}
.order-track-text-sub {
  font-size: 1rem;
  font-weight: 300;
}

.order-track {
  transition: all .3s height 0.3s;
  transform-origin: top center;
}
      </style>  
</head>
<body>
<?php

$services  = [
    [
    "status" => "Car Detailing Service Ordered",
    "date" => "24 October, 2023  8:02am"
    ],
[
    "status" => "An Agent reached your location",
    "date" => "24 October, 2023 8:30am"
],
[
    "status" => "Internal Cleaning Done",
    "date" => "24 October, 9:00am"
],
[
    "status" => "Outer Cleaning in progress",
    "date" => "24 October, 98:15am"
]

]

?>
<section class="root">
  <figure>
    <img src="../images/track.webp" alt="">
    <figcaption>
      <h4>Tracking Details</h4>
      <h6>Order Number</h6>
      <h2># A61452B</h2>
    </figcaption>
  </figure>

  <div class="order-track">

  <?php
					foreach ($services as $service) {
                       echo "<div class='order-track-step'>
                       <div class='order-track-status'>
                         <span class='order-track-status-dot'></span>
                         <span class='order-track-status-line'></span>
                       </div>
                       <div class='order-track-text'>
                        <p class='order-track-text-stat'>
                                {$service['status']}
                         </p>
                         <span class='order-track-text-sub'>`{$service['status']}`</span>
                       </div>
                     </div>";
					}
				?>
   
  </div>
</section>
</body>
</html>