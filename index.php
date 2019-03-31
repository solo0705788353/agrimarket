<?php 
include("functions/function.php");

?>
<!DOCTYPE html>
<html>
<head>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-2129894281242938",
    enable_page_level_ads: true
  });
</script>
<title>FarmProduct Marketing and Delivery | Home :: Welcome</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-select.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/font-awesome.min.css" />
<link rel="shortcut icon" href="logo.png" />
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->	
<!-- js -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- js -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.js"></script>
<script>
  $(document).ready(function () {
    var mySelect = $('#first-disabled2');

    $('#special').on('click', function () {
      mySelect.find('option:selected').prop('disabled', true);
      mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
      mySelect.find('option:disabled').prop('disabled', false);
      mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
  });
</script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<link href="css/jquery.uls.css" rel="stylesheet"/>
<link href="css/jquery.uls.grid.css" rel="stylesheet"/>
<link href="css/jquery.uls.lcd.css" rel="stylesheet"/>
<!-- Source -->
<script src="js/jquery.uls.data.js"></script>
<script src="js/jquery.uls.data.utils.js"></script>
<script src="js/jquery.uls.lcd.js"></script>
<script src="js/jquery.uls.languagefilter.js"></script>
<script src="js/jquery.uls.regionfilter.js"></script>
<script src="js/jquery.uls.core.js"></script>
<script>
			$( document ).ready( function() {
				$( '.uls-trigger' ).uls( {
					onSelect : function( language ) {
						var languageName = $.uls.data.getAutonym( language );
						$( '.uls-trigger' ).text( languageName );
					},
					quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
				} );
			} );
		</script>
</head>
<body>
         <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-2129894281242938",
    enable_page_level_ads: true
  });
</script>
	<div class="header">
		<div class="container">
			<div class="logo">
				<a href="index.php"><span>FarmProduct</span>Marketing and Delivery</a>
			</div>
			<div class="header-right">
			<!--
			TO SHOW WHEN USER IS LOGGED IN/ SHOULD REDIRECT TO PROFILE
			<a class="account fa fa-user" href="login.php"> Kibichii</a>
			-->

			<a class="store" href="new.php" style="">Blog</a>
			<?php
			if(isset($_SESSION['email'])){
				$username = $_SESSION['email'];
				$first_name = $_SESSION['first_name'];
				echo "<a class='account' href='logout.php'> <i class='fa fa-user'> $first_name</i> | Log Out</a>";
			} else {
				echo "<a class='account' href='login.php'>My Account</a>";
			}
			?>
			
	<!-- Large modal -->

			<div class="selectregion">
				<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
				Select Your County</button>
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
					aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										&times;</button>
									<h4 class="modal-title" id="myModalLabel">
										Please Choose Your Location</h4>
								</div>
								<div class="modal-body">
									 <form class="form-horizontal" role="form">
										<div class="form-group">
											<select id="basic2" class="show-tick form-control" multiple>
												<optgroup label="Counties In Kenya">
													<option selected style="display:none;color:#eee;">Select County</option>
													<option>Baringo</option>
													<option>Bomet</option>
													<option>Bungoma</option>
													<option>Busia</option>
													<option>Elgeyo MArakwet</option>
													<option>Embu</option>
													<option>Garissa</option>
													<option>Homabay</option>
													<option>Isiolo</option>
													<option>Kajiado</option>
													<option>Kakamega</option>
													<option>Kericho</option>
													<option>Kiambu</option>
													<option>Kilifi</option>
													<option>Kisii</option>
													<option>Kisumu</option>
													<option>Kitui</option>
													<option>Kwale</option>
													<option>Laikipia</option>
													<option>Lamu</option>
													<option>Machakos</option>
													<option>Makueni</option>
													<option>Mandera</option>
													<option>Meru</option>
													<option>Migori</option>
													<option>Marsabit</option>
													<option>Mombasa</option>
													<option>Muranga</option>
													<option>Nairobi</option>
													<option>Nakuru</option>
													<option>Nandi</option>
													<option>Narok</option>
													<option>Nyamira</option>
													<option>Nyandarua</option>
													<option>Nyeri</option>
													<option>Samburu</option>
													<option>Siaya</option>
													<option>Taita Taveta</option>
													<option>Tana River</option>
													<option>Tharaka Nithi</option>
													<option>Trans Nzoia</option>
													<option>Turkana</option>
													<option>Uasin Gishu</option>
													<option>Vihiga</option>
													<option>Wajir</option>
													<option>West Pokot</option>
											</select>
										</div>
									  </form>    
								</div>
							</div>
						</div>
					</div>
				<script>
				$('#myModal').modal('');
				</script>
			</div>
		</div>
		</div>
	</div>
	<div class="main-banner banner text-center">
	  <div class="container">    
			<h1>Sell or advertise   <span class="segment-heading">    any of your farm products </span> with ShambaMarket</h1>
			<p>Join our movement to eliminate hunger and poverty</p>
			<a href="post-ad.php">Post Free Ad</a>
			<a href="all-classifieds.php">View All Products</a>
	  </div>
	</div>
		<!-- content-starts-here -->
									<?php

							if(isset($_GET['msg'])){
								$message = $_GET['msg'];
								echo "<div class='alert alert-info center'>$message</div>";
							}
							
							?>
			<div class="wth">
					<?php getCats(); ?>
					
			</div>	
			

			<div class="trending-ads">
				<div class="container">
				<!-- slider -->
				<div class="trend-ads">
					<h2>Recent Ads</h2>
							<ul id="flexiselDemo3">
								<li>
								<?php getPro(); ?>
								</li>
								<li>
								<?php getPro(); ?>
								</li>
								<li>
								<?php getPro(); ?>
								</li>
						</ul>
					<script type="text/javascript">
						 $(window).load(function() {
							$("#flexiselDemo3").flexisel({
								visibleItems:1,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 5000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: { 
									portrait: { 
										changePoint:480,
										visibleItems:1
									}, 
									landscape: { 
										changePoint:640,
										visibleItems:1
									},
									tablet: { 
										changePoint:768,
										visibleItems:1
									}
								}
							});
							
						});
					   </script>
					   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
					</div>   
			</div>
			<!-- //slider -->				
			</div>
			<div class="mobile-app">
				<div class="container">
					<div class="col-md-5 app-left">
						<a href="mobileapp.html"><img src="images/app.png" alt=""></a>
					</div>
					<div class="col-md-7 app-right">
						<h3>ShambaMarket is the <span>Easiest</span> way for Selling and buying farm produce</h3>
						<p>Our main aim to to establish a self sustaining country and end food crisis and drought outcry. Post your farm produce with our app avialable on playstore. Join us in eliminating hunger</p>
						<div class="app-buttons">
							<div class="app-button">
								<a href="#"><img src="images/1.png" alt=""></a>
							</div>
							<div class="app-button">
								<a href="#"><img src="images/2.png" alt=""></a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!--footer section start-->		
<?php include('footer.php'); ?>
        <!--footer section end-->
</body>
</html>