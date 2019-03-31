<?php 
session_start();
$con = mysqli_connect("localhost","root","","shambama_rket (2)");
//add the error handling code later //added
if (mysqli_connect_errno())
	{
		echo "The connection was not established" . mysqli_connect_error();
	}
//get ip for user
function getIp(){
	$ip = $_SERVER['REMOTE_ADDR'];
	if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
		//This is for clients who use proxies
	} elseif (!empty($SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	
	return $ip;

}	

//cart function

function cart(){
if(isset($_GET['add_cart'])){
	
	global $con;
	
	//defining the variable for ip
	$ip = getIp();
	
	$pro_id = $_GET['add_cart'];
	//this query checks if an item has already been added to cart
	$check_pro = "select * from cart where ip_add='$ip' AND p_id='$pro_id'";

	$run_check = mysqli_query($con, $check_pro);
	
	
	if(mysqli_num_rows($run_check)>0){

		echo "<script>alert('product already exists in cart!')</script>";
	} else {
	$insert_pro = "insert into cart (p_id, ip_add) values ('$pro_id','$ip')";
		
		$run_pro = mysqli_query($con, $insert_pro);
		
		echo "<script>window.open('index.php','_self');
		alert('prduct has been added to cart');
		</script>";
		
		
		
		
		
	}
}

}

//getting the total added items

function total_items(){
	if(isset($_GET['add_cart'])){
		global $con;
		
		$ip=getIp();
		
		$get_items = "select * from cart where ip_add='$ip'";
		
		$run_items = mysqli_query($con, $get_items);
		
		$count_items = mysqli_num_rows($run_items);
		
		}
		else {
		
		global $con;
		
		$ip=getIp();
		
		$get_items = "select * from cart where ip_add='$ip'";
		
		$run_items = mysqli_query($con, $get_items);
		
		$count_items = mysqli_num_rows($run_items);
		
		}
		echo $count_items;
	}
	
//getting the total price of products in the cat table
function total_price(){
	
	$total = 0;
	
	global $con;
	
	$ip=getIp();
	
	$sel_price = "select * from cart where ip_add='$ip'";
	
	$run_price = mysqli_query($con, $sel_price);
	
	while($p_price=mysqli_fetch_array($run_price)){
	
		$pro_id = $p_price['p_id'];
		
		$pro_price = "select * from products where product_id='$pro_id'";
		
		$run_pro_price = mysqli_query($con, $pro_price);
		
		while ($pp_price = mysqli_fetch_array($run_pro_price)){
		
			$product_price = array($pp_price['product_price']);
			
			$values = array_sum($product_price);
			
			$total += $values;
		}
	}
	echo $total;
}


//getting the categories

function getCats(){

	global $con;
	
	$get_cats = "select * from categories"; 
	
	$run_cats = mysqli_query($con, $get_cats);
	
	while ($row_cats=mysqli_fetch_array($run_cats)){
	
		$cat_id = $row_cats['cat_id'];
		$cat_name = $row_cats['cat_name'];
		$icon_name = $row_cats['icon_name'];
	
	echo "

					<div class='col-md-2 focus-grid'>
						<a href='categories.php?cat_id=$cat_id'>
							<div class='focus-border'>
								<div class='focus-layout'>
									<div class='focus-image'>
									<img widht='40px'height='40px'src='images/icons/png/$icon_name'/></div>
									</div>
									<h4 class='clrchg'>$cat_name </h4>
								</div>
							</div>
						</a>
					</div>
	";
	
	}
}

//getting the brands

function getBrands(){
	global $con;
	
	$get_brands = "select * from brands";         
	$run_brands = mysqli_query($con, $get_brands);
	
	while ($row_brands=mysqli_fetch_array($run_brands)){
	
		$brand_id = $row_brands['brand_id'];
		$brand_title = $row_brands['brand_title'];
	
	echo "<li><a href='index.php?brand=$brand_id'>$brand_title</a></li>";
	
	}
}


//fetches products from the database randomly

function getPro(){

	
	global $con;
	
	$get_pro = "select * from available_prod order by RAND() LIMIT 0,4";
	
	$run_pro = mysqli_query($con, $get_pro);
	
		while($row_pro=mysqli_fetch_array($run_pro)){
		$pro_id = $row_pro['pro_id'];
		$pro_img = $row_pro['pro_img'];
		$pro_price = $row_pro['pro_price'];
		$pro_title = $row_pro['pro_title'];
		$pro_desc = $row_pro['pro_desc'];
		
		echo "

									<div class='col-md-3 biseller-column'>
										<a href='details.php?pro_id=$pro_id'>
											<img height='150px' src='uploads/$pro_img'/>
											<span class='price'>Kes $pro_price</span>
										</a> 
										<div class='ad-info'>
											<h5>$pro_desc</h5>
											<span>$pro_title</span>
										</div>
									</div>
		
		";
		}
}
/*function getbook(){

	
	global $con;
	
	$get_book = "select * from book order by RAND() LIMIT 0,4";
	
	$run_book = mysqli_query($con, $get_book);
	
		while($row_book=mysqli_fetch_array($run_book)){
		$pro_id = $row_pro['pro_id'];
		$pro_img = $row_pro['pro_img'];
		$pro_price = $row_pro['pro_price'];
		$pro_title = $row_pro['pro_title'];
		$pro_desc = $row_pro['pro_desc'];
		
		echo "

									<div class='col-md-3 biseller-column'>
										<a href='details.php?pro_id=$pro_id'>
											<img height='150px' src='uploads/$pro_img'/>
											<span class='price'>Kes $pro_price</span>
										</a> 
										<div class='ad-info'>
											<h5>$pro_desc</h5>
											<span>$pro_title</span>
										</div>
									</div>
		
		";
		}	*/	
	

function pickCat(){
if(isset($_GET['cat_id'])){
	global $con;
	$cat_pick = $_GET['cat_id'];
	$get_cat_name = "select * from categories where cat_id='$cat_pick'";
	$run_qry_name = mysqli_query($con, $get_cat_name);
		while($row_cat=mysqli_fetch_array($run_qry_name)){
		$cat_name = $row_cat['cat_name'];
		
		echo $cat_name;

}
}

}

function showCat(){
if(isset($_GET['pro_id'])){
	global $con;
	$cat_pick = $_GET['cat_id'];
	$get_cat_name = "select * from categories where cat_id='$cat_pick'";
	$run_qry_name = mysqli_query($con, $get_cat_name);
		while($row_cat=mysqli_fetch_array($run_qry_name)){
		$cat_name = $row_cat['cat_name'];
		
		echo $cat_name;

}
}

}


function getallbookcat(){

	
	global $con;
	
	
	$get_book = "select * from book";
	
	$run_book = mysqli_query($con, $get_book);

	$count_book = mysqli_num_rows($run_book);
		
	
	if ($count_book==0){
			echo "<a style='text-decoration: none; color: red;'>Products not available!</a>
			";
		}
	
		while($row_book=mysqli_fetch_array($run_book)){
		$book_id = $row_book['book_id'];
		$book_image = $row_book['book_image'];
		$book_price = $row_book['book_price'];
		$book_title = $row_book['book_title'];
		$book_desc = $row_book['book_desc'];
		

		
		echo "
							
						

								<a href='single.php?book_id=$book_id'>
									<li>
									<img src='vitabu/$book_image' />
									<section class='list-left'>
									<h5 class='title'>$book_title</h5>
									<span class='adprice'>Kes $book_price</span>
									
									</section>
									<section class='list-right'>
									
									</section>
									<div class='clearfix'></div>
									</li> 
								</a>

		
		";
		}
		
		}
function getallProcat(){

	
	global $con;
	
	
	$get_pro = "select * from available_prod";
	
	$run_pro = mysqli_query($con, $get_pro);

	$count_pros = mysqli_num_rows($run_pro);
		
	
	if ($count_pros==0){
			echo "<a style='text-decoration: none; color: red;'>Products not available!</a>
			";
		}
	
		while($row_pro=mysqli_fetch_array($run_pro)){
		$pro_id = $row_pro['pro_id'];
		$pro_img = $row_pro['pro_img'];
		$pro_price = $row_pro['pro_price'];
		$pro_title = $row_pro['pro_title'];
		$pro_desc = $row_pro['pro_desc'];
		$publicationDate = $row_pro['publicationDate'];
		$county = $row_pro['county'];
		$exact = $row_pro['exact'];

		
		echo "
								<a href='details.php?pro_id=$pro_id'>
									<li>
									<img src='uploads/$pro_img' />
									<section class='list-left'>
									<h5 class='title'>$pro_desc</h5>
									<span class='adprice'>Ksh $pro_price</span>
									<p class='catpath'>category » name</p>
									</section>
									<section class='list-right'>
									<span class='date'>$publicationDate</span>
									<span class='county'>$county</span>
									<span class='exact'>$exact</span>
									</section>
									<div class='clearfix'></div>
									</li> 
								</a>

		
		";
}
	


	}	
	




function getProcat(){

	if(isset($_GET['cat_id'])){
	global $con;
	$cat_pick = $_GET['cat_id'];
	
	$get_pro = "select * from available_prod where pro_cat='$cat_pick'";
	
	$run_pro = mysqli_query($con, $get_pro);

	$count_pros = mysqli_num_rows($run_pro);
		
	
	if ($count_pros==0){
			echo "<a style='text-decoration: none; color: red;'>Product in this category not available!</a>
			";
		}
	
		while($row_pro=mysqli_fetch_array($run_pro)){
		$pro_id = $row_pro['pro_id'];
		$pro_img = $row_pro['pro_img'];
		$pro_price = $row_pro['pro_price'];
		$pro_title = $row_pro['pro_title'];
		$pro_desc = $row_pro['pro_desc'];
		$publicationDate = $row_pro['publicationDate'];
		$county = $row_pro['county'];
		$exact = $row_pro['exact'];

		echo "
								<a href='details.php?pro_id=$pro_id'>
									<li>
									<img src='uploads/$pro_img' />
									<section class='list-left'>
									<h5 class='title'>$pro_desc</h5>
									<span class='adprice'>Kes $pro_price</span>
									<p class='catpath'>category » name</p>
									</section>
									<section class='list-right'>
									<span class='date'>$publicationDate</span>
									<span class='county'>$county</span>
									<span class='exact'>$exact</span>
									</section>
									<div class='clearfix'></div>
									</li> 
								</a>

		
		";
		}
		
	
}
}

function getbookcat(){

	if(isset($_GET['cat_id'])){
	global $con;
	$cat_pick = $_GET['cat_id'];
	
	$get_pro = "select * from book where book_cat='$cat_pick'";
	
	$run_book = mysqli_query($con, $get_bok);

	$count_book = mysqli_num_rows($run_book);
		
	
	if ($count_book==0){
			echo "<a style='text-decoration: none; color: red;'>Product in this category not available!</a>
			";
		}
	
		while($row_book=mysqli_fetch_array($run_book)){
		$book_id = $row_book['book_id'];
		$book_image = $row_book['book_image'];
		$book_price = $row_book['book_price'];
		$book_title = $row_book['book_title'];
		$book_desc = $row_book['book_desc'];
		

		
		echo "
							
						

								<a href='single.php?book_id=$book_id'>
									<li>
									<img src='vitabu/$book_image' />
									<section class='list-left'>
									<h5 class='title'>$book_title</h5>
									<span class='adprice'>Kes $book_price</span>
									
									</section>
									<section class='list-right'>
									
									</section>
									<div class='clearfix'></div>
									</li> 
								</a>


		
		";
		}
}
}

function getProduct(){

	if(isset($_GET['pro_id'])){
	global $con;
	$pro_pick = $_GET['pro_id'];
	
	$get_pro = "select * from available_prod where pro_cat='$pro_pick'";
	
	$run_pro = mysqli_query($con, $get_pro);
	
		while($row_pro=mysqli_fetch_array($run_pro)){
		$pro_id = $row_pro['pro_id'];
		$pro_img = $row_pro['pro_img'];
		$pro_price = $row_pro['pro_price'];
		$pro_title = $row_pro['pro_title'];
		$pro_desc = $row_pro['pro_desc'];
		
		echo "
							

		
		";
		}
		
	

}


function getbook(){

	if(isset($_GET['book_id'])){
	global $con;
	$book_pick = $_GET['book_id'];
	
	$get_book = "select * from book where book_cat='$book_pick'";
	
	$run_book = mysqli_query($con, $get_book);

	
		while($row_book=mysqli_fetch_array($run_book)){
	$book_id = $row_book['book_id'];
		$book_image = $row_book['book_image'];
		$book_price = $row_book['book_price'];
		$book_title = $row_book['book_title'];
		$book_desc = $row_book['book_desc'];
		
		echo "  
				<div class='col-md-3 biseller-column'>
										<a href='single.php?book_id=$book_id'>
											<img height='150px' src='vitabu/$book_image'/>
											<span class='price'>Kes $book_price</span>
										</a> 
										<div class='ad-info'>
											<h5>$book_desc</h5>
											<span>$book_title</span>
										</div>
									</div>
							

		
		";
		}
		
	

}

//function for filtering product by category
function getCatPro(){

	if(isset($_GET['cat'])){
			
			$cat_id = $_GET['cat'];
	
	global $con;
	
	$get_cat_pro = "select * from products where product_cat='$cat_id'";
	// i found a deadly error here by just omitting the star..
	$run_cat_pro = mysqli_query($con, $get_cat_pro);
	
		$count_cats = mysqli_num_rows($run_cat_pro);
		
	
	if ($count_cats==0){
			echo "<h2 style='padding:20px;'> $count_cats products found! Try another category...</h2>
			<img src='images/404.png' height='180' width='180'>
			";
		}
	
		while($row_cat_pro=mysqli_fetch_array($run_cat_pro)){
		$pro_id = $row_cat_pro['product_id'];
		$pro_cat = $row_cat_pro['product_cat'];
		$pro_brand = $row_cat_pro['product_brand'];
		$pro_title = $row_cat_pro['product_title'];
		$pro_price = $row_cat_pro['product_price'];
		$pro_image = $row_cat_pro['product_image'];
		 
		
			echo "
				<div id='single_product'>
				
					<h3>$pro_title</h3>
					<img src='admin_area/product_images/$pro_image' width='180' height='180'/>
					<p><b>Price: Kshs. $pro_price </b></p>
					
					<a href='details.php?pro_id=$pro_id'><button style='float:left;'>Details</button></a>
					<a href='index.php?add_cart=$pro_id'><button style='float:right;'>Add to cart</button></a>
				</div>
			
			";
		}
		
	}
}


//function for filtering product by brand
function getBrandPro(){

	if(isset($_GET['brand'])){
			
			$brand_id = $_GET['brand'];
	
	global $con;
	
	$get_brand_pro = "select * from products where product_brand='$brand_id'";
	
	$run_brand_pro = mysqli_query($con, $get_brand_pro);
	
		$count_brands = mysqli_num_rows($run_brand_pro);
		
	
	if ($count_brands==0){
			echo "<h2 style='padding:20px;'> $count_brands products found! Try another Brand...</h2>
			<img src='images/404.png' height='180' width='180'>
			";
		}
	
		while($row_brand_pro=mysqli_fetch_array($run_brand_pro)){
		$pro_id = $row_brand_pro['product_id'];
		$pro_cat = $row_brand_pro['product_cat'];
		$pro_brand = $row_brand_pro['product_brand'];
		$pro_title = $row_brand_pro['product_title'];
		$pro_price = $row_brand_pro['product_price'];
		$pro_image = $row_brand_pro['product_image'];
		 
		
			echo "
				<div id='single_product'>
				
					<h3>$pro_title</h3>
					<img src='admin_area/product_images/$pro_image' width='180' height='180'/>
					<p><b> Price: Kshs. $pro_price </b></p>
					
					<a href='details.php?pro_id=$pro_id'><button style='float:left;'>Details</button></a>
					<a href='index.php?add_cart=$pro_id'><button style='float:right;'>Add to cart</button></a>
				</div>
			
			";
		}
		
	}
}

}
}

?>