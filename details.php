<?php 
include("functions/function.php");

	if(isset($_GET['pro_id'])){
	global $con;
	$pro_pick1 = $_GET['pro_id'];
	
	$get_pro = "select * from available_prod where pro_id='$pro_pick1'";
	
	$run_pro = mysqli_query($con, $get_pro);
	
	$count_pros = mysqli_num_rows($run_pro);
		
	
	if ($count_pros==0){
			echo "<a style='text-decoration: none; color: red;'>Product is not available!</a>
			";
		}
		while($row_pro=mysqli_fetch_array($run_pro)){
		$pro_id = $row_pro['pro_id'];
		$pro_img = $row_pro['pro_img'];
		$pro_price = $row_pro['pro_price'];
		$pro_title = $row_pro['pro_title'];
		$pro_desc = $row_pro['pro_desc'];
		$cus_name = $row_pro['cus_name'];
		$cus_phone = $row_pro['cus_phone'];
		$cus_email = $row_pro['cus_email'];
		$publicationDate = $row_pro['publicationDate'];
		$county = $row_pro['county'];
		$exact = $row_pro['exact'];

		}
		
	
} else {
	header('location:index.php');
}

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
<title><?php echo $pro_title; ?></title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-select.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
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
		<link rel="stylesheet" href="css/flexslider.css" media="screen" />
</head>
<body>
<div class="header">
		<div class="container">
			<div class="logo">
				<a href="index.php"><span>Shamba</span>Market</a>
			</div>
			<div class="header-right">
			<!--
			TO SHOW WHEN USER IS LOGGED IN/ SHOULD REDIRECT TO PROFILE
			<a class="account fa fa-user" href="login.php"> Kibichii</a>
			-->
			<?php
			if(isset($_SESSION['email'])){
				$username = $_SESSION['email'];
				echo "<a class='account' href='logout.php'> <i class='fa fa-user'> $username</i> | Log Out</a>";
			} else {
				echo "<a class='account' href='login.php'>My Account</a>";
			}
			?>
		
		
	<!-- Large modal -->
			
						</div>
					</div>
				<script>
				$('#myModal').modal('');
				</script>
			</div>
		</div>
		</div>
	</div>

	<!--single-page-->
	
	<div class="single-page main-grid-border">
		<div class="container">
			<ol class="breadcrumb" style="margin-bottom: 5px;">
				<li><a href="index.php">Home</a></li>
				<li><a href="all-classifieds.php">Ads</a></li>
				<li class="active"><a href="mobiles.html">Category</a></li>
				<li class="active">Category</li>
			</ol>
			<div class="product-desc">
				<div class="col-md-7 product-view">
					<h2><?php echo $pro_title; ?></h2>
						<p> <i class="glyphicon glyphicon-map-marker"></i><a href="#"><?php echo $county; ?></a>, <a href="#"><?php echo $exact; ?></a>| Added at <?php echo $publicationDate; ?>, Ad ID: <?php echo $_GET['pro_id']; ?></p>
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="uploads/<?php echo $pro_img; ?>">
								<img src="uploads/<?php echo $pro_img; ?>" />
							</li>
							<li data-thumb="uploads/<?php echo $pro_img; ?>">
								<img src="uploads/<?php echo $pro_img; ?>" />
							</li>
							<li data-thumb="uploads/<?php echo $pro_img; ?>">
								<img src="uploads/<?php echo $pro_img; ?>" />
							</li>
						</ul>
					</div>
					<!-- FlexSlider -->
					  <script defer src="js/jquery.flexslider.js"></script>
					<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

						<script>
					// Can also be used with $(document).ready()
					$(window).load(function() {
					  $('.flexslider').flexslider({
						animation: "slide",
						controlNav: "thumbnails"
					  });
					});
					</script>
					<!-- //FlexSlider -->
					<div class="product-details">
						
						<h4>Views : <strong>150</strong></h4>
						
						<p><strong>Summary</strong> : <?php echo $pro_desc; ?></p>
					
					</div>
				</div>
				<div class="col-md-5 product-details-grid">
					<div class="item-price">
						<div class="product-price">
							<p class="p-price">Price</p>
							<h3 class="rate">Kes <?php echo $pro_price; ?></h3>
							<div class="clearfix"></div>
						</div>
						<div class="condition">
							<p class="p-price">Condition</p>
							<h4>Good</h4>
							<div class="clearfix"></div>
						</div>
						<div class="itemtype">
							<p class="p-price">Owner</p>
							<h4><?php echo $cus_name; ?></h4>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="interested text-center">
						<h4>Interested in this Ad?<small> Contact the Seller!</small></h4>
						<p><i class="glyphicon glyphicon-earphone"></i><?php echo $cus_phone; ?></p>
						<p><i class="glyphicon glyphicon-envelope"></i><?php echo $cus_email; ?></p>
					</div>
						<div class="tips">
						<h4>Safety Tips for Buyers</h4>
							<ol>
								<li><a href="#">Do not Buy unless you are sure about the product.</a></li>
								
							</ol>
						</div>
				</div>
			<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//single-page-->
	<!--footer section start-->		
	<?php include('footer.php'); ?>
        <!--footer section end-->
</body>
</html>