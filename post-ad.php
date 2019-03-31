<?php 
include("functions/function.php");
//header("location: login.php");
error_reporting(0);
if(!isset($_SESSION['email'])){
	header('location:login.php?postm=You Must Be logged in To Post product details!');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Post Product</title>
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
		<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
    <script src="js/easyResponsiveTabs.js"></script>
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
				$username = $_SESSION['last_name'];
				$mobile= $_SESSION['mobile'];
				$last_name= $_SESSION['last_name'];
				$first_name= $_SESSION['first_name'];
				$email= $_SESSION['email'];
				

				echo "<a class='account' href='logout.php'> <i class='fa fa-user'> $first_name $last_name</i> | Log Out</a>";
			} else {
				echo "<a class='account' href='login.php'>My Account</a>";
			}
			?>
		</div>
		</div>
			
			
	<!-- Large modal -->
	
		</div>
	</div>

	<!-- Submit Ad -->
	<div class="submit-ad main-grid-border">
		<div class="container">
			<h2 class="head">Post Products</h2>
			<div class="post-ad-form">
				<form action="post-ad.php" method="post" enctype="multipart/form-data">
					<label>Select Category <span>*</span></label>
					<select name="pro_cat">
						<option>Select a category</option>
						<?php
						
	
						$get_cats = "select * from categories";         
						$run_cats = mysqli_query($con, $get_cats);
	
						while ($row_cats=mysqli_fetch_array($run_cats)){
	
							$cat_id = $row_cats['cat_id'];
							$cat_name = $row_cats['cat_name'];
	
						echo "<option value='$cat_id'>$cat_name</option>";
	
						}
						?>
					</select>
					<div class="clearfix"></div>
					<label>Product Name <span>*</span></label>
					<input type="text" name="pro_title" class="phone" placeholder="">
					<div class="clearfix"></div>
					<label>At what Price are you selling (Kes)<span>*</span></label>
					<input type="text" name="pro_price" class="phone" placeholder="">
					<div class="clearfix"></div>
					<label>Ad information about your product <span>*</span></label>
					<textarea class="mess" name="pro_desc" placeholder="Write few lines about your product"></textarea>
					<div class="clearfix"></div>
				<div class="upload-ad-photos">
				<label>Photos for your ad :</label>	
					<div class="photos-upload-view">
						
						
						

						<div>
							<input type="file" id="fileselect" name="pro_img" required />
							<div id="filedrag">or drop files here</div>
						</div>

					

						<div id="messages">
						<p>Status Messages</p>
						</div>
						</div>
					<div class="clearfix"></div>
						<script src="js/filedrag.js"></script>
				</div>
					<div class="personal-details">
					
						<label>Your Name <span>*</span></label>
						<input type="text" class="name" name="cus_name" value="<?php echo "$first_name"." "."$last_name"?>" readonly placeholder="">
						<div class="clearfix"></div>
						<label>Your Mobile No <span>*</span></label>
						<input type="text" name="cus_phone" value="<?php echo "$mobile"?>" class="phone"  readonly placeholder="">
						<div class="clearfix"></div>
						<label>Your Email Address<span>*</span></label>
						<input type="text" name="cus_email" value="<?php echo "$email"?>" class="email" readonly  placeholder="">
						<div class="clearfix"></div>
						
						<label>Select County <span>*</span></label>
					<select name="county">
						<option>Select your County</option>
						<?php
						
	
						$get_cats = "select * from county";         
						$run_cats = mysqli_query($con, $get_cats);
	
						while ($row_cats=mysqli_fetch_array($run_cats)){
	
							$id = $row_cats['id'];
							$county_name = $row_cats['county_name'];
	
						echo "<option value='$county_name'>$county_name</option>";
	
						}
						?>
					</select>
					<div class="clearfix"></div>
						<label>Exact Location<span>*</span></label>
						<input type="text" name="exact" class="exact" placeholder="Where in the County">
						<div class="clearfix"></div>
						<p class="post-terms">By clicking <strong>post Button</strong> you accept our <a href="#" target="_blank">Terms of Use </a> and <a href="#" target="_blank">Privacy Policy</a></p>
					<input type="submit" name="insert_post" value="Post">					
					<div class="clearfix"></div>
					
					</div>
					</form>
			</div>
			
		</div>	
	</div>
	<!-- // Submit Ad -->
	<!--footer section start-->		
	<?php include('footer.php'); ?>
        <!--footer section end-->
</body>
</html>
<?php
	
	if(isset($_POST['insert_post'])){
		
		//getting data from fields
		$pro_cat = $_POST['pro_cat'];
		$pro_title = $_POST['pro_title'];
		$pro_price = $_POST['pro_price'];
		$pro_desc = $_POST['pro_desc'];
		
		$cus_name = $_POST['cus_name'];
		$cus_phone = $_POST['cus_phone'];
		$cus_email = $_POST['cus_email'];
		$new =date('F j, Y g:i a  ');
		$county = $_POST['county'];
		$exact = $_POST['exact'];
		
		
		//getting the image from the field
		$pro_img = $_FILES['pro_img']['name'];
		$pro_img_tmp = $_FILES['pro_img']['tmp_name'];
		
		//uploading the image to root directory
		move_uploaded_file($pro_img_tmp,"uploads/$pro_img");
		
		$insert_product = "insert into available_prod (pro_cat, pro_title, pro_desc, pro_img, pro_price, cus_name, cus_phone, cus_email, publicationDate ,county, exact ) values ('$pro_cat','$pro_title','$pro_desc','$pro_img','$pro_price','$cus_name','$cus_phone','$cus_email','$new','$county','$exact')";
		//query to insert product to database
		$insert_pro = mysqli_query($con, $insert_product);
		
		//notifies the admin that product has been added
		if($insert_pro){
			echo "<script>alert('Product Has Been Added Successfully!')</script>";
			//redirects admin to same page to prevent redundancy
			echo "<script>window.open('post-ad.php','_self')</script>";
		}
		
	}

?>