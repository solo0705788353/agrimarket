<?php 
include("functions/function.php");

	if(isset($_GET['book_id'])){
	global $con;
	$book_pick1 = $_GET['book_id'];
	
	$get_book = "select * from book where book_id='$book_pick1'";
	
	$run_book = mysqli_query($con, $get_book);
	
	$count_book = mysqli_num_rows($run_book);
		
		if ($count_book==0){
			echo "<a style='text-decoration: none; color: red;'>Product is not available!</a>
			";
		}
	
		while($row_book=mysqli_fetch_array($run_book)){
		$book_id = $row_book['book_id'];
		$book_image = $row_book['book_image'];
		$book_price = $row_book['book_price'];
		$book_title = $row_book['book_title'];
		$book_desc = $row_book['book_desc'];

		}
		
	
} else {
	header('location:index.php');
}

?>
<!DOCTYPE html>
<html>
<head>
<title>ShambaMarket | Support ShambaMarket by buying a book</title>

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
				<a href="index.php"><span>Shamba</span>Blog</a>
			</div>
			<div class="header-right">
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
	<div class="banner text-center">
	  <div class="container">    
			<h1>Book  <span class="segment-heading">    Information </span> and How to Buy</h1>
			<p>About  <?php echo $book_title; ?> </p>
			
	  </div>
	</div>
	<!--single-page-->
	<div class="single-page main-grid-border">
		<div class="container">
			<ol class="breadcrumb" style="margin-bottom: 5px;">
				<li><a href="index.php">Home</a></li>
				<li><a href="grow.php">All Books</a></li>
				<li class="active">Educative Ebooks</li>
			</ol>
			<div class="product-desc">
				<div class="col-md-7 product-view">
					<h2><?php echo $book_title; ?></h2>
						<p> <i class="glyphicon glyphicon-map-marker"></i><a href="#">Book ID: <?php echo $_GET['book_id']; ?></p>
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="vitabu/<?php echo $book_image; ?>">
								<img src="vitabu/<?php echo $book_image; ?>" />
							</li>
							<li data-thumb="vitabu/<?php echo $book_image; ?>">
								<img src="vitabu/<?php echo $book_image; ?>" />
							</li>
							<li data-thumb="vitabu/<?php echo $book_image; ?>">
								<img src="vitabu/<?php echo $book_image; ?>" />
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
						<h4>Title : <a href="#"> <?php echo $book_title; ?></a></h4>
						<h4>Downloads : <strong>2000</strong></h4>
				
					<p><strong>Summary</strong> : <?php echo $book_desc; ?></p>
					
					</div>
				</div>
				<div class="col-md-5 product-details-grid">
					<div class="item-price">
						<div class="product-price">
							<p class="p-price">Price</p>
							<h3 class="rate">Kes <?php echo $book_price; ?></h3>
							<div class="clearfix"></div>
						</div>
						<div class="condition">
							<p class="p-price">Format</p>
							<h4>PDF</h4>
							<div class="clearfix"></div>
						</div>
						<div class="itemtype">
							<p class="p-price">Item Type</p>
							<h4>Book</h4>
							<div class="clearfix"></div>
						</div>
					</div>
					
						<div class="tips">
						<h4>How To Buy</h4>
							<ol>
								<li><a href="#">Go to Mpesa.</a></li>
								<li><a href="#">Lipa na Mpesa.</a></li>
								<li><a href="#">Paybill.</a></li>
								<li><a href="#">Enter Business Number ----.</a></li>
								<li><a href="#">Account number is Book ID.</a></li>
								<li><a href="#">Amount.</a></li>
								<li><a href="#">Send and you are done.</a></li>
								<li><a href="#">We will Then send you a Download Link to Mobile Number.</a></li>
								<li><a href="#">You Will Have Your Book Within 30 Minutes.</a></li>
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