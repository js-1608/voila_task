
<?php
ob_clean();
error_reporting(0);
session_start();
?>

<?php



$servername = "localhost";

$username = "voilausers";

$password = "Wo!A*L#ART00d!o_voila";

$dbname = "windsjga_studiovoila";


try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


}catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}



include('db_config/base_url.php');



	
function getVisIpAddr() { 
      
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) { 
        return $_SERVER['HTTP_CLIENT_IP']; 
    } 
    else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { 
        return $_SERVER['HTTP_X_FORWARDED_FOR']; 
    } 
    else { 
        return $_SERVER['REMOTE_ADDR']; 
    } 
} 
  
// Store the IP address 
$vis_ip = getVisIPAddr(); 
  
// Display the IP address 


$ipdat = @json_decode(file_get_contents( 
    "http://www.geoplugin.net/json.gp?ip=" . $vis_ip)); 



$country_name  = $ipdat->geoplugin_countryName;


if($country_name == 'India'){
		
	$country_type = 'national';		

}else{
	$country_type = 'international';

}
		






?>
	

<head>

	<link rel="icon" type="image/x-icon" href="<?php echo BASE_URL; ?>/assets/img/favicon.png">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/frontpage/assets/style.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/our_client.css" type="text/css" media="all" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> -->
    <link rel='stylesheet' href='https://unpkg.com/aos@2.3.0/dist/aos.css'>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/header.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/signup_login.css">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script> -->
</head>

	



<style>
    li.has-subnav {
    width: auto;
	text-transform: capitalize;
}
a {
	text-decoration:none;
    color: black !important;
}
@media only screen and (max-width: 650px) {
	.mobilemenucompanylogo{
		margin-left:22px
	}
	.switch_website_div{
		display:none;
	}
	.switch_to{
		font-size:10px;
	}
	@media only screen and (min-width: 900px) {
		.switch_to_text{
			font-size:10px;
		}
	}
	.mobile_hide{
		display:none !important;
	}

}
/* .search_div_se{
	width:75% !important;
} */
.mobile_switch_button{
    display: block !important; 
}
@media (min-width: 600px) {
    .mobile_switch_button{
        display: none !important;
    }


	}
		  
.tooltip2 {
    position: relative;
    display: inline-block;
    cursor: pointer;
     margin-top:0px;
	 width:10px;
  }
  
  .tooltip2 .tooltiptext {
    position: absolute;
    display: none;
    width:max-content;
    color: #000;
    border-radius: 6px;
    z-index: 100;
    top: -17px;
    text-align: center;
    right:5%;
    text-transform: capitalize;
	background-color:white;
	border: 1px solid grey;
	padding:5px;
  }
  
  .tooltip2:hover .tooltiptext {
    display: block;
  }
/*    
.color_change {
    animation: comingsoon 2s infinite alternate-reverse linear;
}
@keyframes comingsoon {
    0% { color: yellow; }
    50% { color: blue; }
    100% { color: red; }
} */
/* 
.tool{
	width:10px  !important;
}
.announcement_bar{
  display: flex;
 justify-content: center;
  padding-top: 3px;
  align-items: center;
  padding-bottom: 3px;
 gap: 10px;
  background-color: #8a51b5;
}
.announcement_text{
  color: white;
  font-size: 16px;
}

.announcement_gredient{
  color: #f8efef;
  font-size: 16px;
  font-weight: 600;
} */
/* }
.announcement_gredient{
	animation: shake .8s infinite ;
}

@keyframes shake{
0%{
  transform: translateX(0) !important;
  color: #f7d360;
}
25%{
  transform: translateX(-5px) !important;
  color: green;
}
50%{
  transform: translateX(5px) !important;
  color: red;
}
75%{
  transform: translateX(-5px !important);
}
100%{
  transform: translateX(0) !important;
}
} */
/* 
.shake {
    animation: shake 0.5s !important;
    animation-iteration-count: infinite !;
}

@keyframes shake {
    0% { transform: translateX(0);
		color: #f7d360 !important;}
    25% { transform: translateX(-5px);
		color: #f7d360 !important ;}
    50% { transform: translateX(5px); }
    75% { transform: translateX(-5px); }
    100% { transform: translateX(0); }
	
}
 */

</style>
<style>
.announcement_bar4{
 background: #fff;
box-shadow: -4px 9px 5px -9px rgba(0,0,0,0.75);
 text-align: center;
 padding: 2px 0px;}

.announcement_text4{
    font-size: 13px !important;
    letter-spacing: 1px;
}

.shake{
  animation-name: qw ;
  animation-duration: 5s;
  animation-iteration-count: infinite;
}
@keyframes qw   {
    0%{
  transform: translateX(0);
 
}
25%{
  transform: translateX(-5px);
  
}
50%{
  transform: translateX(5px);
}
75%{
  transform: translateX(-5px);
}
100%{
  transform: translateX(0);
}
}

@media (max-width:768px) {
    .announcementbar_mobile_none{
        display: none;
    }
}
    </style>


<!-- partial:index.partial.html -->
<!-- <div class="mobile_hide announcement_bar" style=" height:20px; ">
     <p class="announcement_text" style="color:white !important; font-size:14px ;margin:0px !important">Discover Our Services! Call To Book Shoots - 
     <p class="announcement_gredient" style="color:white !important; font-size:14px ;margin:0px !important">Online Booking Launching Soon!</p></p>
 </div> -->
 <div class="announcement_bar4 announcementbar_mobile_none">
            <p class="announcement_text4">Explore Our E-Commerce Photoshoot Services! Call To Book Shoots - 
            <span class="announcement_gredient4">Online Booking Launching Soon!</span></p>
        </div>
	
		<!-- <script>
        document.addEventListener('DOMContentLoaded', () => {
    const contactUsElement = document.querySelector('.announcement_gredient');
    setInterval(() => {
        contactUsElement.classList.add('shake');
        setTimeout(() => {
           contactUsElement.classList.remove('shake');
        }, 500); 
    }, 2000); 
    }); 
    
    </script>-->
	<script>
            const contactUsElement2 = document.querySelector('.announcement_gredient4');
            setInterval(() => {
                contactUsElement2.classList.add('shake');
                setTimeout(() => {
                    contactUsElement2.classList.remove('shake');
                }, 500);
            }, 2000); 
      
    </script>
