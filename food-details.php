<!DOCTYPE html>
<html lang="en">
<head>
  <title>Biryani Paradise</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/png" href="images/fevicon.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/food-details.css">
  <!--<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">-->
  <link href="css/style.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-latest.js"> </script>

</head>
<body>
	
	<?php
			include 'header.php';
		?>

<header class="masthead">
    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 masthead-h1">
          	<a href="index.php">
                <img id="arrow" src="images/arrow.png">
              </a>
          	<h4> Food Details </h4>
          </div>
        </div>
    </div>
</header>

<!-- Container (food details) -->
<div class="container">
  <div class="row">

    <div class="col-lg-5 b-img">
      <img id="b1-img" src="images/chicken_biryani.jpg">
	    <img id="b2-img" src="images/chicken_tandoori.jpg">
	    <img id="b3-img" src="images/Chicken_hariyali_kabab.jpg">
	    <img id="b4-img" src="images/chicken_Hyderabadi.jpg">
      <button id="b1" class="bt active">Chicken Biryani</button>
      <button id="b2" class="bt">Chicken Tandoori</button>
      <button id="b3" class="bt">Chicken hariyali kabab</button>
      <button id="b4" class="bt">Chicken Hyderabadi</button>
    </div>
    <div class="col-lg-7">
      <div id="cb-b1" class="fnt">
        <h2>Chicken Biryani</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut dui eu diam rhoncus tempus. Nunc vehicula est mauris, in sodales risus porttitor a. Proin ac ligula erat. Donec non urna purus. Nunc a semper velit, vitae commodo ante. Donec ullamcorper iaculis efficitur. Morbi ornare, nunc sed ultricies congue, ligula nisl rhoncus velit, in hendrerit mi orci pellentesque neque.  </p>
        <p> <strong>Flavour: </strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut dui eu diam rhoncus tempus. Nunc vehicula est mauris, in sodales risus porttitor a. Proin ac ligula erat. Donec non urna purus. Nunc a semper velit, vitae commodo ante.  </p>
        <h3>Time: 12:30 To 11:30 PM </h3>
        <h3><span style="color:#cc6600;">Price: 20$ </span></h3>
        <div class="fnt">
          <div class="row chef-detail">
            <div class="col-lg-3">
              <img class="avatar" src="images/img_avatar.png" alt="Avatar">
            </div>
            <div class="col-lg-9">
              <h3> Mr. Lancy Deszo</h3>
              <h5> Senior Chef</h5>
            </div>
           </div>
            <p><strong>Why is it Tasty?? </strong> </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut dui eu diam rhoncus tempus. Nunc vehicula est mauris, in sodales risus porttitor a. Proin ac ligula erat.</p>
          </div>
      </div>
      <div id="ct-b2" class="fnt">
        <h2>Chicken Tandoori</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut dui eu diam rhoncus tempus. Nunc vehicula est mauris, in sodales risus porttitor a. Proin ac ligula erat. Donec non urna purus. Nunc a semper velit, vitae commodo ante. Donec ullamcorper iaculis efficitur. Morbi ornare, nunc sed ultricies congue, ligula nisl rhoncus velit, in hendrerit mi orci pellentesque neque.  </p>
        <p> <strong>Flavour: </strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut dui eu diam rhoncus tempus. Nunc vehicula est mauris, in sodales risus porttitor a. Proin ac ligula erat. Donec non urna purus. Nunc a semper velit, vitae commodo ante.  </p>
        <h3>Time: 12:30 To 11:30 PM </h3>
        <h3><span style="color:#cc6600;">Price: 20$ </span></h3>
        <div class="fnt">
          <div class="row chef-detail">
            <div class="col-lg-3">
              <img class="avatar" src="images/img_avatar.png" alt="Avatar">
            </div>
            <div class="col-lg-9">
              <h3> Mr. Lancy Deszo</h3>
              <h5> Senior Chef</h5>
            </div>
           </div>
            <p><strong>Why is it Tasty?? </strong> </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut dui eu diam rhoncus tempus. Nunc vehicula est mauris, in sodales risus porttitor a. Proin ac ligula erat.</p>
          </div>
      </div>
      <div id="ch-b3" class="fnt">
        <h2>Chicken hariyali kabab</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut dui eu diam rhoncus tempus. Nunc vehicula est mauris, in sodales risus porttitor a. Proin ac ligula erat. Donec non urna purus. Nunc a semper velit, vitae commodo ante. Donec ullamcorper iaculis efficitur. Morbi ornare, nunc sed ultricies congue, ligula nisl rhoncus velit, in hendrerit mi orci pellentesque neque.  </p>
        <p> <strong>Flavour: </strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut dui eu diam rhoncus tempus. Nunc vehicula est mauris, in sodales risus porttitor a. Proin ac ligula erat. Donec non urna purus. Nunc a semper velit, vitae commodo ante.  </p>
        <h3>Time: 12:30 To 11:30 PM </h3>
        <h3><span style="color:#cc6600;">Price: 20$ </span></h3>
        <div class="fnt">
          <div class="row chef-detail">
            <div class="col-lg-3">
              <img class="avatar" src="images/img_avatar.png" alt="Avatar">
            </div>
            <div class="col-lg-9">
              <h3> Mr. Lancy Deszo</h3>
              <h5> Senior Chef</h5>
            </div>
           </div>
            <p><strong>Why is it Tasty?? </strong> </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut dui eu diam rhoncus tempus. Nunc vehicula est mauris, in sodales risus porttitor a. Proin ac ligula erat.</p>
          </div>
      </div>
      <div id="chy-b4" class="fnt">
        <h2>Chicken Hyderabadi</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut dui eu diam rhoncus tempus. Nunc vehicula est mauris, in sodales risus porttitor a. Proin ac ligula erat. Donec non urna purus. Nunc a semper velit, vitae commodo ante. Donec ullamcorper iaculis efficitur. Morbi ornare, nunc sed ultricies congue, ligula nisl rhoncus velit, in hendrerit mi orci pellentesque neque.  </p>
        <p> <strong>Flavour: </strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut dui eu diam rhoncus tempus. Nunc vehicula est mauris, in sodales risus porttitor a. Proin ac ligula erat. Donec non urna purus. Nunc a semper velit, vitae commodo ante.  </p>
        <h3>Time: 12:30 To 11:30 PM </h3>
        <h3><span style="color:#cc6600;">Price: 20$ </span></h3>
        <div class="fnt">
          <div class="row chef-detail">
            <div class="col-lg-3">
              <img class="avatar" src="images/img_avatar.png" alt="Avatar">
            </div>
            <div class="col-lg-9">
              <h3> Mr. Lancy Deszo</h3>
              <h5> Senior Chef</h5>
            </div>
           </div>
            <p><strong>Why is it Tasty?? </strong> </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut dui eu diam rhoncus tempus. Nunc vehicula est mauris, in sodales risus porttitor a. Proin ac ligula erat.</p>
          </div>
      </div>
    </div>

  </div>
</div>

 <?php
			include 'itemTiles.php';
		
			include 'footer.php';
		?>

<script src="js/food-details.js"></script>
<script src="js/new-age.js"></script><scr

</body>
</html>
