<!-----------------
voila old website
------------------->
<?php 



session_start();



error_reporting(0);
include('./old_website_assets/voilastudio_admin/lib/config.php');








//include('includes/config.php');

//test.voilastudio.in/voilastudio_admin/lib/config.php

//include('test.voilastudio.in/voilastudio_admin/lib/config.php');





error_reporting(0);  

   

session_start();



$servername = "localhost";

$username = "voilazrt_studiodata_users";

$password = "Wo!A*L#ART00d!o";

$dbname = "voilazrt_studiodata";





try {

    

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e) {

    echo "Connection failed: " . $e->getMessage();

}

 



?>











<!DOCTYPE html>





<html lang="zxx">


<?php include("menu_test.php"); ?>





<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">





	<title>Product Creative Shoots for your Ecommerce| Voila Studio</title>



	<!-- Meta tag Keywords -->



	<meta name="viewport" content="width=device-width, initial-scale=1">





	<meta name="keywords" content="model photography, best model photoshoot studio in delhi-ncr, amazon product photography, myntra product shoot, product photography pricing, grey background product photography, model jewellery photography" />





	<meta name="Description" content="Looking for photoshoots with male models for your product to sell online? Look no further. Check out our exclusive photoshoot with male models and get your brand picture ready as well.">



<script

      src="https://kit.fontawesome.com/a59b9b09ab.js"

      crossorigin="anonymous"

    ></script>

	<script>





		addEventListener("load", function () {





			setTimeout(hideURLbar, 0);





		}, false);











		function hideURLbar() {





			window.scrollTo(0, 1);





		}





	</script>





	<!-- //Meta tag Keywords -->





	<!-- Custom-Files -->





	<link rel="stylesheet" href="./old_website_assets/css/bootstrap.css">





	<!-- Bootstrap-Core-CSS -->





	<link rel="stylesheet" href="./old_website_assets/css/lightbox.css" type="text/css" media="all">





	<!-- Lightbox -->





	<link rel="stylesheet" href="./old_website_assets/css/blog.css" type="text/css" media="all" />





	<!-- Blog-CSS -->





	<link rel="stylesheet" href="./old_website_assets/css/style.css" type="text/css" media="all" />





	<!-- Style-CSS -->





	<link rel="stylesheet" href="./old_website_assets/css/font-awesome.css">





	<!-- Font-Awesome-Icons-CSS -->





	<!-- //Custom-Files -->





	<!-- Web-Fonts -->





	<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700&amp;subset=devanagari,latin-ext" rel="stylesheet">





	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=latin-ext" rel="stylesheet">





	<link href="//fonts.googleapis.com/css?family=Great+Vibes&amp;subset=latin-ext" rel="stylesheet">





	<link rel="icon" href="images/favicon.png" type="image/gif" sizes="25x25">







  <!--	<script type="text/javascript">function add_chatinline(){var hccid=70599526;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}





add_chatinline(); </script>











	

	 Facebook Pixel Code -->





<script>





!function(f,b,e,v,n,t,s)





{if(f.fbq)return;n=f.fbq=function(){n.callMethod?





n.callMethod.apply(n,arguments):n.queue.push(arguments)};





if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';





n.queue=[];t=b.createElement(e);t.async=!0;





t.src=v;s=b.getElementsByTagName(e)[0];





s.parentNode.insertBefore(t,s)}(window,document,'script',





'https://connect.facebook.net/en_US/fbevents.js');





fbq('init', '2377574265867787'); 





fbq('track', 'PageView');





</script>





<noscript>





<img height="1" width="1" 





src="https://www.facebook.com/tr?id=2377574265867787&ev=PageView





&noscript=1"/>





</noscript>





<!-- End Facebook Pixel Code -->





<style>

    body::-webkit-scrollbar{

        width: 15px;

        display: block !important;

         border-radius: 1px !important;

         height: 10px;

       

  }