<nav role="navigation" class="main-nav-wrap">
	<div class="mobilemenucompanylogo">
		<a class="companyslogoankers" href="<?php echo BASE_URL; ?>/index.php"><img src="<?php echo BASE_URL; ?>/assets/img/voila_studio_logo.svg" alt=""></a>
	</div>

	</button>

	<ul id="closenavbar" class="main-nav">


	<?php

				$get_menu = "SELECT * FROM menu where 1=1"  ;
				$get_menu_run = $conn->prepare($get_menu);
				$get_menu_run->execute();

				while($get_menu_rows = $get_menu_run->fetch(PDO::FETCH_ASSOC)){
					$menu = $get_menu_rows['id'];

					?>
					<!-- 1ST tab -->
					<li class="has-subnav">
								<?php //echo  $get_menu_rows['menu'] ; ?>

				<p href=""
				<?php
					if( $menu == 1 )
{
 ?>

class="has-subnav-link upperlinks1"

<?php
}
?>

<?php
if( $menu== 2 )
{
?>


class="has-subnav-link upperlinks2"

<?php
} ?>

<?php

if( $menu == 3 )
{
?>
class="has-subnav-link upperlinks3"

<?php } ?>

<?php
if( $menu == 4 )
{
?>

class="has-subnav-link upperlinks4"
<?php
}
?>

	?>




					<?php echo $get_menu_rows['menu']; ?></p>
		        	<ul class="main-dropdown subnav divc<?php echo $get_menu_rows['id']; ?>">
			<?php

						// $get_categories = '';


						if($get_menu_rows['id'] == 1){

							$get_categories = "SELECT * FROM male_ecomm_categories where status='p' order by serial asc "  ;

						}


						if($get_menu_rows['id'] == 2){

							$get_categories = "SELECT * FROM female_ecomm_categories where status='p' order by serial asc "  ;

						}


						if($get_menu_rows['id'] == 3){

							$get_categories = "SELECT * FROM kids_ecomm_categories where status='p'  order by serial asc "  ;

						}

						if($get_menu_rows['id'] == 4){

						$get_categories = "SELECT * FROM product_ecomm_categories where status='p'  order by serial asc "  ;

						}





						$get_categories_run = $conn->prepare($get_categories);
						$get_categories_run->execute();


						?>


							<?php

							while($get_categories_rows = $get_categories_run->fetch(PDO::FETCH_ASSOC)){

								$category_id = $get_categories_rows['id'];
								
							


								if($get_menu_rows['id'] == '1'){

									$get_link_sub_categories = "SELECT * FROM male_ecomm_subcategories where status='p' and category_id =  '$category_id' and status = 'p'  order by sub_category_name asc "  ;
									$count_nav=0;
								}

								// for women //

								if($get_menu_rows['id'] == '2'){

									$get_link_sub_categories = "SELECT * FROM female_ecomm_subcategories where status='p' and category_id =  '$category_id' and status = 'p' order by sub_category_name asc "  ;
									$count_nav=0;
								}
									if($get_menu_rows['id'] == '3'){

													$get_link_sub_categories = "SELECT * FROM kids_ecomm_subcategories where status='p' and category_id =  '$category_id'  and status = 'p' order by sub_category_name asc"  ;
													$count_nav=0;
											}


											if($get_menu_rows['id'] == '4'){

											$get_link_sub_categories = "SELECT * FROM product_ecomm_subcategories where status='p' and category_id =  '$category_id' and status = 'p' order by sub_category_name asc"  ;
											$count_nav=0;
										}


								$get_link_sub_categories_run = $conn->prepare($get_link_sub_categories);
								$get_link_sub_categories_run->execute();


								$get_link_sub_categories_rows = $get_link_sub_categories_run->fetch(PDO::FETCH_ASSOC);
								
								

								


								?>

								<?php

								if($get_link_sub_categories_rows['sub_category_name'] == $get_categories_rows['category_name'] ){

									//  for subactegory link
									if($get_menu_rows['id'] != '4'){
									    if(	$count_nav<=$get_categories_rows['sequence'])
									    {$count_nav=$get_categories_rows['sequence'];}
										
										//$seo_url = $get_categories_rows['seo_url'];
									$seo_url = $get_link_sub_categories_rows['seo_url'];
									
									
									?>
									<li class="has-subnav" data-nav="<?php if($get_categories_rows['sequence']!='') {echo $get_categories_rows['sequence'];} else{ echo(rand(1,3)); }?>">
									
										<!--<a  href="collection.php?menu_id=<?php echo $menu;?>&category_id=<?php echo $category_id;?>&sub_category_id=<?php echo $get_link_sub_categories_rows['id'];?>" class="has-subnav-link subnav-header color_header_<?php echo $menu; ?>"><?php echo $get_categories_rows['category_name']; ?></a>
										-->
										
										<a  href="<?php echo BASE_URL ?>/<?php echo $seo_url; ?>" class="has-subnav-link subnav-header color_header_<?php echo $menu; ?>"><?php echo $get_categories_rows['category_name']; ?></a>
									

										
									</li>


										<?php } if($get_menu_rows['id'] == '4'){
										if(	$count_nav<=$get_categories_rows['sequence'])
									    {$count_nav=$get_categories_rows['sequence'];}
										
											$seo_url  = $get_link_sub_categories_rows['seo_url'];
											//get_link_sub_categories_rows

												?>
												<li class="has-subnav" data-nav="<?php if($get_categories_rows['sequence']!='') {echo $get_categories_rows['sequence'];} else{ echo(rand(1,3)); }?>">
												<!-- <a  href="product_collection.php?menu_id=<?php echo $menu;?>&category_id=<?php echo $category_id;?>&sub_category_id=<?php echo $get_link_sub_categories_rows['id'];?>" class="has-subnav-link subnav-header color_header_<?php echo $menu; ?>"><?php echo $get_categories_rows['category_name']; ?></a>-->
												
												<a  href="<?php echo BASE_URL; ?>/<?php echo $seo_url; ?>" class="has-subnav-link subnav-header color_header_<?php echo $menu; ?>"><?php echo $get_categories_rows['category_name']; ?></a>
														
												  
												  
									</li>
												<?php } ?>

								<?php } ?>

								<?php

								if($get_link_sub_categories_rows['sub_category_name'] != $get_categories_rows['category_name'] ){
								
										//  for category link
									$seo_url = $get_link_sub_categories_rows['seo_url'];	
								?>
								<li class="has-subnav" data-nav="<?php if($get_categories_rows['sequence']!='') {echo $get_categories_rows['sequence'];} else{ echo(rand(1,3)); }?>">
									
									<!--<a href="<?php echo BASE_URL; ?>collection.php?menu_id=<?php echo $menu;?>&category_id=<?php echo $category_id;?>&sub_category_id=<?php echo $get_link_sub_categories_rows['id'];?>" class="has-subnav-link subnav-header color_header_<?php echo $menu; ?>"><?php echo $get_categories_rows['category_name']; ?></a>
									-->
									<a href="<?php echo BASE_URL; ?>/<?php echo $seo_url;?>" class="has-subnav-link subnav-header color_header_<?php echo $menu; ?>"><?php echo $get_categories_rows['category_name']; ?></a>
									
									
									<ul class="subnav">
										<?php

										// for men //

										if($get_menu_rows['id'] == '1'){

											$get_sub_categories = "SELECT * FROM male_ecomm_subcategories where status='p' and category_id =  '$category_id' and status = 'p'  order by sub_category_name asc"  ;

										}

										// for women //

										if($get_menu_rows['id'] == '2'){

											$get_sub_categories = "SELECT * FROM female_ecomm_subcategories where status='p' and category_id =  '$category_id' and status = 'p' order by sub_category_name asc "  ;

										}


										//  Kids & Products are Pending //

										if($get_menu_rows['id'] == '3'){

													$get_sub_categories = "SELECT * FROM kids_ecomm_subcategories where status='p' and category_id =  '$category_id'  and status = 'p' order by sub_category_name asc"  ;

										}


										if($get_menu_rows['id'] == '4'){

												$get_sub_categories = "SELECT * FROM product_ecomm_subcategories where status='p' and category_id =  '$category_id' and status = 'p' order by sub_category_name asc"  ;

										}

										//  echo $get_sub_categories;

										$get_sub_categories_run = $conn->prepare($get_sub_categories);
										$get_sub_categories_run->execute();


										while($get_sub_categories_rows = $get_sub_categories_run->fetch(PDO::FETCH_ASSOC)){

												$seo_url = $get_sub_categories_rows['seo_url'];
												$upcoming = $get_sub_categories_rows['upcoming'];
												
										?>


										<?php if($get_menu_rows['id'] != '4'){


											if($get_sub_categories_rows['sub_category_name'] != $get_categories_rows['category_name']){
											
									if(	$count_nav<=$get_categories_rows['sequence'])
									    {$count_nav=$get_categories_rows['sequence'];}
												?>
												
												<?php 
													
												$product_url = $get_sub_categories_rows['product_url'];
												if($product_url != null){
												?>
												
												<li><a href="<?php echo $product_url; ?>"><?php echo $get_sub_categories_rows['sub_category_name'];?>
												
												<?php  if($upcoming == 'p'){ ?>
												
												<div class="tooltip2"><img src="https://img.icons8.com/ios/50/info--v1.png" alt="tooltip" class="tool_img"  width="14px">
													<span class="tooltiptext color_change">coming soon</span>
												</div>

												<?php } ?>


											</a></li>


												<?php }else{
												?>
												
												<!--<li><a href="<?php echo BASE_URL; ?>/collection.php?menu_id=<?php echo $menu;?>&category_id=<?php echo $category_id;?>&sub_category_id=<?php echo $get_sub_categories_rows['id'];?>"><?php echo $get_sub_categories_rows['sub_category_name'];?></a></li>
												-->
												
												<li><a href="<?php echo BASE_URL; ?>/<?php echo $seo_url; ?>"><?php echo $get_sub_categories_rows['sub_category_name'];?>
												<?php  if($upcoming == 'p'){ ?>
												<div class="tooltip2"><img src="https://img.icons8.com/ios/50/info--v1.png" alt="tooltip" class="tool_img"  width="14px">
													<span class="tooltiptext color_change">coming soon</span>
												</div><?php } ?></a></li>
										
												<?php } ?>	

											<?php }

										}

										?>


										<?php if($get_menu_rows['id'] == '4'){


											if($get_sub_categories_rows['sub_category_name'] != $get_categories_rows['category_name']){
										if(	$count_nav<=$get_categories_rows['sequence'])
									    {$count_nav=$get_categories_rows['sequence'];}
										$seo_url  = $get_sub_categories_rows['seo_url'];
										$upcoming = $get_sub_categories_rows['upcoming'];
										
												?>
												
												<!--<li><a href="product_collection.php?menu_id=<?php echo $menu;?>&category_id=<?php echo $category_id;?>&sub_category_id=<?php echo $get_sub_categories_rows['id'];?>"><?php echo $get_sub_categories_rows['sub_category_name'];?></a></li>
												-->
												<a  href="<?php echo BASE_URL; ?>/<?php echo $seo_url; ?>" ><?php echo $get_sub_categories_rows['sub_category_name']; ?>
												<?php  if($upcoming == 'p'){ ?>
												<div class="tooltip2">
													<img src="https://img.icons8.com/ios/50/info--v1.png" alt="tooltip" style="width:10px !important" class"tool_img">
													<span class="tooltiptext color_change">coming soon</span>
												</div>
												<?php } ?>
											</a>
												
												<?php } ?>

											<?php } ?>



											<?php } ?>

									</ul>

								</li>
								<?php } ?>

								<?php }


								?>

								<li class="nav-col" data-col="1"><ul class="nav"></ul></li>
								<li style="background: #d3d3d30d;" class="nav-col" data-col="2"><ul class="nav"></ul></li>

								<?php if($count_nav>=3){ ?>
								<li class="nav-col" data-col="3"><ul class="nav"></ul></li>
								<?php } if($count_nav>=4){ ?>
								<li class="nav-col" data-col="4"><ul class="nav"></ul></li>
								<?php } if($count_nav>=5){ ?>
								<li class="nav-col" data-col="5"><ul class="nav"></ul></li>
								<?php } ?>


							</ul>


						</li>



					<?php }

					//echo ""

					?>




