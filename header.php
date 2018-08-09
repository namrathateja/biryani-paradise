<script>
	$(document).ready(function() {
	
	$("#aboutLink").click(function() {
		if(document.location.href.match(/[^\/]+$/)[0] == "index.php"){
			$('html,body').animate({scrollTop: $("#about").offset().top-20},1000);
		}else {
			window.location.href = "index.php#about";
		}
	});
	
	$("#contactLink").click(function() {
		if(document.location.href.match(/[^\/]+$/)[0] == "index.php"){
			$('html,body').animate({scrollTop: $("#contact").offset().top-20},1000);
		}else {
			window.location.href = "index.php#contact";
		}
	});
	
	});
	
</script>

<div class="navBar">
		<h4 class="logoDiv"><img src="images/logo.png" /></h4>
		<hr>
		<ul>
			<li> <a href="index.php"> Home </a> </li>
			<li> <a id="aboutLink" href="javascript:void(0)"> about us	 </a> </li>
			<li> <a href="gallery.php"> gallery	 </a> </li>
			<li> <a id="contactLink" href="javascript:void(0)"> contact us	 </a> </li>
			<!-- <li> <a href="#"> <img src="images/menu_ico.png" />	 </a> </li> -->
		</ul>
	</div>