::-webkit-scrollbar-thumb {

    border-radius: 0 !important;

      background: #bfbfbf !important; 

}



    .mid





    {





        text-align:center;





    }





    .txt{





        color:black;





    }





    





    





    











* {





  box-sizing: border-box;





}























/* Center website */





.main {





  max-width: 100%;





  margin: auto;





  margin: 0 10px 0 10px;





  font-size:8px;





}











h1 {





  font-size: 30px;





  word-break: break-all;





}











.row {





  /*margin: 10px -16px; */





  margin:0px;





}













/* Clear floats after rows */ 





.row:after {





  content: "";





  display: table;





  clear: both;





}











/* Content */





.content {





  background-color: white;





  padding: 0px;





}











/* The "show" class is added to the filtered elements */





.show {





  display: block;





}











/* Style the buttons */





.btn {





  border: none;





  outline: none;





  padding: 5px 6px;





  background-color: #e9ecef;





  cursor: pointer;





  font-size:15px;





  margin:3px;





}











.btn:hover {





  background-color: #7017b0;





  color:white;





}











.btn.active {





 





}











.slider {





  width: 96%;





  height: auto;





  display: flex;





  overflow-x: auto;





    -webkit-overflow-scrolling: auto;





    margin-left: 20px;





    margin-right:20px;



align-items: baseline;



   





}





@media(max-width: 770px) {





.slider {





  width: 90%;





  height: auto;





  display: flex;





  overflow-x: auto;





    -webkit-overflow-scrolling: touch;





    margin-left: 20px;





    margin-right:20px;





}





}





.slide {





  





  flex-shrink: 0;





  height: 100%;





}









.row,

.row > .column {

 /* padding: 8px; */

}

/* Create three equal columns that floats next to each other */

.column {

  float: left;

  width: 33.33%;

  display: block; /* Hide all elements by default */

  padding:5px;

  backgroud:white;

}







.arrows {





   width: 20px;





   height: 20px;





   border-color: #000;





   position: absolute;





   





   margin-top: 8px;





}





.prev {





   border-bottom: 6px solid;





   border-left: 6px solid;





   transform: rotate(45deg);





   left: 10px;





}





.next {





   border-bottom: 6px solid;





   border-left: 6px solid;





   transform: rotate(-135deg);





   right: 10px;





}





</style>







<style>



    * {

        margin: 0;

        padding: 0;

    }

    ::-webkit-scrollbar {

    display: none;

}

    .myntra_like_category {

    width: 100%;

    display: flex;

    justify-content: flex-start;

    overflow-x: auto;

    background: linear-gradient(45deg, #fff6ba, #e4ffe08c);



}

img#category_mytra_1,img#category_mytra {



    width: 170px;

}



div#division_myntra {

    display: grid;

    /* place-content: center; */

    place-items: center;

    /* margin: 0; */

    width: 100%;

}



p#category_text {

    margin: 0px 0 10px 0;

    font-size: 12px;

    font-family: system-ui;

    text-transform: uppercase;

    color: black;

    width: 180px;

    display: grid;

    place-content: center;

    text-align: center;

    font-weight: 600;

    position: relative;

    bottom: 10px;



}



.text-rainbow-animation {

    background-image: linear-gradient(to right, #a300a5,#002456);

     -webkit-background-clip: text;

    -webkit-text-fill-color: transparent;

    animation: rainbow-animation 1090s linear infinite;

    transition: 0.5s cubic-bezier(0, 0, 0.13, 0.18);



}



@keyframes rainbow-animation {

    to {

        background-position: 4500vh;

    }

}



@media screen and (max-width: 600px) {

    img#category_mytra_1, img#category_mytra {

        width: 21vw;

}

p#category_text {

    margin: 0px 0 -6px 0;

    font-size: 9px;

    position: relative;

    bottom: 1px;

    font-weight: 700;

    width: 75px;

    display: grid;

    place-content: center;

}