<li id="morehidenonmob" class="has-subnav">
	<p class="has-subnav-link">Calender</p>

	<ul class="main-dropdown subnav mores_calender">
		<ul class="subnav moreoptiononheader_calender">
			<li class="has-subnav" >
				<a class="has-subnav-link subnav-header color_header_5" href="<?php echo BASE_URL; ?>/booking_calender.php">Model Photoshoot</a>
				<ul class="subnav">
					<li>
						<a style="padding-left: 10px !important;" href="<?php echo BASE_URL; ?>/booking_calender.php?menu_filter=1">Men</a>
					</li>

					<li>
					<a style="padding-left: 10px !important;" href="<?php echo BASE_URL; ?>/booking_calender.php?menu_filter=2">Women</a>
					</li>
					<li>
					<a style="padding-left: 10px !important;" href="<?php echo BASE_URL; ?>/booking_calender.php?menu_filter=3">Kids</a>
					</li>
				</ul>					
			</li>
			<li>
				<a class="has-subnav-link subnav-header color_header_5" href="<?php echo BASE_URL; ?>/booking_calender_product.php">Product Photoshoot</a>
			</li>
		</ul>
	</ul>
</li>


<li id="morehidenonmob" class="has-subnav">
	<p class="has-subnav-link">More</p>

	<ul class="main-dropdown subnav mores_calender_1">
		<ul class="subnav moreoptiononheader_calender_1">
		<li class="has-subnav" >
					<a class="has-subnav-link subnav-header color_header_6" href="<?php echo BASE_URL; ?>/voilagram.php" target="_blank">Social</a>
				</li>
			<li>
				<a class="has-subnav-link subnav-header color_header_6" href="<?php echo BASE_URL; ?>/guideline.php">Shoot guidelines</a>
			</li>
			<li class="has-subnav" >
					<a class="has-subnav-link subnav-header color_header_6" href="<?php echo BASE_URL; ?>/become_partner.php">Become our partner</a>
				</li>

			<li class="has-subnav workwithusqwer" >
				<a class="has-subnav-link subnav-header color_header_6">Work with us</a>
				<ul class="subnav">
					<li>
						<a style="padding-left: 10px !important;" href="<?php echo BASE_URL; ?>/studio_model.php">Model</a>
					</li>

					<li>
						<a style="padding-left: 10px !important;" href="<?php echo BASE_URL; ?>/photographer.php">Photographer</a>
					</li>


					<li>
						<a style="padding-left: 10px !important;" href="<?php echo BASE_URL; ?>/makeupartist.php">Makeup artist</a>
					</li>


					<li>
						<a style="padding-left: 10px !important;" href="<?php echo BASE_URL; ?>/stylish.php">Stylist</a>
					</li>


					<li>
						<a style="padding-left: 10px !important;" href="<?php echo BASE_URL; ?>/editor.php">Editors</a>
					</li>
					
					
					<!-- <li>
						<a style="padding-left: 10px !important;" href=""><?php echo $country_name; ?></a>
					</li> -->
					
					
					<!-- <li>
						<a style="padding-left: 10px !important;" href=""><?php echo $country_type; ?></a>
					</li>
					 -->
					
					
					
				</ul>
			</li>
			
			
		</ul>
		
	</ul>
</li>



<script>
    if(screen.width>=600){
        document.getElementById("mob").style.display="none";
        document.getElementById("mob1").style.display="none";
    }
</script>


<script>
	$('body').click(function() {
  if (!$(this.target).is('.seresult')) {
    $(".seUL").hide();
  }
});




$(document).ready(function(){
  $("screen").click(function(){
    $(".dropdown_prof-content").removeClass("showw");
  });
});

</script>
<!--</span>-->
<!-- social icon and more end -->

				</ul>

	<div class="searchandicons">

		<b class="searchresultsanddynamo">
		<?php
			include ('search_new2.php');
		?>

		    <div id="search_r_cont">
			</div>

		<img class="searchicononsearchbar" src="<?php echo BASE_URL; ?>/assets/img/search.png" alt="switch button">
		
		</b>

<!-- toggle icon to old and new website -->
<div style="width:18%; text-align:center; padding:2%" class="switch_website_div">
<!-- <p style="font-size:11px">Switch To</p> -->
<a href="https://sub.voilastudio.co.in/index2.php" class="switch_to">
	<!-- <p class="profileuserq ">Switch To</p> -->
    <img src="<?php echo BASE_URL; ?>/NEW.png" alt="old and new website toggle" style="width:100%; padding:1%" class="switch_website">
</a>	
</div>
	<b class="socialiconsdynamo">
		<!-- mobile switch  -->
					<div class="mobile_switch_button">
						<a href="https://sub.voilastudio.co.in/" style="width:100%">
							<!-- <p class="profileuserq ">switch to</p> -->
							<img src="<?php echo BASE_URL; ?>/mobile_switch.svg" alt="old and new website toggle" style="width:38px"  class="mobile_switch_button">
						</a>
					</div>
					

			<b class="mobilesearchbardyno">
				<img id="myBtn123" class="searchmobileimgqw" src="<?php echo BASE_URL; ?>/assets/img/search.png" alt="">
				<div id="myModal123" class="modalsearch">
					<div class="modal-contentsearch">
						<span class="closemobilemenusearch">&times;</span>
						<?php
						include ('search_new2mobile.php');
						?>
						<div id="search_r_contmob">
						</div>
					</div>
				</div>

			</b>

		    <?php

		            if(isset($_SESSION['user_id'])){
						
								$user_id = $_SESSION['user_id'];
							    $get_user_email  = "select * from  register_users where user_id = '$user_id' " ;
								$get_user_email_run = $conn->prepare($get_user_email);
								$get_user_email_run->execute();
								$get_user_email_rows = $get_user_email_run->fetch(PDO::FETCH_ASSOC);
								
								$first_name = $get_user_email_rows['first_name'];
								
							
		    ?>


				<div class="mega_menu_drops" id="my_mega_menu_drops">
						<img id="social_icons_imgsdyna"  src="https://img.icons8.com/ios/50/gender-neutral-user--v1.png" alt="voila e-Commerce photography">
						<p class="profileuserq">Account</p>
				</div>
	<div class="mega_menu_drops-content">
	
			<p class="wecomemessage" ><strong>Welcome!</strong> &nbsp;<span class="username_fit"><?php echo $first_name; ?></span> <br>
				</p>
							<hr id="lineindicates">
						<a class="tabsinprofiles" href="profile.php">Profile</a>
  						<a class="tabsinprofiles" href="logout.php">Logout</a>
	</div>
  

<style>
	.hover .mores_calender {
   		 width: 43vw !important;
	}
	.hover .mores {
   		 width: 55vw !important;
	}
	.mega_menu_drops {
   		margin-right: 25px;
	}

	.mega_menu_drops-content {
    line-height: 8px;
	}
	/* .searchandicons {
		width: 42%;
	} */
	b.searchresultsanddynamo {
		position: relative;
		width: 100%;
		margin-right: 20px;
	}
	b.socialiconsdynamo {
		width: 95px !important;
		display: contents;
	}
	.dropdown_prof {
		position: relative;
		display: flex;
		width: 130px !important;
		justify-content: space-between !important;
	}
	.js .main-nav {
		margin-right: 3vw;
	}
	.dropdown_prof-content {
		right: -20px !important;
		top: 53px !important;
	}
	.dropdown_prof1234 {
    margin-right: 30px;
}
	@media screen and (max-width: 650px){

	.searchandicons {
		top: 0px;
		right: 25px;
	}
	b.socialiconsdynamo {
		margin-top: 0px !important;
		width: 75px;
	}

	button.main-nav-trigger {
		position: relative;
		top: 2px;
		left: 0;
		border: 0;
		height: 44px;
		background: white;
		}
	.main-nav-trigger.active {
		background: none;
		padding: 0;
		width: auto;
		height: 40px;
		position: absolute;
		/* top: 2px !important; */
		border: 0;
		left: 10px;
		}
	button#myBtn {
		background: none;
		border: 0;
		width: 36px;
	}

	.searchandicons {
		width: 35% !important;
		top: 0px;
		right: 5px !important;
	}
	.dropdown_prof {
		margin-left: 0;
		width: 45px !important;

	}
	.dropdown_prof-content {
		right: -13px !important;
		top: 40px !important;
		width: 200px !important;
	}
	.main-nav:before {
		left: 22px;
	}
	img#social_icons_imgsdyna {
    margin-right: -45px !important;
}
b.mobilesearchbardyno {
    margin-right: -20px;
}


	}

	a.logoutbtnq {
	font-size: 10px;
}

.send_otp_btn.clicked {
  border: green !important; /* Change to any color you want */
}
.switch_website
{

}
.switch_to{
	padding:0%;
	margin:0%;
	font-size:11px;
}

@media only screen and (max-width: 600px) {
	.switch_website{
		display:none;
	}
}



