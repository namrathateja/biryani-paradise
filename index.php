<!DOCTYPE html>
<html>
<head>
<title>Biryani Paradise</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" type="image/png" href="images/fevicon.png">
<link href="bootstarp-3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstarp-3.3.7/js/bootstrap.min.js" ></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script src="js/main.js"></script>
<!--<script type="text/javascript" src="js/contform_msg.js"></script>-->

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
</head>
<body>

	<?php
			include 'header.php';
		?>

	 <div class="homePageSlider">
	    <div><img src="images/banner-image.jpg" /></div>
	    <div><img src="images/banner2.jpg" /></div>
	    <div><img src="images/banner-image.jpg" /></div>
	  </div>

	  <div class="row aboutUs" id="about">
	  		<div class="col-md-4 aboutImgDiv">
	  			<img src="images/cook-icon.png" class="cookIcon">
	  			<img src="images/img8.jpg" />
	  		</div>
	  		<div class="col-md-8 aboutusText">
	  			<h4>About Us</h4>
	  			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
	  			<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
	  			<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
	  		</div>
	  </div>

	  <div class="staffDiv">

	  		<div class="row">
	  			<div class="col-md-3">
	  				<img src="images/4.png" />
	  				<p><b>Sam Augestin Theram</b></p>
	  				<p>Organiser</p>
	  			</div>
	  			<div class="col-md-3">
	  				<img src="images/2.png" />
	  				<p><b>Sam Augestin Theram</b></p>
	  				<p>Organiser</p>
	  			</div>
	  			<div class="col-md-3">
	  				<img src="images/1.png" />
	  				<p><b>Sam Augestin Theram</b></p>
	  				<p>Organiser</p>
	  			</div>
	  			<div class="col-md-3">
	  				<img src="images/3.png" />
	  				<p><b>Sam Augestin Theram</b></p>
	  				<p>Organiser</p>
	  			</div>
	  		</div>

	  </div>

	  <div class="todaySpclHeading">
	  	<h4>Todays Special</h4>
	  	<a href="gallery.php">
	  		<button class="btn btn-viewall pull-right">View All</button>
	  	</a>
	  </div>

	 <?php
			include 'itemTiles.php';
		?>

	  <div class="contactUsDiv" id="contact">
	  			<h4>Contact Us</h4>
	  			<b>ADDRESS</b>
	  			<p>6008 US 64 Suite 333 Barboursvile, WV 25588</p>
	  			<p>OFFICIAL E-Mail : biryaniparadise@gmail.com</p>
	  			<p>PHONE NUMBET : (301) 955-5444</p>

	  			<p class="contactDesc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

	  			<button class="btn btn-sendmessage" data-toggle="modal" data-target="#sendMessageModal"> SEND MESSAGE </button>

	  </div>

	  <div class="map-div">
	  	<img class="mapIcon" src="images/map_ico.png" />
		  <div class="map-div" id="map" style="width:100%;height:400px;background:grey">

		  </div>
	  </div>




	<?php
			include 'footer.php';
		?>


	<!-- Modal -->
	<div id="sendMessageModal" class="modal fade" role="dialog">
	  <div class="modal-dialog modal-sm">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-body">
	      	<button type="button" class="close close-custom" data-dismiss="modal">&times;</button>
	        <div class="row">
	        	<div class="col-md-12">
							<form name="contact-form" action="get_response.php" method="post" id="contact-form">
		        		<input type="text" class="form-control" placeholder="Name*" name="your_name" id="name"/>
		        		<input type="text" class="form-control" placeholder="Phone*" name="your_phone" id="phone"/>
		        		<input type="text" class="form-control" placeholder="Email" name="your_email" />
		        		<textarea placeholder="Message" class="form-control" rows="4" name="comments"></textarea>
		        		<button class="btn btn-popupSendMessage" name="submit" value="Submit" id="submit_form"> SEND MESSAGE </button>
								<p> <span id="error_msg" class="text-error"> </span></p>
								<p> <span id="success_msg" class="text-success"> </span></p>
							</form>
	        	</div>
	        </div>
	      </div>
	    </div>

	  </div>
	</div>

</body>
</html>