div#division_myntra {

    width: 20vw;

}



}



section.slider_cover_section {

    display: flex;

    width: 98%;

    margin: 0 auto;

    align-items: center;

}

.cover {

    display: flex;

    width: 100%;

    align-items: center;



}



button.right,button.left {

    background: none;

    border: 0;

    font-size: 20px;



}

@media screen and (max-width:900px) {

    button.right, button.left{

        display: none;

    }

}





    





</style>



 <script>

      function rightScroll() {

        const left = document.querySelector(".slider");

        left.scrollBy(-200, 0);

      }

      function leftScroll() {

        const right = document.querySelector(".slider");

        right.scrollBy(200, 0);

      }

    </script>










<!-- banner  css -->

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





	<!-- banner -->





	<!--<div class="main-banner-w3l-116">

    -->






	<!-- //banner -->





	<!-- page details -->




<!-- 
	<div class="breadcrumb-agile">





		<nav aria-label="breadcrumb">





			<ol class="breadcrumb">





				<li class="breadcrumb-item">





					<a href="index.php">Home</a>





				</li>





				<li class="breadcrumb-item active" aria-current="page">Product Creative Shoot





				</li>





			</ol>





		</nav>





	</div>
 -->




	<!-- //page details -->





     





     





     <!-- MAIN (Center website) -->


<!-- banner -->
<div>
	<img class="desktop_img"  src="./old_website_assets/banner/new_banners/creative_shoot_banner.webp" alt="desktopimg">
	<img class=" mobile_img"  src="./old_website_assets/banner/mobile_banners/mobile_banner_creative_shoot.webp" alt="mobileimg ">
</div>


<div class="main">





    





     





  

<!--



  <h3 class="title-wthree mb-2 text-center">





					<span class="mt-2 text-uppercase font-weight-bold">Male Ecommerce Photoshoot</span></h3>



-->

<hr> 			  





    <section class="slider_cover_section">

    <div class="cover">

      <button class="left" onclick="rightScroll()">

       <i class="fas fa-angle-left"></i>

      </button>



    <div class="slider ">





   

     <?php 

	

    	           $query="SELECT * FROM product_creative_ecomm_categories where status = 'p' order by serial asc ";

                   $stmt = $conn->prepare($query);

                   $stmt->execute();



                    $i = 1;

                    while($arr = $stmt->fetch(PDO::FETCH_ASSOC)){

                    $i++;

                    

                    $id = $arr['id'];

	                

	 ?>

	    

		

			    

			<div id="division_myntra">

                <!--<a href="#<?php echo  $arr['navigation_id']; ?>" id="<?php echo  $arr['navigation_id']; ?>" onfocus="filterSelection('<?php echo  $arr['navigation_id']; ?>')">

                   -->

                  

                <a href="product_creative.php?id=<?php echo $id; ?>" id="<?php echo  $arr['navigation_id']; ?>" onfocus="filterSelection('<?php echo  $arr['navigation_id']; ?>')">

                <img  id="category_mytra_1" src="./old_website_assets/voilastudio_admin/images/creative_products_ecomm/category_images/<?php echo $arr['category_images']; ?>" alt="">

                <p  class="text-rainbow-animation" id="category_text"> <?php echo  $arr['category_name']; ?></p></a>

        

        

            </div>



	

	<?php } ?>

  

    </div>  

    

    <button class="right" onclick="leftScroll()">

      <i class="fas fa-angle-right"></i>

      </button>

      

      

</div>

</div>

</section>

 





<!-- Portfolio Gallery Grid -->



<hr>



<div class="row">





<div id = "load_data"></div>



<div id="load_data_message"></div>

 

 

 

 

<?php 

 

 