</style>
		    <?php
		            }else{

		    ?>
			 <div class="mega_menu_drops" id="my_mega_menu_drops">
		            <img id="social_icons_imgsdyna"  src="https://img.icons8.com/ios/50/gender-neutral-user--v1.png" alt="voila e-Commerce photography">
					<p class="profileuserq">Profile</p>
					</div>
					</span>

					<div class="mega_menu_drops-content">
						<p class="wecomemessage"><strong>Welcome </strong><br>
							To access account and manage orders</p>
						<p class="signupsigninbtn" onclick="openFormForSignIn()">LOGIN/SIGNUP</p>
						<hr id="lineindicates">
					


  </div>


		    <?php }

		    ?>




			<span class="gridwithnames">
			<!-- <a class="paymentbaglinksdyna" href="paymentpagenew.php"><img src="<?php echo BASE_URL; ?>/assets/img/bag.png" alt="voila e-Commerce photography">
            <input type="number" min="1"  id= "total_cart_items_modelsen" style="display:none"; disabled> -->
				 <div class="tooltip2">
				 <a class="paymentbaglinksdyna"> <img src="<?php echo BASE_URL; ?>/assets/img/bag.png" alt="voila e-Commerce photography">
				 <p class="profileuserq">Bag</p></a>

				 					<span class="tooltiptext color_change">coming soon</span>
				</div>
					</span>

			</b>
	</div>

</nav>

<script>
  $(document).ready(function() {
    $(".mega_menu_drops").click(function() {
      $(this).next(".mega_menu_drops-content").toggle();
    });

    $(document).click(function(event) {
      if (!$(event.target).closest('.mega_menu_drops').length) {
        $(".mega_menu_drops-content").hide();
      }
    });
  });
</script>
<style>

.mega_menu_drops {
	position: relative;
    display: grid;
    place-items: center;
    cursor: pointer;
    }

    .mega_menu_drops-content {
		display: none;
		position: absolute;
		box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
		z-index: 1;
		top: 50px;
    	right: -1px !important;
		color: black;
		font-size: 12px;
		padding: 15px;
		font-weight: 400;
		background: white;
		width: 250px;
		border-radius:8px
    }

    .mega_menu_drops-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .mega_menu_drops-content a:hover {
      background-color: #f1f1f1;
    }
    input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button,  {
  -webkit-appearance: none;
  margin: 0;
}
	p.wecomemessage {
    padding-left: 5px;
}
	/* span.gridwithnames {
    position: relative;
    display: grid;
    place-items: center;
	cursor: pointer;
	} */
	p.profileuserq {
    margin: 0;
    font-size: 11px;
    text-align: center;
    font-weight: 100;
	padding-top: 2px;
}
.dropbtn_prof {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}



.dropdown_prof {
  position: relative;
  display: inline-block;
  justify-content: end !important;

}


.dropdown_prof-content {
  display: none;
  position: absolute;
    background-color: #ffffff;
    box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
    z-index: 1;
    right: 20px;
    top: 61px;
    padding: 10px;
    font-size: 12px;
    font-weight: 500;
	margin-top: -4px;
	width: 250px;

}
span.username_fit {
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
}
p.wecomemessage {
    padding-left: 5px;
    padding-top: 14px;
    padding-bottom: 14px;
    margin: 0;
	line-height: 20px;
}

.dropdown_prof-content a {
  color: black;
  padding: 6px 16px;
  text-decoration: none;
  display: block;
  font-size: 13px;
  padding-left: 5px !important;

}

p.signupsigninbtn {
    padding: 10px 20px;
    /* border: 1px solid lightgrey; */
    text-align: center;
    color: #fff !important;
    font-weight: 600;
    letter-spacing: 1px;
	cursor: pointer;
	background: linear-gradient(93.41deg, #F93C3C 9.59%, #AE03FF 113.14%);
	border-radius:8px;
	border:none;
}
.signupsigninbtn:hover {
	background-color: #f8f8f8;
}
hr#lineindicates {
    border-top: 1px solid #f3f3f3;
    width: 96%;
    margin: 0 auto;

}

.dropdown_prof a:hover {background-color: #ddd;}

.showw {
	display: block;
}

@media screen and (max-width: 600px) {
	.mega_menu_drops {
   	 margin-top: 0 !important;
}

}



</style>


<script>
function myFunctionprofile_menu() {
  document.getElementById("mydropdown_prof").classList.toggle("showw");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn_prof')) {
    var dropdown_profs = document.getElementsByClassName("dropdown_prof-content");
    var i;
    for (i = 0; i < dropdown_profs.length; i++) {
      var opendropdown_prof = dropdown_profs[i];
      if (opendropdown_prof.classList.contains('show')) {
        opendropdown_prof.classList.remove('show');
      }
    }
  }
}
</script>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/enquire.js/2.1.2/enquire.min.js'></script>
<script  src="<?php echo BASE_URL; ?>/assets/js/mega_menu.js"></script>



    <!-- /************ Sign up form ******************/ -->
    <section class="popup" id="popupForm">
		<div class="container_sign">
		  <div class="menus_sign signupformlod">
			<img class="cross modalcloseforcategoryimg" onclick="closeForm()" src="https://img.icons8.com/fluency-systems-regular/48/multiply.png" alt="">

			<p id="demo">Sign Up</p>

		<!--	<form  id= "signup_form"  method= "POST" action="<?php echo $_SERVER['PHP_SELF']; ?>"> -->


			 <!-- <div class="inputField">
				<label class="name">First name</label><br>
				<input class="input" name = "first_name" type="text" required>
			  </div>


			  <div class="inputField">
				<label class="name">Last name</label><br>
				<input class="input" name = "last_name" type="text"  required>
			  </div>

            -->
			<div class="inputField gradient">
			<input class="firstnameinput" type="text" id = "header_first_name" placeholder="First Name">
			<p class="errormessageabovebox" id="header_first_name_err" ></p>
			</div>
			<div class="inputField gradient">
			<input class="lastnameinput" type="text" id = "header_last_name"  placeholder="Last Name">
			<p class="errormessageabovebox" id="header_last_name_err" ></p>
			
			</div>
			<div class="inputField gradient">
			<input class="input" name = "header_email"  id = "header_email"   type="email" placeholder="Email" style="margin-left: -15px;"  required>
			<p class="errormessageabovebox" id="header_email_err" ></p>
		
			</div>

			<div class="inputField gradient">
			  <div class="mobileInput">
				  <input class="input"  type="tel"  name = "header_mobile_no"  id = "header_mobile_no"  maxlength="10" placeholder="Mobile No." style="margin-left: -15px;" required >
				  <p class="errormessageabovebox" id="header_mobile_no_err" ></p>
				 <!-- <p class="showpass " id="send_otp">Send otp</p>-->
				  
				  <button class="send_otp_btn" type="button" onclick = "get_otp()" >Send OTP</button>
				  <input class="input"  type="hidden"  name = "mobile_otp_value"  id = "mobile_otp_value" required >
								
				  

			  </div>
			</div>


			<div class="inputField gradient" id = "otp_value_section">
			  <div class="mobileInput" >
				  <input class="input"  type="number"  name = "header_mobile_otp"  id = "header_mobile_otp"  maxlength="6" placeholder="OTP" style="margin-left: -15px;" required >
				  <p class="errormessageabovebox" id="header_mobile_no_err"></p>
				<!--  <p class="showpass " id="verify_otp">verify</p>-->
				  <button class="verify_otp_btn" type="button" onclick = "verify_otp()" >Verify OTP</button>
					
			  </div>
			</div>


			<div class="inputField gradient">
			  <div class="mobileInput">
				<input class="input" type="password" name = "header_password" id = "header_password" value="" placeholder="Password" style="margin-left: -15px;"  required>
				 <p class="errormessageabovebox" id="header_signup_password_err" ></p>
				<p onclick="visiblesignup()" class="showpass" id="signupshowhide">show</p>
			  </div>
			</div>

			<div class="inputField gradient">
			  <div class="mobileInput">
				<input class="input" type="password" name = "header_conf_password" id = "header_password_confirm" value="" placeholder="Confirm Password" style="margin-left: -15px;"  required>
				 <p style="font-size:14px;color:red" id="header_signup_conf_password_err" ></p>
				<p onclick="confirmpassowrd()" class="showpass" id="confirmshowhide">show</p>
			  </div>
			</div>

			<div class="privacyline">
			<input class="checkboxpolicy" type="checkbox" id = "header_privacy_policy_agreement" >
			<label class="labelforcheckbox" for="">I Agree with <span class="pinkish">privacy</span> and <span class="pinkish">policy</span></label>
			</div>

			<input class="input" type="hidden" name = "register_form">

			<div class="signup_submit_division">
			
			  <button onclick="submit_signup_header()" class="signup_submit" >Sign up</button>
			
			</div>
				
				<p style="font-size:14px;color:red;margin-top:-101px ; margin-bottom:5px" id="header_signup_err" ></p>
	
			<button onclick="closeBothSignup()" class="signup_extra_submit">Already have an account? Log In</button>


			

		  </div>
		</div>
  </section>
<!-- // send otp change color -->
<script>
function get_otp() {
  // Change the class of the button to apply the clicked style
  var button = document.querySelector('.send_otp_btn');
  button.classList.add('clicked'); // Removed the dot before 'clicked'
}
</script>

