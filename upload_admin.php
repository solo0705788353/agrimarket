<?php 
$con = mysqli_connect("localhost","root","","khanstore");


?>
<html>
<head>
</head>

<body>

	<div class="submit-ad main-grid-border">
		<div class="container">
			<h2 class="head">Post an Product</h2>
			<div class="post-ad-form">
				<form action="upload_admin.php" method="post" enctype="multipart/form-data">
					<label>Select Category <span>*</span></label>
					<select name="product_cat">
						<option>Select a category</option>
						<?php
						
	
						$get_cats = "select * from categories";         
						$run_cats = mysqli_query($con, $get_cats);
	
						while ($row_cats=mysqli_fetch_array($run_cats)){
	
							$cat_id = $row_cats['cat_id'];
							$cat_title = $row_cats['cat_title'];
	
						echo "<option value='$cat_id'>$cat_title</option>";
	
						}
						?>
					</select>
					<label>Select Brand <span>*</span></label>
					<select name="product_brand">
						<option>Select a Brand</option>
						<?php
						
	
						$get_cats = "select * from brands";         
						$run_cats = mysqli_query($con, $get_cats);
	
						while ($row_cats=mysqli_fetch_array($run_cats)){
	
							$brand_id = $row_cats['brand_id'];
							$brand_title = $row_cats['brand_title'];
	
						echo "<option value='$brand_id'>$brand_title</option>";
	
						}
						?>
					</select>
					<div class="clearfix"></div>
					<label>Product Name <span>*</span></label>
					<input type="text" name="product_title" class="phone" placeholder="">
					<div class="clearfix"></div>
					<label>Product Price (Kes)<span>*</span></label>
					<input type="text" name="product_price" class="phone" placeholder="">
					<div class="clearfix"></div>
					<label>Product Description <span>*</span></label>
					<textarea class="mess" name="product_desc" placeholder="Write few lines about your product"></textarea>
					<div class="clearfix"></div>
				<div class="upload-ad-photos">
				<label>Photos for product :</label>	
					<div class="photos-upload-view">
						
						
						

						<div>
							<input type="file" id="fileselect" name="product_image" required />
							<div id="filedrag">or drop files here</div>
						</div>

					

					
						</div>
					<div class="clearfix"></div>
						<script src="js/filedrag.js"></script>
				</div>
					<div class="personal-details">
					
						<label>Key Words <span>*</span></label>
						<input type="text" class="name" name="product_keywords" placeholder="">


						
						<div class="clearfix"></div>
						<p class="post-terms">By clicking <strong>post Button</strong> you accept our <a href="terms.html" target="_blank">Terms of Use </a> and <a href="privacy.html" target="_blank">Privacy Policy</a></p>
					<input type="submit" name="insert_post" value="Post">					
					<div class="clearfix"></div>
					
					</div>
					</form>
			</div>

		</div>	
	</div>

<?php
	
	if(isset($_POST['insert_post'])){
		
		//getting data from fields
		$product_cat = $_POST['product_cat'];
		$product_title = $_POST['product_title'];
		$product_price = $_POST['product_price'];
		$product_desc = $_POST['product_desc'];
		$product_keywords = $_POST['product_keywords'];
		
		
		$cus_name = $_POST['cus_name'];
		$cus_phone = $_POST['cus_phone'];
		$cus_email = $_POST['cus_email'];
		
		//getting the image from the field
		$product_image = $_FILES['product_image']['name'];
		$product_image_tmp = $_FILES['product_image']['tmp_name'];
		
		//uploading the image to root directory
		move_uploaded_file($product_image_tmp,"uploads/$product_image");
		
		$insert_product = "insert into available_product product_cat, product_title, product_desc, product_img, product_price, cus_name, cus_phone, cus_email) values ('$product_cat','$product_title','$product_desc','$product_image','$product_price','$cus_name','$cus_phone','$cus_email')";
		//query to insert product to database
		$insert_product = mysqli_query($con, $insert_product);
		
		//notifies the admin that product has been added
		if($insert_product){
			echo "<script>alert('Info: product has been added!')</script>";
			//redirects admin to same page to prevent redundancy
			echo "<script>window.open('upload_admin.php','_self')</script>";
		}
		
	}

?>

</body>

</html>