/*

     

    	        $query = "SELECT * FROM product_creative_ecomm_categories where status = 'p' order by serial asc ";

                $stmt = $conn->prepare($query);

                $stmt->execute();



                $i = 1;

                

                while($arr = $stmt->fetch(PDO::FETCH_ASSOC)){

                

                        $category_name = $arr['category_name'];

                        $navigation_id = $arr['navigation_id'];

                        $category_id = $arr['id'];

                        

                

                        $male_model_query="SELECT * FROM creative_products_ecomm_shoot_images where status = 'p' and categories = '$category_id' order by serial desc ";

                    

                        //$male_model_query="SELECT * FROM male_ecomm_shoot_images where status = 'p' and categories = '$category_id' order by id asc ";

                            

                        $male_model_query_run = $conn->prepare($male_model_query);

                        $male_model_query_run->execute();

                        $i = 0;

                        

                        while($male_model_query_rows = $male_model_query_run->fetch(PDO::FETCH_ASSOC)){

                                    

                                  //  $categories = $male_model_query_rows['categories']; 

                    

            ?>





    		<div class="column <?php echo $navigation_id; ?>">

    			<div class="content">

    				<a href="voilastudio_admin/images/creative_products_ecomm/<?php echo $male_model_query_rows['model_image']; ?>"  data-lightbox="example-set"

    					data-title="">

    					<img src="voilastudio_admin/images/creative_products_ecomm/<?php echo $male_model_query_rows['model_image'];?>" loading="lazy" alt="<?php echo $category_name; ?>"

    						style="width:100%"> </a>

    

    			</div>

    		</div>

            



<?php 

            

    } }



*/



?>









</div>







<?php 





    if(isset($_REQUEST['id'])){

        

        

        $category_id = $_REQUEST['id'];

    

        

    }else{

        

            

        $category_id = 14;

    

    

    }

     



?>



<script>



$(document).ready(function(){

 

 var id = <?php echo $category_id; ?>;

 

 var limit = 15;

 var start = 0;

 var action = 'inactive';

 

 function load_images_data(limit,start,id)

 {

  $.ajax({

   url:"fetch_product_creative_photoshoot_images_ajax.php",

   method:"POST",

   data:{limit:limit, start:start, id:id},

   cache:false,

   success:function(data)

   {

    $('#load_data').append(data);

    if(data == '')

    {

    // $('#load_data_message').html("<button type='button' class='btn btn-info'>No Data Found</button>");

     action = 'active';

    }

    else

    {

   //  $('#load_data_message').html("<button type='button' class='btn btn-warning'>Please Wait....</button>");

     action = "inactive";

    }

   }

  });

 }



 if(action == 'inactive')

 {

  action = 'active';

  load_images_data(limit, start, id);

 }

 

 $(window).scroll(function(){

  if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive')

  {

    action = 'active';

    start = start + limit;

    setTimeout(function(){

    load_images_data(limit, start,id);

   }, 1000);

  }

 });

 

});

</script>











<script>





filterSelection("all")





function filterSelection(c) {





  var x, i;





  x = document.getElementsByClassName("column");





  if (c == "all") c = "";





  for (i = 0; i < x.length; i++) {





    w3RemoveClass(x[i], "show");





    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");





  }





}





function w3AddClass(element, name) {





  var i, arr1, arr2;





  arr1 = element.className.split(" ");





  arr2 = name.split(" ");





  for (i = 0; i < arr2.length; i++) {





    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}





  }





}





function w3RemoveClass(element, name) {





  var i, arr1, arr2;





  arr1 = element.className.split(" ");





  arr2 = name.split(" ");





  for (i = 0; i < arr2.length; i++) {





    while (arr1.indexOf(arr2[i]) > -1) {





      arr1.splice(arr1.indexOf(arr2[i]), 1);     





    }





  }





  element.className = arr1.join(" ");





}









// Add active class to the current button (highlight it)





var btnContainer = document.getElementById("myBtnContainer");





var btns = btnContainer.getElementsByClassName("btn");





for (var i = 0; i < btns.length; i++) {





  btns[i].addEventListener("click", function(){





    var current = document.getElementsByClassName("active");





    current[0].className = current[0].className.replace(" active", "");





    this.className += " active";





  });





}