<!-- // send otp change color end-->


  <section class="popup" id="popupFormSignIn">
	<div class="container_sign">
	  <div class="menus_sign heighting">
	  <img class="cross modalcloseforcategoryimg" onclick="closeFormSignIn()" src="https://img.icons8.com/fluency-systems-regular/48/multiply.png" alt="cross"/>
	  <p id="demo">Sign in</p>

	 <!-- <form id= "login_form"  method= "POST" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
		 -->
	  <div class="inputField gradient">
		  <!-- <label class="name">Mobile no</label><br> -->
		  <div class="mobileInput">
          <img class="customericon" width="18" height="18" src="https://img.icons8.com/material-rounded/24/gender-neutral-user.png" alt="gender-neutral-user"/>
			  <input class="input marginlefttwenty" type="tel" id = "header_login_mobile_no" name = "header_login_mobile_no" maxlength="10" autocomplete="off" placeholder="Mobile No."  required >
			      <p class="errormessageabovebox" id="header_login_mobile_no_err" ></p>
		  </div>
	  </div>

	  <div class="inputField gradient">
		  <!-- <label class="name">Password</label><br> -->
		  <div class="mobileInput">
          <img class="customericon" width="18" height="18" src="https://img.icons8.com/material-rounded/24/lock--v1.png" alt="lock--v1"/>
<input class="input marginlefttwenty" id="header_login_password" type="password" name = "header_login_password" value="" autocomplete="off" placeholder="Password" required >
			 <p class="errormessageabovebox" id="header_login_password_err" ></p>
			 <p onclick="visiblelogin()" class="showpass" id="loginshowhide">show</p>
		  </div>
	  </div>
	  <div class="privacyline">
			<input class="checkboxpolicy" type="checkbox">
			<label class="labelforcheckbox" for="">Remember me</label>
			</div>



		   <button onclick="submit_login_header()"  name="submit_login_header"  class="signup_submit loging" value="Sign in">Sign in</button>
		   <p id="header_login_signin_err"> </p>


	  <!--</form>
	   -->

	  <button onclick="closeBothSignin()" class="signup_extra_submit">Don't have an account? Register</button>

	  </div>
	</div>
  </section>
  <!--<script src="./assets/signup_login.js"></script>
  -->

  <script>




 $("#otp_value_section").hide();


function get_otp(){

	var mobile_no = $('#header_mobile_no').val();
	
	var email = $('#header_email').val();
	
	
	if(!$('#header_mobile_no').val().match('[0-9]{10}'))  {
               var  get_user_mobile_count_err = 'Please enter ten digit mobile no';
				$("#header_signup_err").html(get_user_mobile_count_err);
		
                return;
				
	}else{
	
		$("#header_signup_err").html('');
		
	}	
	
	
	  var validRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		var email_val;
		
        if (email.match(validRegex)) {

            email_val = 'true';
            $("#email_err").html('');

        } else {

            email_val = 'false';
            email_err = "Please Enter Valid Email Address";
            $("#email_err").html(email_err);

        }


	if(mobile_no.length == 10  && email_val == 'true'){
		
			$.ajax({

			type: "POST",

            url: 'get_mobile_otp.php',

            data: {

				mobile_no : mobile_no,
				email_id:email,

				datatype:true

            },

			cache: false,

            //dataType: "JSON",

            success: function (data) {


			        response = JSON.parse(data);
				
                    var OTP_rcv = response.OTP;
					
					var mobile_no_err = response.mobile_no_err;
					
					var email_id_err = response.email_id_err;
					

					if(mobile_no_err == true){
					
							$("#otp_value_section").hide();
							
							var get_user_mobile_count_err = 'mobile number is already exist';

                            $("#header_signup_err").html(get_user_mobile_count_err);
							
							
					}else if(email_id_err == true){
						
							$("#otp_value_section").hide();
							
							var get_user_mobile_count_err = 'Email ID is already exist';
								
							//	alert(get_user_mobile_count_err);
							
                            $("#header_email_err").html(get_user_mobile_count_err);
							
						
						
					}else{
					
					
							$("#mobile_otp_value").val(OTP_rcv);
						
							$("#otp_value_section").show(500);
						
						
						
					}
					
					
					
				/*	if( (OTP_rcv.toString() == 'undefined' )  ){
					{
								
								alert("mobile number is already registered");
					}
				*/		
				

					//$("#mobile_otp_value").val(OTP_rcv);


            },

			error: function(jqXHR, textStatus, errorThrown){

				  alert('error');

			  }

        });

			
	
	}else{

			
			
		get_user_mobile_count_err = 'Please enter ten digit mobile no';
		$("#header_signup_err").html(get_user_mobile_count_err);

	}



}

