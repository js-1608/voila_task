<?php    
error_reporting(0);  
session_start();
 include('db_config/base_url.php');
include('db_config/db_config.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php  include("menu_test.php"); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refund Policy</title>
    <link rel="stylesheet" href="./old_website_assets/css/lightbox.css" type="text/css" media="all">
	<!-- Lightbox -->
	<link rel="stylesheet" href="./old_website_assets/css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="./old_website_assets/css/bootstrap.css">
 <style>
	.desktop_img{
         display:block;
	}

	.mobile_img{
		display:none;

	}
	@media (max-width:768px) {
		
		.mobile_img{
		display:block;

	}
	.desktop_img{
         display:none;
	}
	}
 </style>
      
</head>
<body>
<div>
	<img class="desktop_img"  src="./assets/img/become_partner_img/Look BOOK Desktop.jpg" alt="desktopimg">
	<img class=" mobile_img"  src="https://sub.voilastudio.co.in/assets/img/become_partner_img/LOOKBOOK SHOOT.jpg" alt="mobileimg ">
</div>

	<!-- gallery -->
	<div class="gallery-agile py-5">
		<div class="container py-xl-5 py-lg-3">
			<!-- heading title -->
			<div class="text-center mb-lg-5 mb-4">
				<h3 class="title-wthree mb-2">
					<span class="mt-2 text-uppercase font-weight-bold">Lookbook Photography</span></h3>
			</div>
			<!-- //heading title -->
			<div class="row gallery-agile-kmsrow">
			    
			    	<div class="col-md-4 col-sm-6 gallery-agile-grids my-md-4 ">
					<div class="portfolio-hover img-hover-zoom cont">
				
						     <a href="https://voilastudio.in/image_show_lookbook.php?action=detail&id=4" >
							<img src="./old_website_assets/images/Rajeev-1.webp" class="image11 " alt="" /> 
							 <div class="overlay"> Click to see more</div>
						</a>
					</div>
				</div>
				
					<div class="col-md-4 col-sm-6 gallery-agile-grids my-4 ">
					<div class="portfolio-hover img-hover-zoom cont">
					
						     <a href="https://voilastudio.in/image_show_lookbook.php?action=detail&id=5" >
							<img src="./old_website_assets/images/1 (6)_main.webp" class="image11 " alt="" /> 
							 <div class="overlay"> Click to see more</div>
						</a>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-agile-grids my-4 ">
					<div class="portfolio-hover img-hover-zoom cont">
					
						     <a href="https://voilastudio.in/image_show_lookbook.php?action=detail&id=6" >
							<img src="./old_website_assets/images/1.webp" class="image11" alt="" /> 
							 <div class="overlay"> Click to see more</div>
						</a>
					</div>
				</div>
			    
			    
				<div class="col-md-4 col-sm-6 gallery-agile-grids">
					<div class="portfolio-hover img-hover-zoom cont">
						<!--<a target="_blank" href="images/lookbook/Lilly Fashion 2.pdf"> -->
						    <a href="https://voilastudio.in/image_show_lookbook.php?action=detail&id=3" >
							<img src="./old_website_assets/images/lookbook/cocktail.jpg" class=" image11" alt="" /> 
							 <div class="overlay"> Click to see more</div>
							 
						</a>
					</div>
				
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-agile-grids mt-sm-0 mt-4 ">
					<div class="portfolio-hover img-hover-zoom cont">
					<!--	<a target="_blank" href="images/lookbook/Poshak Hub.pdf" > -->
						     <a href="https://voilastudio.in/image_show_lookbook.php?action=detail&id=2"  >
							<img src="./old_website_assets/images/lookbook/poshakhub/16.jpg" class="image11 " alt="" /> 
							 <div class="overlay"> Click to see more</div>
						</a>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-agile-grids mt-sm-0 mt-4 ">
					<div class="portfolio-hover img-hover-zoom cont">
					<!--	<a target="_blank" href="images/lookbook/Poshak Hub.pdf" > -->
						     <a href="https://voilastudio.in/image_show_lookbook.php?action=detail&id=1" >
							<img src="./old_website_assets/images/lookbook/1.jpg" class="image11 " alt="" /> 
							 <div class="overlay"> Click to see more</div>
						</a>
					</div>
				</div>
				
					<div class="col-md-4 col-sm-6 gallery-agile-grids my-md-4 ">
					<div class="portfolio-hover img-hover-zoom cont">
				
						     <a href="https://voilastudio.in/image_show_lookbook.php?action=detail&id=7" >
							<img src="./old_website_assets/images/lookbook/Suman/1_22.jpg" class="image11 " alt="" /> 
							 <div class="overlay"> Click to see more</div>
						</a>
					</div>
				</div>
				
					<div class="col-md-4 col-sm-6 gallery-agile-grids my-4 ">
					<div class="portfolio-hover img-hover-zoom cont">
					
						     <a href="https://voilastudio.in/image_show_lookbook.php?action=detail&id=8" >
							<img src="./old_website_assets/images/lookbook/saranjeet/Front Images.webp" class="image11 " alt="" /> 
							 <div class="overlay"> Click to see more</div>
						</a>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-agile-grids my-4 ">
					<div class="portfolio-hover img-hover-zoom cont">
					
						     <a href="https://voilastudio.in/image_show_lookbook.php?action=detail&id=9" >
							<img src="./old_website_assets/images/lookbook/Vibhuti/Main.webp" class="image11" alt="" /> 
							 <div class="overlay"> Click to see more</div>
						</a>
					</div>
				</div> 
			    
			
			
			
				
					
			</div>
			
			
		</div>
	</div>
	<!-- //gallery -->
	

<?php include("newfooter.php"); ?>

</body>
</html>
