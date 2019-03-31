<?php
include_once("functions/function.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>ShambaMarket | Login </title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-select.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
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
				<a href="index.php"><span>Shamba</span>Market</a>
			</div>
			<div class="header-right">
			<?php
			/*
			if(isset($_SESSION['email'])){
				$username = $_SESSION['email'];
				echo "<a class='account' href='logout.php'> <i class='fa fa-user'> $username</i> | Log Out</a>";
			} else {
				echo "<a class='account' href='login.php'>My Account</a>";
			} */
			?>
			
		</div>
		</div>
	</div>
	 <section>
			<div id="page-wrapper" class="sign-in-wrapper">
				<div class="graphs">
					<?php if(isset($_GET['postm'])){
					$message1 = $_GET['postm'];
					echo "
					<div class='alert alert-info center'>
						$message1
					</div>
					";
				}

				?>
					<div class="sign-in-form">
						<div class="sign-in-form-top">
							<h1>Log in</h1>
						</div>
						<div class="signin">
							<div class="signin-rit">
								<span class="checkbox1">
									 <label class="checkbox"><input type="checkbox" name="checkbox" checked="">Forgot Password ?</label>
								</span>
								<p><a href="#">Click Here</a> </p>
								<div class="clearfix"> </div>
							<?php

							if(isset($_GET['msg'])){
								$message = $_GET['msg'];
								echo "<div class='alert alert-info'>$message</div>";
							}
							
							?>
							</div>
							<form method="POST" action="login.php">
							<div class="log-input">
								<div class="log-input-left">
								   <input type="text" class="user" name="username" value="Your Username"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Email';}"/>
								</div>
								
								<div class="clearfix"> </div>
							</div>
							<div class="log-input">
								<div class="log-input-left">
								   <input type="password" class="lock" value="password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address:';}"/>
								</div>
							
								<div class="clearfix"> </div>
							</div>
							<input type="submit" name="login" value="Log in">
						</form>	 
						</div>
						<div class="new_people">
							<h2>Are You New? </h2>
							<p>C'mon, It just takes a minute...</p>
							<a href="register.php">Register Now!</a>
						</div>
					</div>
				</div>
			</div>
		<!--footer section start-->
			<footer class="diff">
			   <p class="text-center"> © 2018 ShambaMarket. All Rights Reserved | Design by  <a href="#"> iPassion Solutions</a></p>
			</footer>
        <!--footer section end-->
	</section>
</body>
</html>
<?php
if(isset($_POST['login'])){
	$email = $_POST['username'];
	$password = $_POST['password'];

	echo $auth = "select * from user_info where email='$email' and password='$password'";
	$con = mysqli_connect("localhost","root","","shambama_rket (2)");
	$query = mysqli_query($con, $auth);

	if(mysqli_num_rows($query) > 0){
		$_SESSION['email'] = $email;
		while($record=mysqli_fetch_array($query)){
		echo $_SESSION['first_name'] = $record['first_name'];
		echo $_SESSION['mobile'] = $record['mobile'];
		
	}

	echo "<script>window.open('post-ad.php','_self');</script>";

		


	} else {
		echo "<script>alert('Supply Credentials or Wrong login credentials')</script>";
	}

}
?>