</script>











     





     





     





     





    





			





		





		





			





						<!-- <div class="categories my-4">





							<h3 class="blog-title text-dark mb-3">Categories</h3>





							<ul class="list-group single">





								<li class="list-group-item d-flex justify-content-between align-items-center">





									Cras justo odio





									<span class="badge badge-primary badge-pill">14</span>





								</li>





								<li class="list-group-item d-flex justify-content-between align-items-center">





									Dapibus ac facilisis in





									<span class="badge badge-primary badge-pill">2</span>





								</li>





								<li class="list-group-item d-flex justify-content-between align-items-center">





									Morbi leo risus





									<span class="badge badge-primary badge-pill">1</span>





								</li>





							</ul>





						</div> -->





					<!--	<div class="search1">





							<h3 class="blog-title text-dark mb-3">Search</h3>





							<form class="form-inline" action="#" method="post">





								<input class="form-control rounded-0 mr-sm-2" type="search" placeholder="Search Here" aria-label="Search"





								 required>





								<button class="btn bg-dark text-white rounded-0 mt-3" type="submit">Search</button>





							</form>





						</div> 





						<div class="posts p-4 border my-4">





							<h3 class="blog-title text-dark mb-3">Our Events</h3>





							<div class="posts-grids">





								<div class="row posts-grid">





									<div class="col-lg-4 col-md-3 col-4 posts-grid-left pr-0">





										<a href="single.html">





											<img src="images/g9.jpg" alt=" " class="img-fluid" />





										</a>





									</div>





									<div class="col-lg-8 col-md-7 col-8 posts-grid-right mt-lg-0 mt-md-5 mt-sm-4">





										<h4>





											<a href="single.html" class="text-dark">Sed ut perspiciatis unde omni</a>





										</h4>





										<ul class="wthree_blog_events_list mt-2">





											<li class="mr-2 text-dark">





												<i class="fa fa-calendar mr-2" aria-hidden="true"></i>15/05/18</li>





											<li>





												<i class="fa fa-user" aria-hidden="true"></i>





												<a href="single.html" class="text-dark ml-2">Admin</a>





											</li>





										</ul>





									</div>





								</div>





								<div class="row posts-grid mt-4">





									<div class="col-lg-4 col-md-3 col-4 posts-grid-left pr-0">





										<a href="single.html">





											<img src="images/g2.jpg" alt=" " class="img-fluid" />





										</a>





									</div>





									<div class="col-lg-8 col-md-7 col-8 posts-grid-right mt-lg-0 mt-md-5 mt-sm-4">





										<h4>





											<a href="single.html" class="text-dark">Sed ut perspiciatis unde omni</a>





										</h4>





										<ul class="wthree_blog_events_list mt-2">





											<li class="mr-2 text-dark">





												<i class="fa fa-calendar mr-2" aria-hidden="true"></i>23/05/18</li>





											<li>





												<i class="fa fa-user" aria-hidden="true"></i>





												<a href="single.html" class="text-dark ml-2">Admin</a>





											</li>





										</ul>





									</div>





								</div>





								<div class="row posts-grid mt-4">





									<div class="col-lg-4 col-md-3 col-4 posts-grid-left pr-0">





										<a href="single.html">





											<img src="images/g3.jpg" alt=" " class="img-fluid" />





										</a>





									</div>





									<div class="col-lg-8 col-md-7 col-8 posts-grid-right mt-lg-0 mt-md-5 mt-sm-4">





										<h4>





											<a href="single.html" class="text-dark">Sed ut perspiciatis unde omni</a>





										</h4>





										<ul class="wthree_blog_events_list mt-2">





											<li class="mr-2 text-dark">





												<i class="fa fa-calendar mr-2" aria-hidden="true"></i>13/06/18</li>





											<li>





												<i class="fa fa-user" aria-hidden="true"></i>





												<a href="single.html" class="text-dark ml-2">Admin</a>





											</li>





										</ul>





									</div>





								</div>





							</div>





						</div>





						<div class="tags p-4 border">





							<h3 class="blog-title text-dark">Recent Tags</h3>





							<ul class="mt-4">





								<li>





									<a href="single.html" class="text-dark border">Designs</a>





								</li>





								<li>





									<a href="single.html" class="text-dark border">Growth</a>





								</li>





								<li>





									<a href="single.html" class="text-dark border">Latest</a>





								</li>





								<li>





									<a href="single.html" class="text-dark border">Price</a>





								</li>





								<li>





									<a href="single.html" class="text-dark border">Tools</a>





								</li>





								<li>





									<a href="single.html" class="text-dark border">Style</a>





								</li>





								<li>





									<a href="single.html" class="text-dark border">Model</a>





								</li>





								<li>





									<a href="single.html" class="text-dark border">New Trends</a>





								</li>





								<li>





									<a href="single.html" class="text-dark border">Advantage</a>





								</li>





								<li>





									<a href="single.html" class="text-dark border">Excellent</a>





								</li>





								<li>





									<a href="single.html" class="text-dark border">Beautiful</a>





								</li>





								<li>





									<a href="single.html" class="text-dark border">Styles</a>





								</li>





								<li>





									<a href="single.html" class="text-dark border">Research</a>





								</li>





								<li>





									<a href="single.html" class="text-dark border">Trendy</a>





								</li>





							</ul>-->





						</div>





					</div>





				</div>





				<!-- //right side -->





			</div>





		</div>





	</div>





	<!-- //blog -->











	<!-- Botom content button -->       





    <?php include_once("content_button.php"); ?>





   <!-- //Botom content button -->





   





    <div style="margin:20px;">





       <h3>Popular Searches</h3>





       <p>product photography,





