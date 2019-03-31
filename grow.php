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
<title>ShambaMarket Grow Guides</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-select.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
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
    <script src="js/tabs.js"></script>
	
<script type="text/javascript">
$(document).ready(function () {    
var elem=$('#container ul');      
	$('#viewcontrols a').on('click',function(e) {
		if ($(this).hasClass('gridview')) {
			elem.fadeOut(1000, function () {
				$('#container ul').removeClass('list').addClass('grid');
				$('#viewcontrols').removeClass('view-controls-list').addClass('view-controls-grid');
				$('#viewcontrols .gridview').addClass('active');
				$('#viewcontrols .listview').removeClass('active');
				elem.fadeIn(1000);
			});						
		}
		else if($(this).hasClass('listview')) {
			elem.fadeOut(1000, function () {
				$('#container ul').removeClass('grid').addClass('list');
				$('#viewcontrols').removeClass('view-controls-grid').addClass('view-controls-list');
				$('#viewcontrols .gridview').removeClass('active');
				$('#viewcontrols .listview').addClass('active');
				elem.fadeIn(1000);
			});									
		}
	});
});
</script>
</head>
<body>
<div class="header">
		<div class="container">
			<div class="logo">
				<a href="new.php"><span>Shamba</span>Blog</a>
			</div>
			<div class="header-right">
			<a class="store" href="index.php" style="">ShambaMarket</a>
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
	</div>
	<div class="banner text-center">
	  <div class="container">    
			<h1>Books are available   <span class="segment-heading">    mainly in PDF format  </span> and any other format Requested</h1>
			<p>Educative and Informative,we go to the best farms to learn and write about the best farming practices.</p>
		
	  </div>
	</div>
	<!-- Mobiles -->
	
				
				<div class="clearfix"></div>
			</div>
			
			<div class="ads-grid">
				<div class="side-bar col-md-3">
				
				
				<div class="featured-ads">
					<h2 class="sear-head fer">Featured eBook</h2>
					<div class="featured-ad">
						<a href="#">
							<div class="featured-ad-left">
								<img src="vitabu/F.png" title="ad image" alt="" />
							</div>
							<div class="featured-ad-right">
								<h4>The ultimate Mushroom Grow,Harvest and Packaging Guide</h4>
								<p>Ksh 450</p>
							</div>
							<div class="clearfix"></div>
						</a>
					</div>
					<div class="featured-ad">
						<h2 class="sear-head fer">Must Have </h2>
						<a href="#">
							<div class="featured-ad-left">
								<img src="vitabu/F.png" title="ad image" alt="" />
							</div>
							<div class="featured-ad-right">
								<h4>The Best of Dairy Farming</h4>
								<p>Ksh 380</p>
							</div>
							<div class="clearfix"></div>
						</a>
					</div>
					<div class="featured-ad">
						<a href="#">
							<div class="featured-ad-left">
								<img src="vitabu/F.png" title="ad image" alt="" />
							</div>
							<div class="featured-ad-right">
								<h4>800K in 3 months: Onion Farming</h4>
								<p>Ksh 560</p>
							</div>
							<div class="clearfix"></div>
						</a>
					</div>
					<div class="clearfix"></div>
				</div>
				</div>
				<div class="ads-display col-md-9">
					<div class="wrapper">					
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					  <ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
						
					  </ul>
					  <div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
						   <div>
												<div id="container">
								<div class="view-controls-list" id="viewcontrols">
									<label>view :</label>
									<a class="gridview"><i class="glyphicon glyphicon-th"></i></a>
									<a class="listview active"><i class="glyphicon glyphicon-th-list"></i></a>
								</div>
								
								<div class="clearfix"></div>
							<ul class="list">
								<?php getallbookcat(); ?>
								
							</ul>
						</div>
							</div>
						</div>
						<ul class="pagination pagination-sm">
							<li><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">6</a></li>
							<li><a href="#">7</a></li>
							<li><a href="#">8</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					  </div>
					</div>
				</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>	
	</div>
	<!-- // Mobiles -->
	<!--footer section start-->		
			<?php include('footer.php'); ?>
        <!--footer section end-->
</body>
</html>