function verify_otp(){

	var mobile_otp = $('#mobile_otp_value').val();
	var header_mobile_otp = $('#header_mobile_otp').val();	
	
	var mobile_no = $('#header_mobile_no').val();
	
	var get_user_mobile_count_err;
	
	if(mobile_otp == header_mobile_otp){
		
		//get_user_mobile_count_err = ' mobile no is verified successfully ';
		//$("#header_signup_err").html(get_user_mobile_count_err);
			

		$.ajax({

			type: "POST",

            url: 'verfiy_mobile_otp.php',

            data: {

				mobile_no : mobile_no,
				mobile_otp : mobile_otp,
			    datatype:true
           },

			cache: false,

            //dataType: "JSON",

            success: function (data) {

					//alert("successs");

			        response = JSON.parse(data);
				
                    //var OTP_rcv = response.OTP;
					
					//var mobile_no_err = response.mobile_no_err;
					
					var verfiy_success = response.verfiy_success;
					
				
					
					if(verfiy_success =='true' ){
						
						get_user_mobile_count_err = ' mobile no is verified successfully ';
						
					}else{

						 get_user_mobile_count_err = 'Please Send OTP Again ';
				
					}	

					$("#header_signup_err").html(get_user_mobile_count_err);
							
					
			


            },

			error: function(jqXHR, textStatus, errorThrown){

				  alert('error');

			  }

        });

		
			
		
	
	}else{
				
		get_user_mobile_count_err = 'Please enter correct OTP Or Send OTP again ';
		$("#header_signup_err").html(get_user_mobile_count_err);
		
	
	}
		

}





  function openForm() {

	  document.getElementById("popupForm").style.display = "block";

  }


  function closeForm() {

	  document.getElementById("popupForm").style.display = "none";

   }


    function openFormForSignIn() {

	  //  open login form //
		  document.getElementById("popupFormSignIn").style.display = "block";
		  document.getElementById("mydropdown_prof").style.display = "none";


	}




	function closeFormSignIn() {

	  document.getElementById("popupFormSignIn").style.display = "none";

	}

	function closeBothSignup() {
	  document.getElementById("popupFormSignIn").style.display = "block";
	  document.getElementById("popupForm").style.display = "none";

	   var element = document.getElementById("date123");
	   if(element.style.display=="block")
	   {element.style.display="none";
	   }
	   else{element.style.display="block";}
	   element.classList.toggle("mystyle");
	}

	function closeBothSignin() {
	  document.getElementById("popupFormSignIn").style.display = "none";
	  document.getElementById("popupForm").style.display = "block";


	}

	function visiblesignup() {
	  var vx = document.getElementById("header_password");
	  var qwe = document.getElementById("signupshowhide");
	  if (vx.type === "password" && qwe.innerHTML == "show") {
		vx.type = "text";
		qwe.innerHTML = "hide"
	  }
	   else if (vx.type === "text" && qwe.innerHTML == "hide") {
		vx.type = "password";
		qwe.innerHTML = "show";
	  }
	}

	function confirmpassowrd() {
	  var vx = document.getElementById("header_password_confirm");
	  var qwe = document.getElementById("confirmshowhide");
	  if (vx.type === "password" && qwe.innerHTML == "show") {
		vx.type = "text";
		qwe.innerHTML = "hide"
	  }
	   else if (vx.type === "text" && qwe.innerHTML == "hide") {
		vx.type = "password";
		qwe.innerHTML = "show";
	  }
	}

	function visiblelogin() { 
	  var vx = document.getElementById("header_login_password");
	  var qwe = document.getElementById("loginshowhide");
	  if (vx.type === "password" && qwe.innerHTML == "show") {
		vx.type = "text";
		qwe.innerHTML = "hide"
	  }
	   else if (vx.type === "text" && qwe.innerHTML == "hide") {
		vx.type = "password";
		qwe.innerHTML = "show";
	  }
	}


    function submit_login_header(){



        var login_mobile_no = $('#header_login_mobile_no').val();
        var login_password = $('#header_login_password').val();

        var login_mobile_no_val = 'true';var login_mobile_no_err;
        var login_password_val = 'true';var login_password_err;




        if(login_mobile_no.length == 10){

                 login_mobile_no_val = 'true';
                    //  $("#login_signin_err").html();
                   $("#header_login_mobile_no_err").html('');

           }else{
                login_mobile_no_val = 'false';
                login_mobile_no_err = "Please enter valid mobile number";
                // $("#login_mobile_no_err").html(login_mobile_no_err);
              //  $("#login_signin_err").html(login_mobile_no_err);
                $("#header_login_mobile_no_err").html(login_mobile_no_err);
           }



        if(login_password.length > 0){

            login_password_val = 'true';
              //$("#login_signin_err").html();
            $("#header_login_password_err").html('');
        }else{

            login_password_err = "Please enter password";
            //   $("#login_password_err").html(login_password_err);
            // $("#login_signin_err").html(login_password_err);
            login_password_val = 'false';
            $("#header_login_password_err").html(login_password_err);

        }





    if( (login_mobile_no_val == 'true') && (login_password_val == 'true') ){

			
        	                    $.ajax({

                                        type: "POST",

                                        url: 'https://sub.voilastudio.co.in/submit_login_header.php',

                                        data: {
                                            loginmobileno:login_mobile_no,
                                            loginpassword:login_password,
                                            data_values:true

                                        },

                                        cache: false,

                                        //dataType: "JSON",

                                        success: function (data) {



                                            response = JSON.parse(data);
									

                                            var session_active = response.session_active;
                                            var userid_ERR_MSG = response.userid_ERR_MSG;



                                            var same_photoshoot_date = $("#available_shoot_date").html();



                                            if(session_active == 'true' ){

                                                 window.location.href = "https://sub.voilastudio.co.in/index2.php";


                                            }else{

                                                 $("#header_login_signin_err").text("Please Enter Valid Credentials");


                                            }


                                        },

                                        error: function(jqXHR, textStatus, errorThrown){

                                              alert('error');

                                          }

                                    });










    }else{

        //alert("Please enter Valid Credentials");
        $("#header_login_signin_err").html("Please enter Valid Credentials");
        $("#single_book_now_button").removeAttr("href");

    }








}



    function submit_signup_header(){


	
	var header_first_name = $('#header_first_name').val();

	var header_last_name = $('#header_last_name').val();


	var email = $('#header_email').val();


    var mobile_no = $('#header_mobile_no').val();


    var header_password = $('#header_password').val();
	
	var header_password_confirm = $('#header_password_confirm').val();
	




    var email_val = 'true';
    var email_err;

    var mobile_no_val = 'true';
    var mobile_no_err ;

    var signup_password_val = 'true';
    var signup_password_err;
	
	
	
	var filter_first_name;
	
	    if(header_first_name.length > 0){
			


				var firstnameformat = /^[a-zA-Z]+$/;
			   
					if( header_first_name.match(firstnameformat)){

					
					filter_first_name = 'true';
					$("#header_first_name_err").html('');

				}else{

					
					filter_first_name = 'false';
					 
					$("#header_first_name_err").html('Enter correct first name');

				}

		}else{

			filter_first_name = 'false';
			$("#header_first_name_err").html('Enter correct first name');

		}

	
	

	
	
	var filter_last_name;
	
	    if(header_last_name.length > 0){


				var firstnameformat = /^[a-zA-Z]+$/;
			   
					if( header_last_name.match(firstnameformat)){

					
					filter_last_name = 'true';
					$("#header_last_name_err").html('');

				}else{

					
					filter_last_name = 'false';
					 
					$("#header_last_name_err").html('Enter correct last name');

				}

		}else{

			filter_last_name = 'false';
			$("#header_last_name_err").html('Enter correct last name');

		}



	var validRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	

    if (email.match(validRegex)) {

        email_val = 'true';
        $("#header_email_err").html('');

	}else{

        email_val = 'false';
        email_err = "Please enter valid email address";
        $("#header_email_err").html(email_err);

	}
	



    if(mobile_no.length == 10){

            mobile_no_val = 'true';
            $("#header_mobile_no_err").html('');

    }else{

            mobile_no_val = 'false';
            mobile_no_err = "Please enter valid mobile number";
            $("#header_mobile_no_err").html(mobile_no_err);

    }
	



    if(header_password.length > 0){

        signup_password_val = 'true';

        $("#header_signup_password_err").html('');

    }else{


        signup_password_err = "Please enter password";

        $("#header_signup_password_err").html(signup_password_err);

		signup_password_val = 'false';


    }
	
	if((document.getElementById("header_privacy_policy_agreement").checked  == true )){


	//alert('header_privacy_policy_agreement');
	
	var mobile_otp = $('#mobile_otp_value').val();
	var header_mobile_otp = $('#header_mobile_otp').val();	
	
	
	
		if(header_password === header_password_confirm) {

	
			
		
			if((mobile_otp == header_mobile_otp) && (mobile_otp.length > 0 ) ){


				if((email_val == 'true') && (mobile_no_val == 'true') && (signup_password_val == 'true') && (filter_first_name ==  'true') && (filter_last_name ==  'true') ){
		

					alert("ajax calling to sign up header");
		

					$.ajax({



                                        type: "POST",

                                        url: 'https://sub.voilastudio.co.in/submit_signup_header.php',


                                        data: {
											firstname:header_first_name,
											lastname:header_last_name,
										    emailid:email,
                                            mobileno:mobile_no,
                                            signuppassword:header_password,
											mobile_otp:mobile_otp,
											data_values:true


                                        },


                                        cache: false,

                                         //dataType: "JSON",


                                        success: function (data) {


											//alert("after ajax");

											
                                            response = JSON.parse(data);

												
												
												

											var mobile_verify_ERR_MSG = response.mobile_verify_ERR_MSG;
											
											//alert('after vrification');
											
											
											//alert(mobile_verify_ERR_MSG);
	
	
											if(mobile_verify_ERR_MSG == 'false'){
	
	
											//alert("mobile verification is okay");
											
											//alert("chelkcing other parmenters");

                                            var session_active = response.session_active;

											//alert(session_active);
											

                                            var userid_ERR_MSG = response.userid_ERR_MSG;

											//alert(userid_ERR_MSG);
											

                                            var get_user_mobile_count_err = response.get_user_mobile_count_err;

											//alert(get_user_mobile_count_err);

                                            var get_user_email_count_err = response.get_user_email_count_err;

											//alert(get_user_email_count_err);

                                            var shoot_detail_id = response.shoot_details_id;
				

											//alert("session_active")	


												if(session_active == 'true' ){
												
												//alert("session is active");
		
												//alert("redirect to index page");
                                                    
													window.location.href = "https://sub.voilastudio.co.in/index2.php?welcome=signup";

												// mail need to send after landing  index page  // 
												 

												}else{

												
												//alert("session is not  active");
		


													if(userid_ERR_MSG == 'true') {


														userid_ERR_MSG = 'user id already exist';


														$("#header_signup_err").html(userid_ERR_MSG);


													}else{


														if(get_user_mobile_count_err == 'true' ){

															get_user_mobile_count_err = 'mobile number is already exist';

															 $("#header_signup_err").html(get_user_mobile_count_err);


														}


															if(get_user_email_count_err == 'true' ){


																get_user_email_count_err = 'email is already exist';


																 $("#header_signup_err").html(get_user_email_count_err);



															}



													}

												}
												
											}else{
											
											
										//	alert("mobile verification is not  okay");
											
													
												 $("#header_mobile_no_err").html('Please verify OTP Or Send OTP Aagin');	
											
											}

                                        },
                                        error: function(jqXHR, textStatus, errorThrown){
                                                alert('error');



                                          }


                                    });




				}else{


					$("#header_signup_err").html("Please fill signup form properly");

				
				}
	
			}else{

				//get_user_mobile_count_err = 'Please Verify Mobile No';
				$("#header_mobile_no_err").html('Please Verify Mobile No');

			}	
		
	
	
		}else{
				
				//alert("Please enter same password ");
				$("#header_signup_err").html("Please enter same password");
				
				
		}
		
	

	}else{

			
				
			
		$("#header_signup_err").html("Please Accept Terms & Conditions");


	}	

}
</script>



