
<html>
  <head>
    <style>
      

body {
	font-family: 'Open Sans Condensed', sans-serif;
}


figure {
	position:relative;
	width:100%;
	min-height:160px;
	display:block;
	float:left;
	overflow:hidden;
	margin:10px 0;
	box-shadow:inset 0px 2px 3px rgba(0,0,0,.2);
	-webkit-transition: all .15s ease-in-out;
}

.ocean {
	background-color:#000;
	
	background-size:cover;
	background-position:center center;
}
figcaption {
	display:block;
	float:left;
	position:absolute;
	top:0;
	left:0;
	color:#FFF;
	font-size:15px;
	line-height:20px;
	font-weight:bold;
	text-transform:uppercase;
	background-color:rgba(0,0,0,.7);
	width:50%;
	height:100%;
	margin:0 0 0 -20px;;
	padding:20px;
	padding-left:40px;
	-webkit-transform: skew(-10deg);
       -moz-transform: skew(-10deg);
         -o-transform: skew(-10deg);
	-webkit-transition: all .15s ease-in-out;
}
figcaption a, figcaption a:hover {
	color:#FFF;
	text-decoration:none;
}
figcaption strong {
	display:block;
	word-wrap: normal;
	-webkit-transform: skew(10deg);
       -moz-transform: skew(10deg);
         -o-transform: skew(10deg);
}
figcaption strong:before {
	content:" ";
	border-top:solid 3px rgba(211,29,26,1);
	width:140%;
	display:block;
	clear:both;
	margin-bottom:20px;
	-webkit-transition: all .15s ease-in-out;
}

/* HOVERS */
figure:hover figcaption {
	background-color:rgba(211,29,26,.9);
	-webkit-transition: all .15s ease-in-out;
}
figure:hover figcaption strong:before {
	width:200%;
	border-color:#FFF;
	-webkit-transition: all .15s ease-in-out;
}
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" >

</head>
<?php require "partials/head.php" ?>

<?php require "partials/nav.php" ?>



    <form class="space-y-6" action="#" method="POST">
      <div style="margin-top:20px;display:flex;flex-direction:column;align-items:center;justify-content:center">
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Enter your location</label>
        <div class="col-7">
      <input type="text" class="form-control" placeholder="Enter location">
    </div>
      </div>
    </form>

    <div class="container">
	<div class="row gx-5 gy-5">
		<div class="col-md-4 col-sm-6">
			<figure style="background-image: url('../images/w1.png');" class="ocean">
				<figcaption>
					<a href="">
					<strong>DETAIL CAR WASHING</strong>
					</a>	
				</figcaption>
			</figure>
		</div>
		<div class="col-md-4 col-sm-6">
			<figure style="background-image: url('../images/w2.png');" class="ocean">
				<figcaption>
					<strong>WINDOWS CLEANING</strong>
				</figcaption>
			</figure>
		</div>
		<div class="col-md-4 col-sm-6">
			<figure style="background-image: url('../images/w3.png');" class="ocean">
				<figcaption>
					<strong>ENGINE CLEANING</strong>
				</figcaption>
			</figure>
		</div>
		<div class="col-md-4 col-sm-6">
			<figure  style="background-image: url('../images/w4.png');" class="ocean">
				<figcaption>
					<a href="">
					<strong>OIL CHANGE AND UNDER HOOD CAR CLEANING</strong>
					</a>	
				</figcaption>
			</figure>
		</div>
		<div class="col-md-4 col-sm-6">
			<figure style="background-image: url('../images/w5.png');" class="ocean">
				<figcaption>
					<strong>TYRE REPAIR AND DEEP CLEANING</strong>
				</figcaption>
			</figure>
		</div>
		<div class="col-md-4 col-sm-6">
			<figure  style="background-image: url('../images/w6.png');" class="ocean">
				<figcaption>
					<strong>CAR POLISHING</strong>
				</figcaption>
			</figure>
		</div>
		<div class="col-md-4 col-sm-6">
			<figure style="background-image: url('../images/w7.png');" class="ocean">
				<figcaption>
					<a href="">
					<strong>INTERIOR DETAIL CLEANING</strong>
					</a>	
				</figcaption>
			</figure>
		</div>
		<div class="col-md-4 col-sm-6">
			<figure style="background-image: url('../images/w8.png');" class="ocean">
				<figcaption>
					<strong>OUTER SIDE FLEX CLEANING</strong>
				</figcaption>
			</figure>
		</div>
		<div class="col-md-4 col-sm-6">
			<figure style="background-image: url('../images/w9.png');" class="ocean">
				<figcaption>
					<strong>FULL DETAIL CAR CLEANING PACKAGE</strong>
				</figcaption>
			</figure>
		</div>
	</div>
</div>
   
  



<?php require "partials/footer.php" ?>
</html>