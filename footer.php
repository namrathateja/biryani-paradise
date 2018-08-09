
<script>
	$(document).ready(function() {
	
	$("#aboutLinkfooter").click(function() {
		if(document.location.href.match(/[^\/]+$/)[0] == "index.php"){
			$('html,body').animate({scrollTop: $("#about").offset().top-20},1000);
		}else {
			window.location.href = "index.php#about";
		}
	});
	
	$("#contactLinkfooter").click(function() {
		if(document.location.href.match(/[^\/]+$/)[0] == "index.php"){
			$('html,body').animate({scrollTop: $("#contact").offset().top-20},1000);
		}else {
			window.location.href = "index.php#contact";
		}
	});
	
	});
	
</script>

<div class="footer" >
		<p>@copyrights BiryaniParadise</p>
		
		<ul>
			<li> <a href="index.php"> Home </a> </li>
			<li> <a id="aboutLinkfooter" href="javascript:void(0)"> About Us	 </a> </li>
			<li> <a href="gallery.php"> Gallery	 </a> </li>
			<li> <a id="contactLinkfooter" href="javascript:void(0)"> Contact Us	 </a> </li>
		</ul>
	</div>