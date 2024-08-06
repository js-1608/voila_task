<?php    


error_reporting(0);  
   
//session_start();

$servername = "localhost";
$username = "voilazrt_studiodata_myntrausers";
$password = "Wo!A*L#ART00d!o_myntra";
$dbname = "voilazrt_studiomyntra";


try {
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  

}catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
 
   
Define('WEBROOT','https://test.voilastudio.in/voilastudio_admin/');	
Define('img_prefix','sm');	


?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="UTF-8">
  <title>CodePen - Responsive Mega Dropdown</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href='//fonts.googleapis.com/css?family=Sarala:400,700' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='//cdnjs.cloudflare.com/ajax/libs/ionicons/1.5.2/css/ionicons.min.css'>
<link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<nav role="navigation" class="main-nav-wrap">
	<div class="mobilemenucompanylogo">
		<a class="companyslogoankers" href=""><img src="../mega_menu/img/voila_logo.png" alt=""></a>
	</div>

	<button class="btn btn-primary main-nav-trigger">
		<span class="ion-navicon-round"></span>
	</button>
	<ul class="main-nav">
	<?php  
				
				$get_menu = "SELECT * FROM menu where 1=1"  ; 
				$get_menu_run = $conn->prepare($get_menu);
				$get_menu_run->execute();

				while($get_menu_rows = $get_menu_run->fetch(PDO::FETCH_ASSOC)){
					$menu = $get_menu_rows['id'];     

					?>
	<!-- 1ST tab -->
		        <li class="has-subnav">
	        		<a href="" class="has-subnav-link"><?php echo $get_menu_rows['menu']; ?></a>
		        	<ul class="main-dropdown subnav">
			<?php 
					
						// $get_categories = '';        
									
									
						if($get_menu_rows['id'] == 1){
						
							$get_categories = "SELECT * FROM male_ecomm_categories where status='p' order by serial desc "  ; 

						}
				
				
						if($get_menu_rows['id'] == 2){
						
							$get_categories = "SELECT * FROM female_ecomm_categories where status='p' order by serial desc "  ; 

						}
				
											
						if($get_menu_rows['id'] == 3){
						
							$get_categories = "SELECT * FROM kids_ecomm_categories where status='p'  order by id asc "  ; 

						}
										
						if($get_menu_rows['id'] == 4){
						
						$get_categories = "SELECT * FROM product_ecomm_categories where status='p'  order by id asc "  ; 

						}
						
						
				
					
						
						$get_categories_run = $conn->prepare($get_categories);
						$get_categories_run->execute();

			
						?>
						

							<?php 
							
							while($get_categories_rows = $get_categories_run->fetch(PDO::FETCH_ASSOC)){
								
								$category_id = $get_categories_rows['id'];
								
								
								if($get_menu_rows['id'] == '1'){
								
									$get_link_sub_categories = "SELECT * FROM male_ecomm_subcategories where status='p' and category_id =  '$category_id' and status = 'p'  order by serial desc "  ; 
				
								}
						
								// for women //
						
								if($get_menu_rows['id'] == '2'){
								
									$get_link_sub_categories = "SELECT * FROM female_ecomm_subcategories where status='p' and category_id =  '$category_id' and status = 'p' order by serial desc "  ; 
				
								} 
								
								
											
								$get_link_sub_categories_run = $conn->prepare($get_link_sub_categories);
								$get_link_sub_categories_run->execute();
								
							
								$get_link_sub_categories_rows = $get_link_sub_categories_run->fetch(PDO::FETCH_ASSOC);
								
								
								
								
								?>


								<?php 
												
								if($get_link_sub_categories_rows['sub_category_name'] == $get_categories_rows['category_name'] ){
						
									//  for subactegory link
									?>
									<li class="has-subnav" data-nav="<?php if($get_categories_rows['sequence']!='') {echo $get_categories_rows['sequence'];} else{ echo(rand(1,3)); }?>">
										<a  href="/collection.php?menu_id=<?php echo $menu;?>&category_id=<?php echo $category_id;?>&sub_category_id=<?php echo $get_link_sub_categories_rows['id'];?>" class="has-subnav-link subnav-header"><?php echo $get_categories_rows['category_name']; ?></a>
									</li>	
									
								<?php } ?>

								<?php 
										
								if($get_link_sub_categories_rows['sub_category_name'] != $get_categories_rows['category_name'] ){
										//  for category link
									?>	
								<li class="has-subnav" data-nav="<?php if($get_categories_rows['sequence']!='') {echo $get_categories_rows['sequence'];} else{ echo(rand(1,3)); }?>">
									<a href="/collection.php?menu_id=<?php echo $menu;?>&category_id=<?php echo $category_id;?>&sub_category_id=<?php echo $get_link_sub_categories_rows['id'];?>" class="has-subnav-link subnav-header"><?php echo $get_categories_rows['category_name']; ?></a>
							
									<ul class="subnav">
										<?php            
								
										// for men //
										
										if($get_menu_rows['id'] == '1'){
											
											$get_sub_categories = "SELECT * FROM male_ecomm_subcategories where status='p' and category_id =  '$category_id' and status = 'p'  order by serial desc "  ; 

										}
								
										// for women //
								
										if($get_menu_rows['id'] == '2'){
										
											$get_sub_categories = "SELECT * FROM female_ecomm_subcategories where status='p' and category_id =  '$category_id' and status = 'p' order by serial desc "  ; 

										}
								
									
										//  Kids & Products are Pending //
																
										if($get_menu_rows['id'] == '3'){
										
													$get_sub_categories = "SELECT * FROM kids_ecomm_subcategories where status='p' and category_id =  '$category_id'  and status = 'p' "  ; 

											}
								
															
											if($get_menu_rows['id'] == '4'){
										
												$get_sub_categories = "SELECT * FROM product_ecomm_subcategories where status='p' and category_id =  '$category_id' and status = 'p' "  ; 

										}
								
										//  echo $get_sub_categories;
													
										$get_sub_categories_run = $conn->prepare($get_sub_categories);
										$get_sub_categories_run->execute();
										
										
										while($get_sub_categories_rows = $get_sub_categories_run->fetch(PDO::FETCH_ASSOC)){
									
									
										?>
								
										
										<?php if($get_menu_rows['id'] != '4'){
											
											
											if($get_sub_categories_rows['sub_category_name'] != $get_categories_rows['category_name']){
									
												?>               
												<li><a href="/collection.php?menu_id=<?php echo $menu;?>&category_id=<?php echo $category_id;?>&sub_category_id=<?php echo $get_sub_categories_rows['id'];?>"><?php echo $get_sub_categories_rows['sub_category_name'];?></a></li>
										
										

											<?php } 
									
										}
									
										?>
								
								
										<?php if($get_menu_rows['id'] == '4'){
											
											
											if($get_sub_categories_rows['sub_category_name'] != $get_categories_rows['category_name']){
										
												?>    
												<li><a href="/product_collection.php?menu_id=<?php echo $menu;?>&category_id=<?php echo $category_id;?>&sub_category_id=<?php echo $get_sub_categories_rows['id'];?>"><?php echo $get_sub_categories_rows['sub_category_name'];?></a></li>
												<?php } ?>
											
											<?php } ?>
										
	
										
											<?php } ?>	
									
									</ul>
									
								</li>	
								<?php } ?>		
	
								<?php }
						
	
								?>
								
								<li class="nav-col" data-col="1"><ul class="nav"></ul></li>
								<li class="nav-col" data-col="2"><ul class="nav"></ul></li>
								<li class="nav-col" data-col="3"><ul class="nav"></ul></li>
								
								
								
							</ul>
							
					
						</li>
						
					<?php } 
	
					//echo ""
					
					?>
				
				</ul>
	<div class="searchandicons">

		<b class="searchresultsanddynamo">
			<?php include ('./search_new2.php');?>
   
			<div id="search_r_cont">
			</div>	
		<img class="searchicononsearchbar" src="../mega_menu/img/search.png" alt="">
		</b>



		<b class="socialiconsdynamo">
			<b class="mobilesearchbardyno">
			<button id="myBtn"><img src="../mega_menu/img/search.png" alt=""></button>
		<div id="myModal" class="modal">
			<div class="modal-content">
				<span class="close">&times;</span>
				<?php   include ('./search_new2mobile.php'); ?>
				<div id="search_r_contmob">
				</div>
			</div>
		</div>

				</b>

			<img id="social_icons_imgsdyna"  onclick="openFormForSignIn()" src="../mega_menu/img/user.png" alt="voila e-Commerce photography">
			<a class="paymentbaglinksdyna" href="paymentpagenew.php"><img src="../mega_menu/img/bag.png" alt="voila e-Commerce photography">
				 <div id= "total_cart_items_modelsendynamo">0</div></a>
			</b>
	</div>
	
</nav>

<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/enquire.js/2.1.2/enquire.min.js'></script><script  src="./script.js"></script>

</body>
</html>
