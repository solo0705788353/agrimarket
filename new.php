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
<title>ShambaMarket | Home :: Welcome</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-select.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/font-awesome.min.css" />
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
	<div class="header">
		<div class="container">
			<div class="logo">
				<a href="new.php"><span>Shamba</span>Blog</a>
			</div>
			<div class="header-right">
			<!--
			TO SHOW WHEN USER IS LOGGED IN/ SHOULD REDIRECT TO PROFILE
			<a class="account fa fa-user" href="login.php"> Kibichii</a>
			-->
			<a class="store" href="index.php" style="">ShambaMarket</a>
			
			<?php
			if(isset($_SESSION['email'])){
				$username = $_SESSION['email'];
				echo "<a class='account' href='logout.php'> <i class='fa fa-user'> $username</i> | Log Out</a>";
			} else {
				echo "<a class='account' href='login.php'>My Account</a>";
			}
			?>
		</div>
		</div>
			
	<!-- Large modal -->

		
		</div>
	</div>
	
		<!-- content-starts-here -->
		<div class="content">
			<div class="categories">
				<div class="container">
					<div class="col-md-2 focus-grid">

<a href="shambablog/category.php?id=1"
><div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image">
									<img widht='100px'height='100px'src='images/icons/png/wheelbarrow.png'/></div>
									<h4 class="clrchg">Farming Tips</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="grow.php">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image">
									<img widht='100px'height='100px'src='images/icons/png/harvest.png'/></div>
									<h4 class="clrchg">Buy Farm Guide </h4>
								</div>
							</div>
						</a>
					</div>	
					<div class="col-md-2 focus-grid">
						<a href="user.php">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image">
									<img widht='100px'height='100px'src='images/icons/png/farmer.png'/></div>
									<h4 class="clrchg"> ShambaMarket User Testimonials</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="#">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image">
									<img widht='100px'height='100px'src='images/icons/png/money.png'/></div>
									<h4 class="clrchg">Making Money From Farming</h4>
								</div>
							</div>
						</a>
					</div>	
					<div class="clearfix"></div>
				</div>
			</div>
			
<?php include('footer.php'); ?>
        <!--footer section end-->
</body>
</html>