<b class="hello"></b>
<div id="menuBtn" class="menu-btn">
	<hr class="lineicons">
	<hr class="lineicons">
	<hr class="lineicons">
 </div>


   <div class="side-bar-mobile-menu">

     <header>
     <div class="close-btn">
	 <img loading="lazy" src="https://img.icons8.com/fluency-systems-regular/48/multiply.png" alt="">     
	</div>
  
        </header>

     <div class="menu">

	 <img class="banner_on_menu" src="<?php echo BASE_URL; ?>/assets/img/mega_menu_banner/upper_banner.webp" alt="banner">
	 
        <div class="mega_menu_items">
		
			<a class="sub-btn">Men<img class="dropdown" src="https://img.icons8.com/ios-glyphs/30/forward.png" alt="forward"/></a>
				
				<div class="sub-menu">
					
				
					
						<?php 
							
								$get_male_categories = "SELECT * FROM male_ecomm_categories where status='p' order by serial asc "  ;
								$get_male_categories_run = $conn->prepare($get_male_categories);
								$get_male_categories_run->execute();

								while($get_male_categories_rows = $get_male_categories_run->fetch(PDO::FETCH_ASSOC)){
								
								$category_id = $get_male_categories_rows['id'];
								
							
						?>
							
								<a class="sub-btn"><?php echo $get_male_categories_rows['category_name']; ?><img class="dropdown" src="https://img.icons8.com/ios-glyphs/30/forward.png" alt="forward"/></a>
									<div class="sub-menu">
										
									<?php 
												
										$get_male_sub_categories = "SELECT * FROM male_ecomm_subcategories where status='p' and category_id =  '$category_id' and status = 'p'  order by sub_category_name asc"  ;		
										$get_male_sub_categories_run = $conn->prepare($get_male_sub_categories);
										$get_male_sub_categories_run->execute();
										
										while($get_male_sub_categories_rows = $get_male_sub_categories_run->fetch(PDO::FETCH_ASSOC)){
								
											$sub_category_id = $get_male_sub_categories_rows['id'];
											$seo_url = $get_male_sub_categories_rows['seo_url'];
											$upcoming = $get_male_sub_categories_rows['upcoming'];
											
											
										
										
									?>	
									
										<!---<a href="collection.php?menu_id=<?php echo 1;?>&category_id=<?php echo $category_id;?>&sub_category_id=<?php echo $sub_category_id;?>" class="sub-item sub_cate"><?php echo $get_male_sub_categories_rows['sub_category_name']; ?></a>
										-->

										<a href="<?php echo BASE_URL; ?>/<?php echo $seo_url; ?>" class="sub-item sub_cate"><?php echo $get_male_sub_categories_rows['sub_category_name']; ?>

										<?php  if($upcoming == 'p'){ ?>
												<div class="tooltip2">
													<img src="https://img.icons8.com/ios/50/info--v1.png" alt="tooltip" style="width:10px !important" class="tool_img"  width="14px">
													<span class="tooltiptext color_change">coming soon</span>
												</div>

												<?php } ?>
												</a>	

										
									<?php } ?>									
									
									</div>
						
						
						
						<?php } ?>
		
					
						
				</div>
				
				
				
				
				
        </div>
      


	    <div class="mega_menu_items">
            <a class="sub-btn">Women<img class="dropdown" src="https://img.icons8.com/ios-glyphs/30/forward.png" alt="forward"/></a>
            <div class="sub-menu">
			
			
				<?php 
							
								$get_female_categories = "SELECT * FROM female_ecomm_categories where status='p' order by serial asc "  ;
								$get_female_categories_run = $conn->prepare($get_female_categories);
								$get_female_categories_run->execute();

								while($get_female_categories_rows = $get_female_categories_run->fetch(PDO::FETCH_ASSOC)){
								
								$category_id = $get_female_categories_rows['id'];
								
							
						?>
							
								<a class="sub-btn"><?php echo $get_female_categories_rows['category_name']; ?><img class="dropdown" src="https://img.icons8.com/ios-glyphs/30/forward.png" alt="forward"/></a>
									<div class="sub-menu">
										
									<?php 
												
										$get_female_sub_categories = "SELECT * FROM female_ecomm_subcategories where status='p' and category_id =  '$category_id' and status = 'p'  order by sub_category_name asc"  ;		
										$get_female_sub_categories_run = $conn->prepare($get_female_sub_categories);
										$get_female_sub_categories_run->execute();
										
										while($get_female_sub_categories_rows = $get_female_sub_categories_run->fetch(PDO::FETCH_ASSOC)){
								
											$sub_category_id = $get_female_sub_categories_rows['id'];
											$seo_url = $get_female_sub_categories_rows['seo_url'];
											$upcoming = $get_male_sub_categories_rows['upcoming'];
											
										
										
									?>	
									
										<!--<a href="collection.php?menu_id=<?php echo 2;?>&category_id=<?php echo $category_id;?>&sub_category_id=<?php echo $sub_category_id;?>" class="sub-item sub_cate"><?php echo $get_female_sub_categories_rows['sub_category_name']; ?></a>
										-->

										<a href="<?php echo BASE_URL; ?>/<?php echo $seo_url; ?>" class="sub-item sub_cate">
											<?php echo $get_female_sub_categories_rows['sub_category_name']; ?>

											<?php  if($upcoming == 'p'){ ?>
												<div class="tooltip2">
													<img src="https://img.icons8.com/ios/50/info--v1.png" alt="tooltip" style="width:10px !important" class="tool_img"  width="14px">
													<span class="tooltiptext color_change">coming soon</span>
												</div>

												<?php } ?>
												</a>	




									<?php } ?>									
									
									</div>
						
						
						
						<?php } ?>
		
		
            </div>    
		</div>


	    <div class="mega_menu_items">
			<a class="sub-btn">Kids<img class="dropdown" src="https://img.icons8.com/ios-glyphs/30/forward.png" alt="forward"/></a>
			
			<div class="sub-menu">
			
				<?php 
							
								$get_kids_categories = "SELECT * FROM kids_ecomm_categories where status='p' order by serial asc "  ;
								$get_kids_categories_run = $conn->prepare($get_kids_categories);
								$get_kids_categories_run->execute();

								while($get_kids_categories_rows = $get_kids_categories_run->fetch(PDO::FETCH_ASSOC)){
								
								$category_id = $get_kids_categories_rows['id'];
								
							
						?>
							
								<a class="sub-btn"><?php echo $get_kids_categories_rows['category_name']; ?><img class="dropdown" src="https://img.icons8.com/ios-glyphs/30/forward.png" alt="forward"/></a>
									<div class="sub-menu">
										
									<?php 
												
										$get_kids_sub_categories = "SELECT * FROM kids_ecomm_subcategories where status='p' and category_id =  '$category_id' and status = 'p'  order by sub_category_name asc"  ;		
										$get_kids_sub_categories_run = $conn->prepare($get_kids_sub_categories);
										$get_kids_sub_categories_run->execute();
										
										while($get_kids_sub_categories_rows = $get_kids_sub_categories_run->fetch(PDO::FETCH_ASSOC)){
								
											$sub_category_id = $get_kids_sub_categories_rows['id'];
											
											$seo_url = $get_kids_sub_categories_rows['seo_url'];

											$upcoming = $get_male_sub_categories_rows['upcoming'];
										
										
									?>	
									
										<!--<a href="collection.php?menu_id=<?php echo 3;?>&category_id=<?php echo $category_id;?>&sub_category_id=<?php echo $sub_category_id;?>" class="sub-item sub_cate"><?php echo $get_kids_sub_categories_rows['sub_category_name']; ?></a>
										-->
										
										<a href="<?php echo BASE_URL; ?>/<?php echo $seo_url; ?>" class="sub-item sub_cate">
											<?php echo $get_kids_sub_categories_rows['sub_category_name']; ?>
										
											<?php  if($upcoming == 'p'){ ?>
												<div class="tooltip2">
													<img src="https://img.icons8.com/ios/50/info--v1.png" alt="tooltip" style="width:10px !important" class="tool_img"  width="14px">
													<span class="tooltiptext color_change">coming soon</span>
												</div>

												<?php } ?>
												</a>	

										
										
										
										</a>	

									<?php } ?>									
									
									</div>
						
						
						
						<?php } ?>
		
			
			</div>
		</div>


	   <div class="mega_menu_items">
			<a class="sub-btn">Products<img class="dropdown" src="https://img.icons8.com/ios-glyphs/30/forward.png" alt="forward"/></a>
			<div class="sub-menu">
				<!--<a href="#" class="sub-item">Sub Item 01</a>
				<a href="#" class="sub-item">Sub Item 02</a>-->
				
				
				<?php 
							
								$get_product_categories = "SELECT * FROM product_ecomm_categories where status='p' order by serial asc "  ;
								$get_product_categories_run = $conn->prepare($get_product_categories);
								$get_product_categories_run->execute();

								while($get_product_categories_rows = $get_product_categories_run->fetch(PDO::FETCH_ASSOC)){
								
									$category_id = $get_product_categories_rows['id'];
								
							
						?>
							
								<a class="sub-btn"><?php echo $get_product_categories_rows['category_name']; ?><img class="dropdown" src="https://img.icons8.com/ios-glyphs/30/forward.png" alt="forward"/></a>
									<div class="sub-menu">
										
									<?php 
												
										$get_product_sub_categories = "SELECT * FROM product_ecomm_subcategories where status='p' and category_id =  '$category_id' and status = 'p'  order by sub_category_name asc"  ;		
										$get_product_sub_categories_run = $conn->prepare($get_product_sub_categories);
										$get_product_sub_categories_run->execute();
										
										while($get_product_sub_categories_rows = $get_product_sub_categories_run->fetch(PDO::FETCH_ASSOC)){
								
											$sub_category_id = $get_product_sub_categories_rows['id'];
											$product_url  = $get_product_sub_categories_rows['seo_url'];

											
											$upcoming = $get_male_sub_categories_rows['upcoming'];

											
										
									?>	
									
									<!--	<a href="product_collection.php?menu_id=<?php echo 4;?>&category_id=<?php echo $category_id;?>&sub_category_id=<?php echo $sub_category_id;?>" class="sub-item sub_cate"><?php echo $get_product_sub_categories_rows['sub_category_name']; ?></a>
									-->

												



										<a  href="<?php echo BASE_URL; ?>/<?php echo $product_url; ?>"
										 class="sub-item sub_cate"><?php echo $get_product_sub_categories_rows['sub_category_name']; ?>
										
										 <?php  if($upcoming == 'p'){ ?>
												<div class="tooltip2">
													<img src="https://img.icons8.com/ios/50/info--v1.png" alt="tooltip" style="width:10px !important" class="tool_img"  width="14px" >
													<span class="tooltiptext color_change">coming soon</span>
												</div>

												<?php } ?>
												</a>	



										</a>
									
									<?php } ?>									
									
									</div>
						
						
						
						<?php } ?>
		
				
				
				
			</div>
       </div>
	   

	   <div class="mega_menu_items">
	   <a class="sub-btn">Calender<img class="dropdown" src="https://img.icons8.com/ios-glyphs/30/forward.png" alt="forward"/></a>
         <div class="sub-menu">
		   <div class="mega_menu_items">
	   <a class="sub-btn">Model Photoshoot<img class="dropdown" src="https://img.icons8.com/ios-glyphs/30/forward.png" alt="forward"/></a>
         <div class="sub-menu">
           <a href="<?php echo BASE_URL; ?>/booking_calender.php?menu_filter=1" class="sub-item sub_cate">Men</a>
           <a href="<?php echo BASE_URL; ?>/booking_calender.php?menu_filter=2" class="sub-item sub_cate">Women</a>
           <a href="<?php echo BASE_URL; ?>/booking_calender.php?menu_filter=3" class="sub-item sub_cate">Kids</a>
         </div>
       </div>
           <a href="<?php echo BASE_URL; ?>/booking_calender_product.php" class="sub-item">Product Photoshoot</a>
         </div>
       </div>


	   <div class="mega_menu_items">
	   <a class="sub-btn">More<img class="dropdown" src="https://img.icons8.com/ios-glyphs/30/forward.png" alt="forward"/></a>
         <div class="sub-menu">
		 	<a href="voilagram.php" target="_blank" class="sub-item">Social</a>
			 <div class="mega_menu_items">
				<a class="sub-btn">Work with us<img class="dropdown" src="https://img.icons8.com/ios-glyphs/30/forward.png" alt="forward"/></a>
					<div class="sub-menu">
						<a href="<?php echo BASE_URL; ?>/studio_model.php" class="sub-item sub_cate">Model</a>
						<a href="<?php echo BASE_URL; ?>/photographer.php" class="sub-item sub_cate">Photographer</a>
						<a href="<?php echo BASE_URL; ?>/makeupartist.php" class="sub-item sub_cate">Makeup Artist</a>
						<a href="<?php echo BASE_URL; ?>/stylish.php" class="sub-item sub_cate">Stylist</a>
						<a href="<?php echo BASE_URL; ?>/editor.php" class="sub-item sub_cate">Editors</a>
					</div>
			 </div>
        	<a href="<?php echo BASE_URL; ?>become_partner.php" class="sub-item">Become partner</a>
			<a href="<?php echo BASE_URL; ?>/guideline.php" class="sub-item">Shoot guidelines</a>
           <!-- <a href="career.php" class="sub-item">Career</a> -->

         </div>
       </div>


	     

		<b class="social_Banners_at_bottom">
	   <div class="social_icons_onsidebar">
	   <a href="https://www.facebook.com/VoilaStudio.in/"><img class="social_img" src="<?php echo BASE_URL; ?>/assets/img/footer/facebook.webp" alt=""></a>
        <a href="https://www.instagram.com/VoilaStudioTM/"><img class="social_img" src="<?php echo BASE_URL; ?>/assets/img/footer/instagram.webp" alt=""></a>
        <a href="https://in.linkedin.com/showcase/voilastudio"><img class="social_img" src="<?php echo BASE_URL; ?>/assets/img/footer/linkedin.webp" alt=""></a>
    	<a href="https://twitter.com/studiovoila?lang=en"><img class="social_img" src="<?php echo BASE_URL; ?>/assets/img/footer/twitter.webp" alt=""></a>
    	<a href="https://www.youtube.com/@voilastudio9023"><img style="width: 45px;" class="social_img" src="<?php echo BASE_URL; ?>/assets/img/footer/youtube.webp" alt=""></a>
             </div>
			 
			 <img id="lower_banner_signup" class="banner_on_menu" src="<?php echo BASE_URL; ?>/assets/img/mega_menu_banner/lower_banner.webp" alt="banner">
			 </b>

     </div>
   </div>
   <section class="main">
   </section>
 

   
   <script type="text/javascript">
   $(document).ready(function(){
     $('.sub-btn').click(function(){
       $(this).next('.sub-menu').slideToggle();
       $(this).find('.dropdown').toggleClass('rotate');
     });

     $('.menu-btn').click(function(){
       $('.side-bar-mobile-menu').addClass('active');
       $('.menu-btn').css("visibility", "hidden");
       $('.hello').css("width", "100vw");
     });

     $('.close-btn').click(function(){
       $('.side-bar-mobile-menu').removeClass('active');
       $('.menu-btn').css("visibility", "visible");
       $('.hello').css("width", "0");

     });

	 $('.hello').click(function(){
       $('.side-bar-mobile-menu').removeClass('active');
       $('.menu-btn').css("visibility", "visible");
       $('.hello').css("width", "0");

     });
   });

   


	$(document).ready(function(){
	$("#lower_banner_signup").click(function(){
		$('.side-bar-mobile-menu').removeClass('active');
       $('.menu-btn').css("visibility", "visible");
       $('.hello').css("width", "0");
       $('#popupFormSignIn').show(500);
	   
	});
	});