best product photoshoot studio in delhi-ncr,





amazon product photography,





myntra product Photography,





product photography pricing,





grey background product photography,





model jewellery photography,





Creative Product Shoot near me





</p>





   </div>





	      





   <!-- footer -->





       <?php include_once("footer.php"); ?>











   <!-- //footer -->























	<!-- Js files -->





	<!-- JavaScript -->





	<script src="./old_website_assets/js/jquery-2.2.3.min.js"></script>





	<!-- Default-JavaScript-File -->











	<!-- navigation -->





	<!-- dropdown smooth -->





	<script>





		$(document).ready(function () {





			$(".dropdown").hover(





				function () {





					$('.dropdown-menu', this).stop(true, true).slideDown("fast");





					$(this).toggleClass('open');





				},





				function () {





					$('.dropdown-menu', this).stop(true, true).slideUp("fast");





					$(this).toggleClass('open');





				}





			);





		});





	</script>





	<!-- //dropdown smooth -->





	<!-- fixed nav -->





	<script>





		$(window).scroll(function () {





			if ($(document).scrollTop() > 50) {





				$('nav').addClass('shrink');





			} else {





				$('nav').removeClass('shrink');





			}





		});





	</script>





	<!-- //fixed nav -->





	





	<!-- //navigation -->





	<!--  light box js -->





	<script src="./old_website_assets/js/lightbox-plus-jquery.min.js"></script>





	<!-- //light box js-->











	<!-- smooth scrolling -->





	<script src="./old_website_assets/js/SmoothScroll.min.js"></script>





	<!-- move-top -->





		<script src="./old_website_assets/js/move-top.js"></script>





	<!-- easing -->





	<script src="./old_website_assets/js/easing.js"></script>





	<!--  necessary snippets for few javascript files -->





	<script src="./old_website_assets/js/look.js"></script>











	<script src="./old_website_assets/js/bootstrap.js"></script>





	<!-- Necessary-JavaScript-File-For-Bootstrap -->





	<!-- //Js files -->

















</body>











</html>