</script>


<style>
	body{
    min-height: 100vh;
    background: white;
    color: white;
    background-size: cover;
    background-position: center;
   }

   button:active {
	transform: translateY(2px);
   }
  .side-bar-mobile-menu{
    background: white;
    backdrop-filter: blur(15px);
    width: 250px;
    height: 100%;
    position: fixed;
    top: 0;
    left: -250px;
    overflow-y: auto;
    transition: 0.6s ease;
    transition-property: left;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
	z-index: 99;
   
   }
   .side-bar-mobile-menu::-webkit-scrollbar {
     width: 0px;
   }
   .work_with_us_li::-webkit-scrollbar {
  display: none;
}
   
   
   .side-bar-mobile-menu.active{
    left: 0;
	z-index: 99999;
   }

   
   .side-bar-mobile-menu .menu{
    width: 100%;
    margin-top: 00px;
   }
   
   .side-bar-mobile-menu .menu .mega_menu_items{
    position: relative;
    cursor: pointer;
   }
   
   .side-bar-mobile-menu .menu .mega_menu_items a{
    color: #000;
    font-size: 13px;
    text-decoration: none;
    display: block;
    padding: 9px 10px;
    line-height: 30px;
	border: 1px solid #f7f7f7;
	text-transform: capitalize;

   }
   
   .side-bar-mobile-menu .menu .mega_menu_items a:hover{
    background: #e5e5e547;
    transition: 0.3s ease;
   }
   
   .side-bar-mobile-menu .menu .mega_menu_items i{
    margin-right: 15px;
   }
   
   .side-bar-mobile-menu .menu .mega_menu_items a .dropdown{
    position: absolute;
    right: 0;
    margin: 8px;
    transition: 0.3s ease;
	width: 12px;
   }
   
   .side-bar-mobile-menu .menu .mega_menu_items .sub-menu{
    background: white;
    display: none;
   }
   
   .side-bar-mobile-menu .menu .mega_menu_items .sub-menu a{
    padding-left: 20px;
   }
   a.sub-item.sub_cate {
    padding-left: 30px !important;
   }
   
   .rotate{
    transform: rotate(90deg);
   }
   
   .close-btn{
	position: absolute;
    color: #000;
    right: 0px;
    margin: 10px 5px;
    cursor: pointer;
    width: 15px;
    border: 1px solid #e5e5e5;
	line-height: 15px;
   }
   
   .menu-btn{
	display: none;
   }

   .hello {
	width: 0;
    backdrop-filter: blur(5px);
    position: fixed;
    left: 0;
    right: 0;
	top: 0;
	bottom: 0;
	height: 200vw;
	z-index: 99999;
   }
   
   .main{
    /* height: 100vh; */
    display: flex;
    justify-content: center;
    align-items: center;
    /* padding: 50px; */
   }

   
   .main h1{
    color: rgba(255, 255, 255, 0.8);
    font-size: 60px;
    text-align: center;
    line-height: 80px;
   }
.send_otp_btn, .verify_otp_btn {
	color: rgb(60, 124, 249) ;
    border: 1px solid rgb(60, 124, 249);
    width: auto;
    right: 10px !important;
    padding: 3px 4px 1px;
    top: 8px !important;
    border-radius: 5px;
    font-size: 9px;
    box-shadow: 0px 1px 8px 0 rgba(0,0,0,0.2);
    position: absolute;
    background: white;
}
.send_otp_btn:active , .verify_otp_btn:active { 
	transform: translateY(1px);
	border:1px solid green;
        } 

	.verify_otp_btn {
		border: 1px solid green;
		color: green !important;
	}

	#login_signup_err_success {
		position: absolute;
		top: 0;
		font-size: 10px;
		text-align: center;
		width: 90%;
		top: 7px;
		text-transform: capitalize;
		color: green;
		font-weight: 600;
}
   
   @media (max-width: 990px){
	.mega_menu_drops {
		margin-top: 13px;
    }
	.menu-btn{
		position: fixed;
    color: #000;
    font-size: 25px;
    margin: 23px;
    cursor: pointer;
    display: block;
    top: -13px;
    left: -18px;
    z-index: 99;
}
.social_icons_onsidebar {
    display: flex;
    width: 90%;
    align-items: center;
    justify-content: space-between;
    margin: 0px auto 0;
	background: white;
    padding: 10px 0;

}
b.social_Banners_at_bottom {
  position: relative;
  bottom: 0;
}

   
    .main h1{
      font-size: 40px;
      line-height: 60px;
    }
   }
   .main img{
     width: 100px;
     margin: 15px;
     border-radius: 50%;
     margin-left: 70px;
     border: 3px solid #b4b8b9;
   }
   .main header{
     background: white;
   }
</style>



	