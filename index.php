
<?php    

error_reporting(0);  
session_start();

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


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

include('db_config/base_url.php');
include('db_config/db_config.php');

	$get_index_page = "select * from index_seo ";
    $get_index_page_run = $conn->prepare($get_index_page);
    $get_index_page_run->execute();
    $get_index_page_rows = $get_index_page_run->fetch(PDO::FETCH_ASSOC);
	$seo_title = $get_index_page_rows['seo_title'];
	$seo_keywords = $get_index_page_rows['seo_keywords'];
	$seo_desc = $get_index_page_rows['seo_desc'];
	

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
<meta charset="UTF-8">

	<!--------------------------------------------------
						META TAGS
	----------------------------------------------------> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Meta tag Keywords -->
        <!-- <meta name="robots" CONTENT="noindex,nofollow"> -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <!-- <meta name="keywords" content=" Ecommerce photography , Studio for product photography , Catalog shoot , Myntra models , Amazon photoshoot ,Ajio photoshoot , Ecommerce product photography , E-commerce photography services ,Product photography studio ,Voila Studio Gurgaon ,Professional ecommerce photoshoot company in india ,male model shoot , ">
        <meta name="Description" content="Voila Studio, the best ecommerce photography studio in Gurgaon, specializes in brand photoshoots for Myntra, Amazon, Ajio, and more."> -->
        <meta name="robots" content="follow, no-index, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>

    <!-- Meta tags for Facebook Open Graph -->
        <meta property="og:locale" content="en_US">
		<meta property="og:type" content="website">
		<meta property="og:title" content=" Gurgaon's Premier Ecomm Photo Studio">
		<meta property="og:description" content="Elevate your brand with stunning ecomm photos! Voila Studio offers professional shoots with experienced models (Myntra, Ajio) for a seamless online presence. Get a quote today!">
		<meta property="og:url" content="https://www.yourwebsite.com">
		<meta property="og:image" content="https://www.yourwebsite.com/images/your-image.jpg">
		<meta property="og:image:secure_url" content="https://www.yourwebsite.com/images/your-image.jpg">
		<meta property="og:image:width" content="1200">
		<meta property="og:image:height" content="630">

		<!-- Meta tags for Instagram -->
		<meta property="og:type" content="instgram:photo">
		<meta property="og:title" content="Ecom Photos that Sell">
		<meta property="og:description" content=" Showcase your products beautifully & boost sales! Voila Studio: Professional ecomm photography with experienced models (Myntra, Ajio). Let's collaborate! #ecommerce #productphotography #gurgaon">
		<meta property="og:url" content="https://www.instagram.com/p/your-photo-id/">
		<meta property="og:image" content="https://www.yourwebsite.com/images/your-instagram-photo.jpg">

		<!-- Meta tags for Twitter Card -->
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="Ecom Photoshoot Experts in Delhi NCR">
		<meta name="twitter:description" content=" Elevate your brand image with Voila Studio's exceptional ecomm photography services. We collaborate with leading models (Myntra, Ajio) to deliver high-impact product visuals. Contact Us Today. #ecommerce #photographystudio #gurgaon">
		<meta name="twitter:image" content="https://www.yourwebsite.com/images/your-twitter-card-image.jpg">
		<meta name="twitter:site" content="@yourtwitterhandle">
		<meta name="twitter:creator" content="@yourtwitterhandle">

        <!-- title -->
    	<title><?php echo $seo_title; ?></title>
	
        <!-- Meta tag Keywords -->
        <link rel="stylesheet" href="./assets/frontpage/assets/style.css">
        <link rel="stylesheet" href="./assets/css/our_client.css" type="text/css" media="all" />
       
        <!-- keyword description -->
        <meta name="keywords" content=" <?php echo $seo_keywords; ?> ">
        <meta name="Description" content=" <?php echo $seo_desc; ?> ">


        <!-- <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>     -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> -->
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
         <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> -->
        <!-- <link rel='stylesheet' href='https://unpkg.com/aos@2.3.0/dist/aos.css'> -->


        <link rel="canonical" href="https://voilastudio.in/" />
        <!-- <link rel="stylesheet" href="css/slider_banner_index.css" type="text/css" media="all" /> -->
        <link rel="stylesheet" href="./mega_menu/collection.css" type="text/css" media="all" />
        <link rel="stylesheet" href="./mega_menu/collectiondetail.css" type="text/css" media="all" />
        <link rel="stylesheet" href="./mega_menu/corousel.css" type="text/css" media="all" />
        <link rel="stylesheet" href="./mega_menu/address.css" type="text/css" media="all" />
        <link rel="stylesheet" href="./mega_menu/blinkcircle.css" type="text/css" media="all" />
        <link rel="stylesheet" href="./mega_menu_new/style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="./mega_menu/categorymodal.css" type="text/css" media="all" />
        <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'> </script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script> -->

        <script src="./assets/frontpage/assets/script.js"></script>
 
    <!--  Menu css -->
    
        <link rel="icon" type="image/x-icon" href="./assets/img/favicon.png">
        <link rel="stylesheet" href="./frontpage/assets/style.css">
        <!-- <link rel="stylesheet" href="../css/our_client.css" type="text/css" media="all" /> -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> -->
        <!-- <link rel='stylesheet' href='https://unpkg.com/aos@2.3.0/dist/aos.css'> -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> -->
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
        <link rel="stylesheet" href="./assets/css/header.css">
        <link rel="stylesheet" href="./assets/css/signup_login.css">

        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script> -->

    <!-- menu css -->
  
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/mega_menu/nfooter.css">

 <style>
     @import url('https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,600&display=swap');
    h1, h2, h3, h4, h5, h6 {
       
         font-family: "DM Sans" !important;
        font-optical-sizing: auto;
        font-weight: 600;
        font-style: normal;

    }
    #loader {
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        z-index: 9999999;
        background: #fff url('"<?php echo BASE_URL; ?>/siteloader/siteloader_gif.gif') no-repeat center center;
        
    }
    #loader::-webkit-scrollbar {
            display: none;
    }
 
    .center {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
        }
        .shape {
      position: absolute;
      left: 0;
      width:22px;
      transition: left 1s ease; /* Faster sliding effect */
    }
   
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');
    .monstor{

  font-family: "Montserrat", sans-serif !important;
  font-optical-sizing: auto;
  font-weight: 300 !important;
  font-style: normal;

    }
    .subheading_regardingtittle{
        text-align:center;
        padding:0px;
        margin:0px;
    }

    .overflow_scroll {
            overflow-x: scroll;
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;   /* Firefox */
        }
        .country_img_width{
width: 80%;
        }   
        @media (max-width: 768px) {
            .frame {
           flex-shrink: 0 !important;
            width: 120px !important;
      
        }
        .flex_none{
            flex:none;
            min-width: 10%;
        box-sizing: border-box;
        text-align: center;
        padding: 10px;
        
        }
        .country_img_width{
            width: 100px;

        }
    }
      
</style>

</head>
<body>
  
  <!-- <div id="loader" class="center"></div> -->

   <?php include("menu_test.php"); ?> 
   
   <?php 
	   // mailer // 	
	if(isset($_REQUEST['welcome'])){ 
		if($_REQUEST['welcome'] == 'signup' ){
			$user_id =  $_SESSION['user_id'];
			$email_id =  $_SESSION['email'];		
			$get_user_email  = "select * from  register_users where email = '$email_id'  and user_id = '$user_id' " ;
			$get_user_email_run = $conn->prepare($get_user_email);
			$get_user_email_run->execute();
			$get_user_email_count = $get_user_email_run->rowcount();
			
			if($get_user_email_count > 0){			
			$get_user_email_rows = $get_user_email_run->fetch(PDO::FETCH_ASSOC);			
			$firstname = $get_user_email_rows['firstname'];
				
				
			$mail = new PHPMailer();
			$mail->IsSMTP();
			$mail->Mailer = "smtp";
	  
  
			$mail->SMTPAuth   = TRUE;
			$mail->SMTPSecure = "ssl";
			$mail->Port       = 465;	
			
			$mail->Host = "smtpout.secureserver.net";
			$mail->Username = "rohit.kushwaha@intenim.com";  
			$mail->Password = "Rohit@321"; 	
					
			$cc_person = "kushwaharohit.26@gmail.com";
			$to = 'rohit.kushwaha@intenim.com';
			//$to = $email_id;
			
			$tomail = $to;
	

			$mail->IsHTML(true);
			$mail->AddAddress($tomail, "recipient-name");
			$mail->SetFrom("info@voilastudio.in", "Voila Studio");
			$mail->AddCC($cc_person, "Gunjeet singh");
				
			$subject =  "Welcome To Voila";
			$mail->Subject = $subject;
				
        $email_content = '  
        <div style="
        width: 100%;
        text-align: center;
        align-items: center;
        justify-content: center;
        margin: 1% auto;
        ">
        <a href="#"> <img src="<?php echo BASE_URL; ?>/mail_images/registered_mail/logo.svg" alt="logo" /></a>
        </div>

        <div style="
        display: flex;
        flex-direction: column;
        padding: 4% 0%;
        border-radius: 44px;
        justify-content: center;
        align-items: center;
        text-align:center
        ">
 
  
        <p style="
          font-family:Inter;
          font-size: 20px;
          font-weight: 600;
        
        ">
            Welcome to VOILA Studio!
        </p>
		
		
        <p style="
          font-family:Inter;
          font-size: 14px;
          font-weight: 400;
          justify-content:center;

        ">
        We are thrilled to welcome you as a new member to our e-commerce photography community.
        </p>
        <img src="<?php echo BASE_URL; ?>/mail_images/registered_mail/Received.png" alt="mail" />
        <p style="
          font-family:Inter;
          font-size: 14px;
          font-weight: 400;
    
          justify-content:center;

        ">
        Your VOILA Studio account has been approved. You can now log in to the VOILA Studio by clicking the button below.
        </p>
        <div style="margin-top:5% auto; width: 100% ; jusify-content:center; align-item:center">
            <button style="
            background:#cf205a;
            width: 236px;
            height: 45.16px;
            border-radius: 7.07px;
            opacity: 0px;
            border: none;
            font-size: 14.88px;
            font-weight: 600;
            letter-spacing: 0.02em;
            color: white;
          " href="<?php echo BASE_URL; ?>">
          <a href="<?php echo BASE_URL; ?>" style="color:white; text-decoration:none">

                Get started</a>
            </button>
        </div>
    </div>

        <h1 style="
            font-family:Inter;
            font-size: 20px;
            font-weight: 600;
            line-height: 21.78px;
            align-items: center;
            text-align: center;
            margin-top: 5%;
        ">
            Book Your First Shoot
        </h1>

    <div style="
        display: flex;
        flex-direction: column;
        padding: 2% 0%;
        border-radius: 44px;
        justify-content: center;
        align-items: center;
        text-align: center;
      ">
        <ol type="1" style="text-align: left; width: 95%">
            <li style="
            font-family:Inter;
            font-size: 14px;
            font-weight: 600;
            line-height: 20.94px;
            text-align: justify;
          ">
                <a href=">Log in </a>to your account.
            </li>
            <li style="
            font-family:Inter;
            font-size: 14px;
            font-weight: 600;
            line-height: 20.94px;
            text-align: justify;
          ">
          Explore and book models for your ecommerce photoshoot needs.
            </li>
        </ol>
        <p style="
          font-family:Inter;
          font-size: 14px;
          font-weight: 400;
          text-align: justify;
        ">
        Whether you require polished product shots, lifestyle images, or anything else, we have you covered.
        </p>
        <div style="margin-top: 5% auto; width: 100%">
            <button style="
            background:#cf205a;
            width: 236px;
            height: 45.16px;
            border-radius: 7.07px;
            opacity: 0px;
            border: none;
            font-size: 14.88px;
            font-weight: 600;
            letter-spacing: 0.02em;
            color: white;
          " >
          <a href="<?php echo BASE_URL; ?>" style="color:white; text-decoration:none">
          Book Now  </a>
            </button>
          
        </div>
    </div>
    <h1 style="
        font-family:Inter;
        font-size: 18px;
        font-weight: 600;
        line-height: 21.78px;
        align-items: center;
        text-align: center;
        margin-top: 5%;
      ">
        Explore Our Services
    </h1>

    <div
        style=" justify-content:space-around; margin: auto 5px; align-items: center;text-align: center;">
        <div style="display: flex;  flex-wrap:no-wrap;"> 
        <div style="width: 33.33%; ">
            <img src="<?php echo BASE_URL; ?>/mail_images/registered_mail/male shoot.jpg" alt="Client with Voila Studio" style="width: 80%; height: 80%; border-radius: 5px 5px 0px 0px" />
            <div style="
            
            background:#cf205a;
            width: 80%;
            margin:  auto;
          ">
                <p style="
              font-family:Inter;
              font-size: 14px;
              font-weight: 400;
              text-align: center;
              align-items: center;
              justify-content: center;
            ">
                    <a href="#" style=" text-decoration: none; color:white;
            ">Male Shoot </a>
                </p>
            </div>
        </div>

        <div style="width: 33.33%;">
            <img src="<?php echo BASE_URL; ?>/mail_images/registered_mail/female shooot.jpg" alt="Client with Voila Studio"
                style="width: 80%; height: 80%; border-radius: 5px 5px 0px 0px" />
            <div style="
            
            background:#cf205a;
            width: 80%;
            margin: auto;


          ">
                <p style="
              font-family:Inter;
              font-size: 14px;
              font-weight: 400;
              text-align: center;
              align-items: center;
              justify-content: center;
           

            ">
                    <a href="#" style=" text-decoration: none;color:white;
            ">Female Shoot</a>
                </p>
            </div>
        </div>

        <div style="width: 33.33%; ">
            <img src="<?php echo BASE_URL; ?>/mail_images/registered_mail/Femalestyle.jpg" alt="Client with Voila Studio"
                style="width: 80%; height: 80%; border-radius: 5px 5px 0px 0px" />
            <div style="
          
          width: 80%;
          margin: auto;
          background:#cf205a;


        ">
                <p style="
            font-family:Inter;
            font-size: 14px;
            font-weight: 400;
            text-align: center;
            align-items: center;
            justify-content: center;
          ">
                    <a href="#" style="text-decoration: none; color:white;
     ">Female Style </a>
                </p>
            </div>
        </div>
</div>

<div style="display: flex;  flex-wrap:no-wrap;">
        <div style="width: 33.33%;">
            <img src="<?php echo BASE_URL; ?>/mail_images/registered_mail/male style.jpg" alt="Client with Voila Studio" style="width: 80%; height: 80%; border-radius: 5px 5px 0px 0px" />
            <div style="
            
            background:#cf205a;
          width: 80%;
          margin:0px auto;

        ">
                <p style="
            font-family:Inter;
            font-size: 14px;
            font-weight: 400;
            text-align: center;
            align-items: center;
            justify-content: center;
          "><a href="#" style="text-decoration: none; color:white
        ">Male Style</a></p>
            </div>
        </div>

        <div style="width: 33.33%;">
            <img src="<?php echo BASE_URL; ?>/mail_images/registered_mail/productcreative.jpg" alt="Client with Voila Studio"
                style="width: 80%; height: 80%; border-radius: 5px 5px 0px 0px" />
            <div style="
            background:#cf205a;
            width: 80%;
            margin:0px auto;


          ">
                <p style="
              font-family:Inter;
              font-size: 14px;
              font-weight: 400;
              text-align: center;
              align-items: center;
              justify-content: center;
              color:white;
            ">
                    <a href="#" style=" text-decoration: none;   color:white;

            ">Product Creative</a>
                </p>
            </div>
        </div>

        <div style="width: 33.33%;">
            <img src="<?php echo BASE_URL; ?>/mail_images/registered_mail/ghost shoot.jpg" alt="Client with Voila Studio"
                style="width: 80%; height: 80%; border-radius: 5px 5px 0px 0px" />
            <div style="
            background:#cf205a;
          width: 80%;
          margin:0px auto;

        ">
                <p style="
            font-family:Inter;
            font-size: 14px;
            font-weight: 400;
            text-align: center;
            align-items: center;
            justify-content: center;
          "><a href="#" style=" text-decoration: none;  color:white;

        ">Ghost Shoot</a></p>
            </div>
        </div>
        </div>

        <div style="display: flex;  flex-wrap:no-wrap;">

        <div style="width: 33.33%;">
            <img src="<?php echo BASE_URL; ?>/mail_images/registered_mail/hanger shoot.jpg" alt="Client with Voila Studio"
                style="width: 80%; height: 80%; border-radius: 5px 5px 0px 0px" />
            <div style="
            background:#cf205a;
          width: 80%;
                    margin:0px auto;


        ">
                <p style="
            font-family:Inter;
            font-size: 14px;
            font-weight: 400;
            text-align: center;
            align-items: center;
            justify-content: center;
          "><a href="#" style=" text-decoration: none; color:white;
        "> Shoot </a></p>
            </div>
        </div>

        <div style="width: 33.33%;">
            <img src="<?php echo BASE_URL; ?>/mail_images/registered_mail/kids shoot.jpg" alt="Client with Voila Studio" style="width: 80%; height: 80%; border-radius: 5px 5px 0px 0px" />
            <div style="
            
            background:#cf205a;
          width: 80%;
          margin:0px auto;


        ">
                <p style="
            font-family:Inter;
            font-size: 14px;
            font-weight: 400;
            text-align: center;
            align-items: center;
            justify-content: center;
          "><a href="#" style=" text-decoration: none; color:white;
        ">Kids Shoot</a></p>
            </div>
        </div>

        <div style="width: 33.33%;">
            <img src="<?php echo BASE_URL; ?>/mail_images/registered_mail/flatlayshoot.jpg" alt="Client with Voila Studio"
                style="width: 80%; height: 80%; border-radius: 5px 5px 0px 0px" />
            <div style="  
            background:#cf205a;
          width: 80%;
          margin:0px auto;


        ">
                <p style="
            font-family:Inter;
            font-size: 14px;
            font-weight: 400;
            text-align: center;
            align-items: center;
            justify-content: center;
          "><a href="#" style=" text-decoration: none;  color:white;
        ">Flatlay Shoot</a></p>
            </div>
        </div>
                </div>
    </div>
    <h1 style="
        font-family:Inter;
        font-size: 20px;
        font-weight: 600;
        align-items: center;
        text-align: center;
        margin-top: 5%;
      ">
        Stay Connected
    </h1>

    <div style="    
      width: 100%;
      margin: 0px auto;
      border-radius: 44px;
      opacity: 0px;
      display: flex;
      justify-content: center;
      ">
        <p style="
          font-family:Inter;
          font-size: 14px;
          font-weight: 400;
          text-align: justify;
          padding: 3% 0%;
          color:#cf205a;
        ">
        Stay tuned to your inbox for updates, special offers, and photography from the Voila Studio team.
        </p>
    </div>

    <div style="        width: 90%;
    margin: 10px auto;
    align-items: center;
    text-align: center;">
        <p style="
          font-family:Inter;
          font-size: 14px;
          font-weight: 400;
          text-align: justify;
        ">
        If you have any questions or need help, our dedicated support team is here for you. Just email us at info@voilastudio.in, and we will assist you gladly.
        </p>
    </div>

    <div style="margin: 3%">
        <div style="text-align: center">
            <a href="#" style="
              font-family:Inter;
              font-size: 14px;
              font-weight: 400;
              margin: 0%;
              color: blue;
              padding: 0%;
            ">Terms & Conditions</a>
        </div>
        <div style="text-align: center">
            Need help?
            <a href="#" style="
              font-family:Inter;
              font-size: 14px;
              font-weight: 400;
              margin: 0%;
              color: blue;
              padding: 0%;
            ">
                &nbsp;Contact us</a>
        </div>
    </div>

    
    <div style="background-color: #e7e8e8; text-align: center; padding: 1%; width: 100%;">
       
        <p style="font-size: 14px; font-weight: 400">
            2017-2024 All Rights ReservedMade & Designed By
        </p>
        <p style="font-size: 18px; font-weight: 600; color: #f93c3c;">
            Intenim Technologies Pvt Ltd.
        </p>

        <div>
            <ul style="
              padding: 0;
              list-style: none;
              display: flex;
              text-align: center;
              justify-content: center;
            " type="none">
                <li>
                    <a href="#"><img src="<?php echo BASE_URL; ?>/images/icons/1.png" style="width: 30px ;margin: auto 5px;" /></a>
                </li>
                <li>
                    <a href="#"><img src="<?php echo BASE_URL; ?>/images/icons/2.png" style="width: 30px ; margin: auto 5px" /></a>
                </li>
                <li>
                    <a href="#"><img src="<?php echo BASE_URL; ?>/images/icons/3.png" style="width: 30px; margin: auto 5px" /></a>
                </li>
                <li>
                    <a href="#"><img src="<?php echo BASE_URL; ?>/images/icons/4.png" style="width: 30px; margin: auto 5px" /></a>
                </li>
                <li>
                    <a href="#"><img src="<?php echo BASE_URL; ?>/images/icons/5.png" style="width:30px; margin: auto 5px" /></a>
                </li>
            </ul>
        </div>
    </div>		
					
	';


	
		$content = $email_content;
		$mail->MsgHTML($content);			
			if(!$mail->Send()) {
				//echo "There is an ERROR";		
			}else{		
				//echo "mail is sent";
				
$params=array(
'token' => 'z4vvrwzrr9cf4t6v',
'to' => '9205108338',
'image' => '"<?php echo BASE_URL; ?>/mail_images/whtsapp_images/welcome_voilastudio.jpeg',
'caption' => 'hi '.$firstname.', Welcome To Voila Studio. You can choose any categories & model for book your ecommerce shoot on www.voilastudio.co.in . we have wide range of categories as well as models for shoot.
				if any face any problem, Please contact us on support.'
);


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.ultramsg.com/instance83130/messages/image",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => http_build_query($params),
  CURLOPT_HTTPHEADER => array(
    "content-type: application/x-www-form-urlencoded"
  ),
));



$response = curl_exec($curl);

$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

		
			}				
				
		}	
		}		
	}

   ?>
  
	<section class='firstdivision'>
	<div id="slider">
		<figure class="desktopbanners">
			<img class="desktopBannerfront" src="./mega_menu/img/indexpagebanner/front_banner_1.webp" alt="From Conversions to Clicks, we've got you covered">
			<img class="desktopBannerfront" src="./mega_menu/img/indexpagebanner/front_banner_2.webp" alt>
			<img class="desktopBannerfront" src="./mega_menu/img/indexpagebanner/front_banner_3.webp" alt>
			<img class="desktopBannerfront" src="./mega_menu/img/indexpagebanner/front_banner_4.webp" alt>
			<img class="desktopBannerfront" src="./mega_menu/img/indexpagebanner/front_banner_5.webp" alt>
			<img class="mobileBannerfront" src="./mega_menu/img/indexpagebanner/mobilebanner/front_banner_mobile_1.webp" alt>
			<img class="mobileBannerfront" src="./mega_menu/img/indexpagebanner/mobilebanner/front_banner_mobile_2.webp" alt>
			<img class="mobileBannerfront" src="./mega_menu/img/indexpagebanner/mobilebanner/front_banner_mobile_3.webp" alt>
			<img class="mobileBannerfront" src="./mega_menu/img/indexpagebanner/mobilebanner/front_banner_mobile_4.webp" alt>
			<img class="mobileBannerfront" src="./mega_menu/img/indexpagebanner/mobilebanner/front_banner_mobile_5.webp" alt>
		</figure>
	</div>


    <div class="specialheadings" style="margin: 10px auto 0;">
        <h2 class="headingfrontpageabc">BOOK YOUR SHOOTS</h2>
    </div> 

	<p class="subheading_regardingtittle" style="font-size:20px !important;">Book Women e-Commerce Photoshoot</p>    
	<div class="categorylikemyntraformation">
		<span class="categoryandviewallspan">
			<p class="categorynming">WOMEN</p>
			<button class="categoryviewallfunct" onclick="cat_change('2')" >VIEW ALL</button>
		</span>
	<div id="opening_cat" class="cat_modal">
		<div class="cat_content">
			<div class="cat_header">
				<img loading="lazy" class="cat_close modalcloseforcategoryimg"  src="https://img.icons8.com/fluency-systems-regular/15/multiply.png" alt="close">
			</div>
			<div class="cat_body" id="load_cat_data">
			</div>
		</div>
	</div>

<script>
        function cat_change(a){
            var a=a;
            $.ajax({
        url:"categorypage.php",
        method:"POST",
        data:{a:a},
        cache:false,
        success:function(data)
        {
            $('#load_cat_data').html(data);
        }
        });
            // alert(a);
            var cat_modal = document.getElementById("opening_cat");
            // var btnn = document.getElementById("cat_btn");
            var span = document.getElementsByClassName("cat_close")[0];
            $(location).prop('href', '#specialcategorywindows');


            cat_modal.style.display = "block";     
            span.onclick = function() {
            cat_modal.style.display = "none";
            a='';
            }
            window.onclick = function(event) {
            if (event.target == cat_modal) {
                cat_modal.style.display = "none";              
            }
            }
        }
            
        
        function filter_categories_view_all(menu){
                   
            var category	=	document.getElementById('select_filter_subcategory_view_all_'+menu).value;

                 $.ajax({
                        url:"categorypage_filter.php",
                        method:"POST",
                        data:{a:menu,category:category},
                        cache:false,
                        success:function(data)
                        {     
                            $('#load_cat_data').html(data);             
                        }
                    });  
            }
 
            </script>


    <b class="categorywithnamingbobs">
<a href="<?php echo BASE_URL; ?>/garment-photoshoot/women/western-wear/casual-shirts" class="categorywithnames">
    <img loading="lazy" class="categoryimg" src="./assets/frontpage/assets/images/Newcategory/casual_shirt.webp" alt="casual_shirt">
    <p class="categorynames">CASUAL SHIRTS</p>
</a> 
<a href="<?php echo BASE_URL; ?>/garment-photoshoot/women/western-wear/trousers-and-capris" class="categorywithnames">
    <img loading="lazy" class="categoryimg" src="./assets/frontpage/assets/images/Newcategory/formal_pant.webp" alt="formal_pant">
    <p class="categorynames">FORMAL PANTS</p>
</a>
<a href="<?php echo BASE_URL; ?>/garment-photoshoot/women/western-wear/jeans" class="categorywithnames">
    <img loading="lazy" class="categoryimg" src="./assets/frontpage/assets/images/Newcategory/jeans.webp" alt="jeans">
    <p class="categorynames">JEANS</p>
</a>
<a href="<?php echo BASE_URL; ?>/garment-photoshoot/women/western-wear/JUMPSUITS-and-playsuits" class="categorywithnames">
    <img loading="lazy" class="categoryimg" src="./assets/frontpage/assets/images/Newcategory/jumpsuit.webp" alt="jumpsuit">
    <p class="categorynames">JUMPSUIT</p>
</a>
<a href="<?php echo BASE_URL; ?>/garment-photoshoot/women/indian-and-fusion-wear/lehenga" class="categorywithnames">
    <img loading="lazy" class="categoryimg" src="./assets/frontpage/assets/images/Newcategory/lehnga.webp" alt="lehenga">
    <p class="categorynames">LEHENGA</p>
</a>
<a href="<?php echo BASE_URL; ?>/garment-photoshoot/women/western-wear/shorts-and-skirts" class="categorywithnames">
    <img loading="lazy" class="categoryimg" src="./assets/frontpage/assets/images/Newcategory/skirt.webp" alt="skirt">
    <p class="categorynames">SKIRTS</p>
</a>
<a href="<?php echo BASE_URL; ?>/garment-photoshoot/women/lingerie-and-sleepwear/lingerie-sets" class="categorywithnames">
    <img loading="lazy" class="categoryimg" src="./assets/frontpage/assets/images/Newcategory/lingerie.webp" alt="lingerie">
    <p class="categorynames">LINGERIE</p>
</a>

<a href="<?php echo BASE_URL; ?>/garment-photoshoot/women/indian-and-fusion-wear/kurtis-tunics-and-tops" class="categorywithnames mobilevi">
    <img loading="lazy" class="categoryimg" src="./assets/frontpage/assets/images/Newcategory/mobile_view/kurta.webp" alt="kurta">
    <p class="categorynames">KURTIS, TUNICS AND TOPS </p>
</a>

<a href="<?php echo BASE_URL; ?>/garment-photoshoot/women/indian-and-fusion-wear/sarees


" class="categorywithnames mobilevi">
    <img loading="lazy" class="categoryimg" src="./assets/frontpage/assets/images/Newcategory/mobile_view/sarees.webp" alt="sarees">
    <p style="margin-bottom: 20px !important;" class="categorynames">SAREES</p>
</a>

</b>   

</div>
<!-- /**********Men********** / -->

 
<p class="subheading_regardingtittle"  style="font-size:20px !important;">Book Men e-Commerce Photoshoot</p>    
   
<div class="categorylikemyntraformation">
    <span class="categoryandviewallspan">
        <p class="categorynming">MEN</p>
        <a class="categoryviewallfunct" onclick="cat_change('1')">VIEW ALL</a>
    </span>
    <b data-aos="fade-up" class="categorywithnamingbobs">
    <a href="<?php echo BASE_URL; ?>/garment-photoshoot/men/top-wear/casual-shirts" class="categorywithnames">
    <img loading="lazy" class="categoryimg" src="./assets/frontpage/assets/images/Newcategory/casual_shirtm.webp" alt="casual_shirt">
    <p class="categorynames">CASUAL SHIRTS</p>
</a> 
<a href="<?php echo BASE_URL; ?>/garment-photoshoot/men/bottom-wear/formal-trousers" class="categorywithnames">
    <img loading="lazy" class="categoryimg" src="./assets/frontpage/assets/images/Newcategory/formal_pantm.webp" alt="formal_pant">
    <p class="categorynames">FORMAL PANTS</p>
</a>
<a href="<?php echo BASE_URL; ?>/garment-photoshoot/men/bottom-wear/Jeans" class="categorywithnames">
    <img loading="lazy" class="categoryimg" src="./assets/frontpage/assets/images/Newcategory/jeansm.webp" alt="jeans">
    <p class="categorynames">JEANS</p>
</a>
<a href="<?php echo BASE_URL; ?>/garment-photoshoot/men/Indian-Festive-Wear/oversized-t_shirts" class="categorywithnames">
    <img loading="lazy" class="categoryimg" src="./assets/frontpage/assets/images/Newcategory/tshirtm.webp" alt="tshirt">
    <p class="categorynames">OVERSIZED T-SHIRTS</p>
</a>
<a href="<?php echo BASE_URL; ?>/garment-photoshoot/men/indian-festive-wear/kurtas-and-kurta-sets" class="categorywithnames">
    <img loading="lazy" class="categoryimg" src="./assets/frontpage/assets/images/Newcategory/kurtam.webp" alt="kurta">
    <p class="categorynames">KURTAS</p>
</a>

<a href="<?php echo BASE_URL; ?>/garment-photoshoot/men/top-wear/Sweatshirts-and-hoodies" class="categorywithnames">
    <img loading="lazy" class="categoryimg" src="./assets/frontpage/assets/images/Newcategory/hoddiesm.webp" alt="hoddies">
    <p class="categorynames">HOODIES</p>
</a>
<a href="<?php echo BASE_URL; ?>/garment-photoshoot/men/top-wear/formal-shirts" class="categorywithnames">
    <img loading="lazy" class="categoryimg" src="./assets/frontpage/assets/images/Newcategory/formalshirtm.webp" alt="formalshirt">
    <p class="categorynames">FORMAL SHIRTS</p>
</a>

<a href="<?php echo BASE_URL; ?>/garment-photoshoot/men/bottom-wear/track_pants-and-joggers" class="categorywithnames mobilevi">
    <img loading="lazy" class="categoryimg" src="./assets/frontpage/assets/images/Newcategory/mobile_view/trackpant.webp" alt="trackpant">
    <p class="categorynames">TRACK PANTS</p>
</a>

<a href="<?php echo BASE_URL; ?>/garment-photoshoot/men/bottom-wear/shorts" class="categorywithnames mobilevi">
    <img loading="lazy" class="categoryimg" src="./assets/frontpage/assets/images/Newcategory/mobile_view/shorts.webp" alt="shorts">
    <p style="margin-bottom: 20px !important;" class="categorynames">SHORTS</p>
</a>



</b>   

</div>


<!-- /**********Kids********** / -->
 
 
<p class="subheading_regardingtittle"  style="font-size:20px !important;">Book Kids e-Commerce Photoshoot</p>    
   
<div class="categorylikemyntraformation">
    <span class="categoryandviewallspan">
        <p class="categorynming">KIDS</p>
        <a class="categoryviewallfunct" onclick="cat_change('3')">VIEW ALL</a>
    </span>
    <b data-aos="fade-up" class="categorywithnamingbobs">
    <a href="<?php echo BASE_URL; ?>/garment-photoshoot/kids/boys-clothing/jackets-sweater-and-sweatshirts" class="categorywithnames">
    <img loading="lazy" class="categoryimg" src="./assets/frontpage/assets/images/Newcategory/sweatshirtk.webp" alt="sweatshirt">
    <p class="categorynames">SWEATSHIRTS</p>
</a>
    <a href="<?php echo BASE_URL; ?>/garment-photoshoot/kids/girls-clothing/kurta-sets" class="categorywithnames">
    <img loading="lazy" class="categoryimg" src="./assets/frontpage/assets/images/Newcategory/kurtasetk.webp" alt="kurtasetk">
    <p class="categorynames">KURTA SETS</p>
</a> 
<a href="<?php echo BASE_URL; ?>/garment-photoshoot/kids/girls-clothing/lehenga-choli" class="categorywithnames">
    <img loading="lazy" class="categoryimg" src="./assets/frontpage/assets/images/Newcategory/lehngak.webp" alt="lehnga">
    <p class="categorynames">LEHNGA</p>
</a>

<a href="<?php echo BASE_URL; ?>/garment-photoshoot/kids/boys-clothing/t-shirts" class="categorywithnames">
    <img loading="lazy" class="categoryimg" src="./assets/frontpage/assets/images/Newcategory/tshirtk.webp" alt="tshirt">
    <p class="categorynames">T-SHIRTS</p>
</a>

<a href="<?php echo BASE_URL; ?>/garment-photoshoot/kids/girls-clothing/dresses" class="categorywithnames">
    <img loading="lazy" class="categoryimg" src="./assets/frontpage/assets/images/Newcategory/dressk.webp" alt="dress">
    <p class="categorynames">DRESSES</p>
</a>
<a href="<?php echo BASE_URL; ?>/garment-photoshoot/kids/boys-clothing/ethnic-wear" class="categorywithnames">
    <img loading="lazy" class="categoryimg" src="./assets/frontpage/assets/images/Newcategory/Ethinic.webp" alt="Ethnic">
    <p  class="categorynames">ETHNIC </p>
</a>

<a href="<?php echo BASE_URL; ?>/garment-photoshoot/kids/girls-clothing/jackets-sweaters-and-sweatshirts" class="categorywithnames mobilevi">
    <img loading="lazy" class="categoryimg" src="./assets/frontpage/assets/images/Newcategory/mobile_view/sweater.webp" alt="sweater">
    <p class="categorynames">SWEATERS</p>
</a>
<a href="<?php echo BASE_URL; ?>/garment-photoshoot/kids/boys-clothing/jeans-and-trousers" class="categorywithnames">
    <img loading="lazy" class="categoryimg" src="./assets/frontpage/assets/images/Newcategory/jeansk.webp" alt="saree">
    <p class="categorynames">JEANS</p>
</a>

<a href="<?php echo BASE_URL; ?>/garment-photoshoot/kids/girls-clothing/dungarees-and-JUMPSUITS" class="categorywithnames mobilevi">
    <img loading="lazy" class="categoryimg" src="./assets/frontpage/assets/images/Newcategory/mobile_view/jumpsuit.webp" alt="jumpsuit">
    <p style="margin-bottom: 20px !important;" class="categorynames">JUMPSUITS</p>
</a>
</b>   

</div>


<!-- /**********Product********** / -->
 
 
<p class="subheading_regardingtittle"  style="font-size:20px !important;">Book Product e-Commerce Photoshoot</p>    
   
<div class="categorylikemyntraformation">
    <span class="categoryandviewallspan">
        <p class="categorynming">PRODUCT</p>
        <a class="categoryviewallfunct" onclick="cat_change('4')">VIEW ALL</a>
    </span>
    <b data-aos="fade-up" class="categorywithnamingbobs">
    <a href="<?php echo BASE_URL; ?>/jewellery/earings" class="categorywithnames">
    <img loading="lazy" class="categoryimg" src="./assets/frontpage/assets/images/Newcategory/jewelleryp.webp" alt="jewellery">
    <p class="categorynames">EARRINGS</p>
</a> 
<a href="<?php echo BASE_URL; ?>/fashion-accessories/handbags-bags-and-wallets" class="categorywithnames">
    <img loading="lazy" class="categoryimg" src="./assets/frontpage/assets/images/Newcategory/handbagsp.webp" alt="handbags">
    <p class="categorynames">HANDBAGS</p>
</a>
<a href="<?php echo BASE_URL; ?>/personal-care-grooming/wellness-and-hygiene" class="categorywithnames">
    <img loading="lazy" class="categoryimg" src="./assets/frontpage/assets/images/Newcategory/personalcarep.webp" alt="personalcare">
    <p class="categorynames">WELLNESS AND HYGIENE</p>
</a>
<a href="<?php echo BASE_URL; ?>/apparel/flatlay-shoots" class="categorywithnames">
    <img loading="lazy" class="categoryimg" src="./assets/frontpage/assets/images/Newcategory/flatlaysp.webp" alt="flatlays">
    <p class="categorynames">FLAT LAYS</p>
</a>
<a href="<?php echo BASE_URL; ?>/product-category/curtains" class="categorywithnames">
    <img loading="lazy" class="categoryimg" src="./assets/frontpage/assets/images/Newcategory/curtainsp.webp" alt="curtains">
    <p class="categorynames">CURTAINS</p>
</a>
<a href="<?php echo BASE_URL; ?>/product-category/cushions-and-covers" class="categorywithnames">
    <img loading="lazy" class="categoryimg" src="./assets/frontpage/assets/images/Newcategory/cushionp.webp" alt="cushion">
    <p class="categorynames">CUSHIONS</p>
</a>
<a href="<?php echo BASE_URL; ?>/footwear/heels" class="categorywithnames">
    <img loading="lazy" class="categoryimg" src="./assets/frontpage/assets/images/Newcategory/footwearp.webp" alt="heels">
    <p class="categorynames">HEELS</p>
</a>


<a href="<?php echo BASE_URL; ?>/product-category/furniture" class="categorywithnames mobilevi">
    <img loading="lazy" class="categoryimg" src="./assets/frontpage/assets/images/Newcategory/mobile_view/furniture.webp" alt="furniture">
    <p style="margin-bottom: 20px !important;" class="categorynames">FURNITURE</p>
</a>
<a href="<?php echo BASE_URL; ?>/footwear/sports-shoes" class="categorywithnames mobilevi">
    <img loading="lazy" class="categoryimg" src="./assets/frontpage/assets/images/Newcategory/mobile_view/footwear.webp" alt="sportshoes">
    <p style="margin-bottom: 20px !important;" class="categorynames">SPORTS SHOES</p>
</a>

</b>   

</div>

<div class="specialheadings" style="margin-top: -10px;">
    <h2 class="headingfrontpageabc">OFFERS FOR YOU</h2>

</div>

<div data-aos="fade-up"  class="offerforyouindi">
<a href="<?php echo BASE_URL; ?>/garment-photoshoot/women/western-wear/blazers-and-waistcoats" class="categorywithnamesqa">
    <img loading="lazy" class="offerimagesindi pair2" src="./assets/frontpage/assets/images/Newcategory/female_shoot_offer.webp" alt="Client with Voila Studio">
</a>
<a href="<?php echo BASE_URL; ?>/garment-photoshoot/men/top-wear/t-shirts" class="categorywithnamesqa">
    <img loading="lazy" class="offerimagesindi pair2" src="./assets/frontpage/assets/images/Newcategory/male_shoot_offer.webp" alt="Client with Voila Studio">
</a>
<a href="<?php echo BASE_URL; ?>/garment-photoshoot/kids/girls-clothing/dresses" class="categorywithnamesqa">
    <img loading="lazy" class="offerimagesindi pair2" src="./assets/frontpage/assets/images/Newcategory/kids_shoot_offer.webp" alt="Client with Voila Studio">
</a>
<a href="<?php echo BASE_URL; ?>/fashion-accessories/caps-and-hats" class="categorywithnamesqa">
    <img loading="lazy" class="offerimagesindi pair2" src="./assets/frontpage/assets/images/Newcategory/product_shoot_offer.webp" alt="Client with Voila Studio">
</a>
<a href="<?php echo BASE_URL; ?>/flooring/carpets" class="categorywithnamesqa">
    <img loading="lazy" class="offerimagesindi pair2" src="./assets/frontpage/assets/images/Newcategory/home_shoot_offer.webp" alt="Client with Voila Studio">
</a>
<a href="<?php echo BASE_URL; ?>/" class="categorywithnamesqa">
    <img loading="lazy" class="offerimagesindi pair2 marginbottomformobile" src="./assets/frontpage/assets/images/Newcategory/video_shoot_offer.webp" alt="Client with Voila Studio">
</a>
</div>


<div class="specialheadings">
    <!-- <h2 id="headingleftt" style="position: absolute; left: 100px" class="headingfrontpageabcwithstroke"> FASHION ESSENTIALS</h2> -->
    <h2 class="headingfrontpageabc">E-COMMERCE FASHION ESSENTIALS</h2>
    <!-- <h2 id="headingrightt" style="position: absolute; right: 100px" class="headingfrontpageabcwithstroke"> FASHION ESSENTIALS</h2> -->
</div>

<div data-aos="fade-up"  class="secondlimi" style="margin-top: -10px;">
<a class="desktopessen removefrommob" href="<?php echo BASE_URL; ?>/garment-photoshoot/women/western-wear/dresses" class="categorywithnamesqa three">
    <img loading="lazy" class="offerimagesindi paddingsize" src="./assets/frontpage/assets/images/Newcategory/fashion-essential-1.webp" alt="Client with Voila Studio">
</a>
<a class="desktopessen" href="<?php echo BASE_URL; ?>/jewellery/necklace-pendants-and-chains" class="categorywithnamesqa three">
    <img loading="lazy" class="offerimagesindi paddingsize" src="./assets/frontpage/assets/images/Newcategory/fashion-essential-2.webp" alt="Client with Voila Studio">
</a>
<a class="desktopessen removefrommob" href="<?php echo BASE_URL; ?>/garment-photoshoot/women/indian-and-fusion-wear/lehenga" class="categorywithnamesqa three">
    <img loading="lazy" class="offerimagesindi paddingsize" src="./assets/frontpage/assets/images/Newcategory/fashion-essential-3.webp" alt="Client with Voila Studio">
</a>
<a class="desktopessen" href="<?php echo BASE_URL; ?>/personal-care-and-grooming/skincare-bath-and-body" class="categorywithnamesqa three">
    <img loading="lazy" class="offerimagesindi paddingsize" src="./assets/frontpage/assets/images/Newcategory/fashion-essential-4.webp" alt="Client with Voila Studio">
</a>
<a class="desktopessen" href="<?php echo BASE_URL; ?>/garment-photoshoot/men/top-wear/casual-shirts" class="categorywithnamesqa three">
    <img loading="lazy" class="offerimagesindi paddingsize" src="./assets/frontpage/assets/images/Newcategory/fashion-essential-5.webp" alt="Client with Voila Studio">
</a>
<a class="desktopessen removefrommob" href="<?php echo BASE_URL; ?>/garment-photoshoot/women/western-wear/crop-tops" class="categorywithnamesqa three">  
    <img loading="lazy" class="offerimagesindi paddingsize" src="./assets/frontpage/assets/images/Newcategory/fashion-essential-6.webp" alt="Client with Voila Studio">
</a>

<a class="desktopessen" href="<?php echo BASE_URL; ?>/garment-photoshoot/women/lingerie-and-sleepwear/lingerie-sets" class="categorywithnamesqa three">
    <img loading="lazy" class="offerimagesindi paddingsize" src="./assets/frontpage/assets/images/Newcategory/fashion-essential-7.webp" alt="Client with Voila Studio">
</a>


<a class="desktopessen" href="<?php echo BASE_URL; ?>/garment-photoshoot/women/western-wear/t-shirts" class="categorywithnamesqa three">
    <img loading="lazy" class="offerimagesindi paddingsize" src="./assets/frontpage/assets/images/Newcategory/fashion-essential-8.webp" alt="Client with Voila Studio">
</a>

<a class=" desktopessen removefrommob" href="<?php echo BASE_URL; ?>/garment-photoshoot/women/indian-and-fusion-wear/lehenga-cholis" class="categorywithnamesqa three">
    <img loading="lazy" class="offerimagesindi" src="./assets/frontpage/assets/images/Newcategory/fashion-essential-9.webp" alt="Client with Voila Studio">
</a>
<a class="desktopessen" href="<?php echo BASE_URL; ?>/garment-photoshoot/men/top-Wear/jackets" class="categorywithnamesqa three">
    <img loading="lazy" class="offerimagesindi paddingsize" src="./assets/frontpage/assets/images/Newcategory/fashion-essential-10.webp" alt="Client with Voila Studio">
</a>

<a class="desktopessen removefrommob" href="<?php echo BASE_URL; ?>/garment-photoshoot/men/top-wear/suits" class="categorywithnamesqa three">
    <img loading="lazy" class="offerimagesindi paddingsize" src="./assets/frontpage/assets/images/Newcategory/fashion-essential-11.webp" alt="Client with Voila Studio">
</a>

<a class="desktopessen removefrommob"  href="<?php echo BASE_URL; ?>/garment-photoshoot/women/western-wear/co-ords" class="categorywithnamesqa three">
    <img loading="lazy" class="offerimagesindi paddingsize" src="./assets/frontpage/assets/images/Newcategory/fashion-essential-12.webp" alt="Client with Voila Studio">
</a>

</div>









<div class="specialheadings">
    <h2 id="upcomingShotdelight" class="headingfrontpageabc">UPCOMING SHOOTS</h2>
</div>


<span style="margin-right: 60px;" class="product">
    


 <?php include("index_model_calender.php"); ?>

    <span class="divisionforwomenshake">
        <!-- <a class="goingtopageanker" href="booking_calender.php">VIEW ALL</a> -->
    </span>
  
</span>

<span style="margin-right: 60px;" class="product">
  
</span>   
<section class="anaotherdivis">
<div class="specialheadings" style="margin-top: -10px;">
<h2 class="headingfrontpageabc">OUR SPECIALIZATION</h2>
</div>
<div data-aos="fade-up" class="spcialize_servces">

<a class="categoryofanker"  href="./lookbook_new.php"><img loading="lazy" class="lookbookshoot_category" src="./assets/frontpage/assets/images/Newcategory/lookbook_shoot_spec.webp" alt="lookbook_shoot"></a>
<a class="categoryofanker" href="/premium_women_new.php"><img loading="lazy" class="lookbookshoot_category" src="./assets/frontpage/assets/images/Newcategory/premium_shoot_spec.webp" alt="premium_shoot"></a>
<a class="categoryofanker" href="/outdoor_shoot.php"><img loading="lazy" class="lookbookshoot_category" src="./assets/frontpage/assets/images/Newcategory/product_shoot_spec.webp" alt="product_shoot"></a>
<a class="categoryofanker" href="./product_creative_new.php"><img loading="lazy" class="lookbookshoot_category" src="./assets/frontpage/assets/images/Newcategory/peperfry_shoot_spec.webp" alt="premium_shoot"></a>


</div>


<div class="specialheadings" style="margin-top: 0px;">
    <h2 class="headingfrontpageabc">SHOOT FOR FASHION PORTALS</h2>
    </div>
    <div class="categorywithnamingbobsforiconsupperdiv">
    <b data-aos="fade-up" class="categorywithnamingbobsforicons">
        <img loading="lazy" class="iconsformutlipleshoots" src="./assets/frontpage/assets/images/Newcategory/myntra.webp" alt="myntra">
        <img loading="lazy" class="iconsformutlipleshoots" src="./assets/frontpage/assets/images/Newcategory/ajio.webp" alt="myntra">
        <img loading="lazy" class="iconsformutlipleshoots" src="./assets/frontpage/assets/images/Newcategory/nykaa.webp" alt="myntra">
        <img loading="lazy" class="iconsformutlipleshoots" src="./assets/frontpage/assets/images/Newcategory/firstcry.webp" alt="myntra">
        <img loading="lazy" class="iconsformutlipleshoots" src="./assets/frontpage/assets/images/Newcategory/tatacliq.webp" alt="myntra">
        <img loading="lazy" class="iconsformutlipleshoots" src="./assets/frontpage/assets/images/Newcategory/jaypore.webp" alt="myntra">
</b>   
<p class="parainsideicons">
Fashion is the expression of self and freedom within a particular time, place, and context, encompassing attire, footwear, lifestyle, accessories, cosmetics, hairstyle, and body language.</p>
</div>


<div class="specialheadings">
    <h2 class="headingfrontpageabc">SHOOT FOR INDIAN MARKETPLACES</h2>
    </div>
    <div class="categorywithnamingbobsforiconsupperdiv">
    <b data-aos="fade-up" class="categorywithnamingbobsforicons">
        <img loading="lazy" class="iconsformutlipleshoots" src="./assets/frontpage/assets/images/Newcategory/amazon.webp" alt="amazon">
        <img loading="lazy" class="iconsformutlipleshoots" src="./assets/frontpage/assets/images/Newcategory/flipcart.webp" alt="flipkart">
        <img loading="lazy" class="iconsformutlipleshoots" src="./assets/frontpage/assets/images/Newcategory/mesho.webp" alt="meesho">
        <img loading="lazy" class="iconsformutlipleshoots" src="./assets/frontpage/assets/images/Newcategory/snapdeal.webp" alt="snapdeal">
        <img loading="lazy" class="iconsformutlipleshoots" src="./assets/frontpage/assets/images/Newcategory/indiamart.webp" alt="indiamart">
        <img loading="lazy" class="iconsformutlipleshoots" src="./assets/frontpage/assets/images/Newcategory/jiomart.webp" alt="jiomart">
</b>   
<p class="parainsideicons">An Indian marketplace is where sellers or vendors offer physical, virtual, or downloadable products to customers.</p>
</div>

<div class="specialheadings">
    <h2 class="headingfrontpageabc">SHOOT FOR INTERNATIONAL MARKETPLACES</h2>
    </div>
    <div class="categorywithnamingbobsforiconsupperdiv">
    <b data-aos="fade-up" class="categorywithnamingbobsforicons">
        <img loading="lazy" class="iconsformutlipleshoots" src="./assets/frontpage/assets/images/Newcategory/ebay.webp" alt="ebay">
        <img loading="lazy" class="iconsformutlipleshoots" src="./assets/frontpage/assets/images/Newcategory/etzy.webp" alt="etzy">
        <img loading="lazy" class="iconsformutlipleshoots" src="./assets/frontpage/assets/images/Newcategory/alibaba.webp" alt="alibaba">
        <img loading="lazy" class="iconsformutlipleshoots" src="./assets/frontpage/assets/images/Newcategory/walmart.webp" alt="walmart">
        <img loading="lazy" class="iconsformutlipleshoots" src="./assets/frontpage/assets/images/Newcategory/noon.webp" alt="noon">
        <img loading="lazy" class="iconsformutlipleshoots" src="./assets/frontpage/assets/images/Newcategory/zoom.webp" alt="zoom">
</b>   
<p class="parainsideicons">International marketing involves promoting products or services to audiences beyond a brand's domestic market.</p>
</div>
 
 <div style="position: relative;" class="heroimageswithwings">
<img loading="lazy" style="margin-top: 35px" data-aos="fade-up" class="bigbannertheroy" src="./assets/frontpage/assets/images/Newcategory/boy_banner.webp" alt="Client with Voila Studio">
<!-- <img loading="lazy" style="margin-top: 35px" data-aos="fade-up" class="bigbannertheroyformobile" src="./assets/frontpage/assets/images/boy_banner_mobile.webp" alt="Client with Voila Studio"> -->


<!-- <video autoplay playsinline muted loop width="100%" style="margin-top: 35px;">
  <source class="bigbannertheroy" src="./assets/frontpage/assets/images/Newcategory/boy_banner.mp4" type="video/mp4">
  <source src="./assets/frontpage/assets/images/Newcategory/boy_banner.mp4" type="video/ogg">
  </video> -->

  <section class="blinkcircledivi">
  <div class="circle">
    <a class="heroimagesunglasses" href="<?php echo BASE_URL; ?>/fashion-accessories/sunglasses-and-frames"></a>
</div>
</section>

<section class="blinkcircledivi1">
  <div class="circle">
    <a class="heroimagesunglasses" href="<?php echo BASE_URL; ?>/garment-photoshoot/women/lingerie-and-sleepwear/bra"></a>
</div>
</section>

<section class="blinkcircledivi2">
  <div class="circle">
    <a class="heroimagesunglasses" href="<?php echo BASE_URL; ?>//garment-photoshoot/women/western-wear/shorts-and-skirts"></a>
</div>
</section>


<section class="blinkcircledivi3">
  <div class="circle">
    <a class="heroimagesunglassescircle3" href="<?php echo BASE_URL; ?>/fashion-accessories/sunglasses-and-frames"></a>
</div>
</section>

<section class="blinkcircledivi4">
  <div class="circle">
    <a class="heroimagesunglassescircle3" href="<?php echo BASE_URL; ?>/garment-photoshoot/men/top-wear/t-shirts"></a>
</div>
</section>

<section class="blinkcircledivi5">
  <div class="circle">
    <a class="heroimagesunglassescircle3" href="<?php echo BASE_URL; ?>//footwear/sports-shoes"></a>
</div>
</section>
<!-- <a class="heroimagebra" href="https://voilastudio.in/model-shoot.php?id=19#category_section"></a>
<a class="heroimageundergrament" href="https://voilastudio.in/model-shoot.php?id=34#category_section"></a> -->

</div>
<div class="specialheadings spaceabove">
<!-- <h2 id="headingleftt" style="position: absolute; left: 50px" class="headingfrontpageabcwithstroke">WE ARE BEST IN </h2> -->
<h2 class="headingfrontpageabc">top shoot categories</h2>
<!-- <h2 id="headingrightt" style="position: absolute; right: 50px" class="headingfrontpageabcwithstroke">WE ARE BEST IN </h2> -->
</div>

<div data-aos="fade-up" class="spcialize_servces">
<a data-aos="flip-left" id="cardcate" href="<?php echo BASE_URL; ?>/garment-photoshoot/men/Indian-Festive-Wear/Co-ords"><img loading="lazy" class="wearebestinn" src="./assets/frontpage/assets/images/tinified/co-ords_shoot.webp" alt="Client with Voila Studio"></a>

<a data-aos="flip-left" id="cardcate" href="<?php echo BASE_URL; ?>/garment-photoshoot/women/western-wear/dresses"><img loading="lazy" class="wearebestinn" src="./assets/frontpage/assets/images/tinified/dress_shoot.webp" alt="Client with Voila Studio"></a>

<a data-aos="flip-left" id="cardcate" href="<?php echo BASE_URL; ?>/garment-photoshoot/men/top-wear/t-shirts"><img loading="lazy" class="wearebestinn" src="./assets/frontpage/assets/images/tinified/tshirt_shoot.webp" alt="Client with Voila Studio"></a>

<a data-aos="flip-left" id="cardcate" href="<?php echo BASE_URL; ?>/garment-photoshoot/women/western-wear/crop-tops"><img loading="lazy" class="wearebestinn" src="./assets/frontpage/assets/images/tinified/croptop_shoot.webp" alt="Client with Voila Studio"></a>

<a data-aos="flip-left" id="cardcate" href="<?php echo BASE_URL; ?>/apparel/ghost-shoots"><img loading="lazy" class="wearebestinn" src="./assets/frontpage/assets/images/tinified/ghost_shoot.webp" alt="Client with Voila Studio"></a>

<a data-aos="flip-left" id="cardcate" href="<?php echo BASE_URL; ?>/fashion-accessories/handbags-bags-and-wallets"><img loading="lazy" class="wearebestinn" src="./assets/frontpage/assets/images/tinified/bags_shoot.webp" alt="Client with Voila Studio"></a>

<a data-aos="flip-left" id="cardcate" href="<?php echo BASE_URL; ?>/garment-photoshoot/kids/girls-clothing/jackets-sweaters-and-sweatshirts"><img loading="lazy" class="wearebestinn" src="./assets/frontpage/assets/images/tinified/sweatshirt_shoot.webp" alt="Client with Voila Studio"></a>

<a data-aos="flip-left" id="cardcate" href="<?php echo BASE_URL; ?>/apparel/flatlay-shoots"><img loading="lazy" class="wearebestinn" src="./assets/frontpage/assets/images/tinified/flatlay_shoot.webp" alt="Client with Voila Studio"></a>
</div>

<!-- <div class="specialheadings spaceabove" style="margin: 10px auto;">
<h2 class="headingfrontpageabc">MODELS IN DEMAND</h2>
</div> -->

<?php //include("ourmodel_latest_1.php"); ?>


	



<!-- 
    <div class="specialheadings spaceabove" style="margin: 40px auto 20px !important;">
<h2 class="headingfrontpageabc">MODELS IN TOWN</h2>
</div> -->
 
 
<?php //include("modelintown_latest.php"); ?>
<!--  -->


 
 
<!--<span class="popularshoots123">
    <img loading="lazy" class='modelandproductshootimg' src="./assets/frontpage/assets/images/Newcategory/modelandproductshootbanner.webp" alt="Client with Voila Studio">
    <b class="floatingsect">
 <section data-aos="fade-up" class="added_area_for_links">
 <div class="added_wrapper">
    <h2 class="headingonlinking">Model</h2>
    <a href="https://voilastudio.in/model-shoot.php" class="ty-compact-list">Female </a>
    <a href="https://voilastudio.in/male-model-shoot.php" class="ty-compact-list">Male </a>
    <a href="https://voilastudio.in/kids-shoot.php" class="ty-compact-list">Kids</a>
    <a href="https://voilastudio.in/lookbook.php" class="ty-compact-list">Lookbook </a>
    <a href="https://voilastudio.in/wedding.php" class="ty-compact-list">Wedding </a>
    <a href="https://voilastudio.in/female-model-style-shoot.php" class="ty-compact-list">Female Style </a>
    <a href="https://voilastudio.in/male-style-shoots.php" class="ty-compact-list">Male Style </a>
    <a href="https://voilastudio.in/female-model-style-shoot.php#lingerie_style" class="ty-compact-list">Lingerie </a>
    <a href="https://voilastudio.in/male-style-shoots.php#t-shirt_style" class="ty-compact-list">Casual t-shirt</a>
    <a href="https://voilastudio.in/ghost-shoot.php" class="ty-compact-list">Ghost </a>
    <a href="https://voilastudio.in/model-shoot.php#saree_photoshoot" class="ty-compact-list">Saree </a>
  </div>

  <div class="added_wrapper1">
    <h2 class="headingonlinking">Product Shoot</h2>
    <a href="https://voilastudio.in/product_creative.php#footwear" class="ty-compact-list1">Footwear </a>
    <a href="https://voilastudio.in/product.php#Jewellery" class="ty-compact-list1">Jewellery </a>
    <a href="https://voilastudio.in/fashion-accessories.php" class="ty-compact-list1">Fashion Accessories</a>
    <a href="https://voilastudio.in/product.php#sunglasses" class="ty-compact-list1">Sunglasses </a>
    <a href="https://voilastudio.in/product_creative.php" class="ty-compact-list1">Product Creative </a>
    <a href="https://voilastudio.in/product_creative.php#home_decor" class="ty-compact-list">Home Decor </a>
    <a href="https://voilastudio.in/product_creative.php#medicine" class="ty-compact-list">Medicine </a>
    <a href="https://voilastudio.in/product.php#fmcg" class="ty-compact-list">FMCG 
    <a href="https://voilastudio.in/product.php#perfumes" class="ty-compact-list">Perfume </a>
    <a href="https://voilastudio.in/product_creative.php#food_creative" class="ty-compact-list">Food creative </a>
    <a href="https://voilastudio.in/product.php#wallets_purse" class="ty-compact-list">Purse & Wallet </a>

  </div>
 
</section> -->
</b>
<div id="showmorepositive">
  <a  class="show-more">Show more</a>
</div>
</span>
<div class="specialheadings spaceabove">
<!-- <h2 id="headingleftt" style="position: absolute; left: 50px" class="headingfrontpageabcwithstroke">OUR VERTICALS</h2> -->
<h2 class="headingfrontpageabc">OUR VERTICALS</h2>
<!-- <h2 id="headingrightt" style="position: absolute; right: 50px" class="headingfrontpageabcwithstroke">OUR VERTICALS</h2> -->
</div>
<div class="verticalimglinks">
<img loading="lazy" data-aos="fade-up" style="margin-top: 0" class="bigbannertheroy" src="./assets/frontpage/assets/images/Newcategory/verticals.webp" alt="Client with Voila Studio">
<a target="_blank" class="voilabizlinkimg" href="https://voilabiz.com/"></a>
<a target="_blank" class="voilastudiolinkimg" href="/"></a>
<a target="_blank" class="voilakartlinkimg" href="https://voilakart.com/"></a>
<a target="_blank" class="voilaretaillinkimg" href="https://voilaretail.com/"></a>
</div>
<img loading="lazy" data-aos="fade-up" class="bigbannertheroyformobile" src="./assets/frontpage/assets/images/verticalmobile.webp" alt="Client with Voila Studio">


<img loading="lazy" style="margin-top: 40px;" data-aos="fade-up" class="bigbannertheroy" src="./assets/frontpage/assets/images/Newcategory/girlbanner.webp" alt="Client with Voila Studio">
<!-- <img loading="lazy" style="margin-top: 35px" data-aos="fade-up" class="bigbannertheroyformobile" src="./assets/frontpage/assets/images/female_banner_mobile.webp" alt="Client with Voila Studio"> -->

<div class="specialheadings spaceabove">
<!-- <h2 id="headingleftt" style="position: absolute; left: 300px" class="headingfrontpageabcwithstroke">CLIENTS</h2> -->
<h2 class="headingfrontpageabc">CLIENTS</h2>
<!-- <h2 id="headingrightt" style="position: absolute; right: 300px" class="headingfrontpageabcwithstroke">CLIENTS</h2> -->
</div>
 
	  
<div class="marquee-wrapper">
  <div class="container_marquee">
      <div class="marquee-block">
          <div class="marquee-inner to-left">
              <span>
             
                <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/1.webp" alt="Client with Voila Studio">
                </div>
                <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/2.webp" alt="Client with Voila Studio">
                  </div><div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/4.webp" alt="Client with Voila Studio">
                  </div><div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/3.webp" alt="Client with Voila Studio">
                  </div><div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/5.webp" alt="Client with Voila Studio">
                  </div><div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/6.webp" alt="Client with Voila Studio">
                  </div>
                  <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Sansuilogo.webp" alt="Client with Voila Studio">
                  </div>
                  <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/7.webp" alt="Client with Voila Studio">
                  </div><div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/8.webp" alt="Client with Voila Studio">
                  </div><div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/9.webp" alt="Client with Voila Studio">
                  </div><div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/10.webp" alt="Client with Voila Studio">
                  </div><div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/11.webp" alt="Client with Voila Studio">
                  </div><div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/12.webp" alt="Client with Voila Studio">
                  </div><div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/13.webp" alt="Client with Voila Studio">
                  </div><div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/14.webp" alt="Client with Voila Studio">
                  </div><div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/15.webp" alt="Client with Voila Studio">
                  </div><div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/16.webp" alt="Client with Voila Studio">
                  </div><div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/17.webp" alt="Client with Voila Studio">
                  </div><div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/18.webp" alt="Client with Voila Studio">
                  </div><div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/19.webp" alt="Client with Voila Studio">
                  </div><div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/20.webp" alt="Client with Voila Studio">
                  </div><div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/21.webp" alt="Client with Voila Studio">
                  </div><div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/22.webp" alt="Client with Voila Studio">
                  </div>
                 

              <!-- old logos -->
                  <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/18 attitude.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/3Buddy.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/aderlin.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Aiwa.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Aksa.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/alavya.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Allen Cooper.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/AM_SWAN.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Anaita.webp" alt="Client with Voila Studio">
                  </div>

      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/anaya-jewellery.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Anubhutee.webp" alt="Client with Voila Studio">
                  </div>

        <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Apella.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/aquatan.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Arbour.webp" alt="Client with Voila Studio">
                  </div>
        <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Arivo.webp" alt="Client with Voila Studio">
                  </div>
        <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Asian.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/auratrend.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Boldfit.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/BoldMiss.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/broadstar.webp" alt="Client with Voila Studio">
                  </div>
        <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Callino-London.webp" alt="Client with Voila Studio">
                  </div>

      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/chakudee.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/clothzy.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/CKM fashions.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Coco leni.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Craftsvilla.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Cupid.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Dastoor.webp" alt="Client with Voila Studio">
                  </div>
        <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/dhyeyfashion.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/divination.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/dnsretail.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Dida Sports.webp" alt="Client with Voila Studio">
                  </div>
        <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/epulgena.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/ESSQUE.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/fabviva.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/fashionritmo.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/FibreWorld.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Githaan (2).webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Globon Impex.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/harrygral.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/hemkunt.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/hetvi.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/humble.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Happy Matty.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Hemkunt Industries.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Hencemade.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Hero Electronix.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/HK Color of Fashion.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Hosta Homes.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Hot and Bold.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Indiankala 4 U.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Indikonic.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Indus Valley.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/ISAM fashion.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/jcb.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Jaggery.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Jillani Agate Gems.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/JilMil.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/kargwalsfab.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/khumaar.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/kotty.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Kalpraag.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Kiya.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Kool Kidz.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/lacosta.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/leatherretail.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/longwalk.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/loremginzo.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/malachi.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/mallepula.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/marc_loire.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/mclothing.webp" alt="Client with Voila Studio">
                  </div>

              </span>
    </div>
      </div>
  </div>
</div>



<div class="marquee-wrapper1">
  <div class="container_marquee1">
      <div class="marquee-block1">
          <div class="marquee-inner to-right">
    <span>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/mclothing.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/mingley.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/minutiae.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/miracolos.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/moda-x.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/molcha.webp" alt="Client with Voila Studio">
                  </div>

      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Magazine Cafe.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Majestic Man.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Miss Rose.webp" alt="Client with Voila Studio">
                  </div>

      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/newlogo.webp" alt="Client with Voila Studio">
                  </div><div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/nukapewala.webp" alt="Client with Voila Studio">
                  </div><div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/ozanoo.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/p_d.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/panchhi.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/parika.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Parth Handicrafts.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Petal Home.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Presto.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Print Octopus.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Probus.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/qone.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/raano.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/rajoria-instyle.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/rajoria.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/resust.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/rf.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Rediscover Fashion.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/River of Design Jeans.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/sensations.webp" alt="Client with Voila Studio">
                  </div>
                 
                  <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/silgo.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/sitaram.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/skavij.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/soliaura.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/soratia.webp" alt="Client with Voila Studio">
                  </div>
      
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Salute iWorld.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Scherico.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Shirt Theory.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Sojanya.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Sttavoss.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Suti.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Swadesi Stuff (2).webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/toffcraft.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/tom_hiddle.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/tt.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/The Billbergia.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Thesto.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Trishona (2).webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/urritopsis.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/UCB.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/valenclub.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/vasu.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/ve.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/voxati.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/vredevogel.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Vaanicreation (2).webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Vastra Ville.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Vishal Mega Mart.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/Vstar.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/wicked-stitch.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/wyfees.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/xelooks.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/yb.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/yuri.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/zamour.webp" alt="Client with Voila Studio">
                  </div>
      <div class="marquee-item">
                      <img loading="lazy" class="marquee_images" src="./best_In_Images/logos/zeroline.webp" alt="Client with Voila Studio">
                  </div>
              </span>
          </div>
      </div>
  </div>
</div><!-- <iframe src="./client_logos.html" frameborder="0"></iframe> -->

   <!-- Our client section-end-->




<div class="specialheadings spaceabove">
<!-- <h2 id="headingleftt" style="position: absolute; left: 270px" class="headingfrontpageabcwithstroke">PARTNERS</h2> -->
<h2 class="headingfrontpageabc">PARTNERS</h2>
<!-- <h2 id="headingrightt" style="position: absolute; right: 270px" class="headingfrontpageabcwithstroke">PARTNERS</h2> -->
</div>

<video autoplay playsinline muted loop width="100%" style="margin-top: 0px;" class="videofoedesktop">
  <source class="bigbannertheroy" src="./assets/frontpage/assets/images/Newcategory/partner_banner.mp4" type="video/mp4">
  <source src="./assets/frontpage/assets/images/Newcategory/partner_banner.mp4" type="video/ogg">
  </video>

  <!-- <img loading="lazy" data-aos="fade-up" class="bigbannertheroyformobile" src="./assets/frontpage/assets/images/partner_banner_mobile.webp" alt="Client with Voila Studio"> -->
  
  <!--
-->

<!-- <p> hoiii this is testting.... </p> -->


</section>

</section>

<style>
   

    #toggleButton {
      position: fixed;
      top: 48px !important;
      left: 0px !important;
      z-index: 9999 !important;
      display: none; /* Initially hidden */
      /* border:1px solid #8a51b5; */
    }
        
    a {
        box-shadow : none !important;
    }

    .boldess {
    font-weight: 700;
    font-size: 13px;
    color: #b1b1b1 !important;

    }
    p.cal_seo {
    color: #b9b9b9 !important;
    padding: 2px 10px;
    }
    .footer_content {
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        font-size: 12px;
        margin-top: 0%;
        color: rgb(54, 48, 48);
    }
    .footer_content2 {
     
        width: 100%;
        font-size: 12px;
        margin-top: 0%;
        color: rgb(54, 48, 48);
        text-align: justify;
    }

    .footer_content>li {
        width: 100%;
        padding: 1% 2%;
        text-align: justify;
    }

    .content {
        width: 30%;
        flex: 1 1 33%;
    }

    @media (max-width: 768px) {
        .content {
            flex: 1 1 100%;
        }

    }
    
    .contact-us-container {
        position: fixed;
        bottom: 2%;
        right: 2%;
        display: flex;
        flex-direction: column-reverse;
        align-items: center;
    }

    .contact-icon {
        width: 35px;
        height: 35px;
        margin: 3px 0;
        cursor: pointer;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
    }

    .contact-icon img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .contact-icon.main-icon {
        opacity: 1;
        visibility: visible;
    }

    .contact-icon.show {
        opacity: 1;
        visibility: visible;
    }
    .carousel-container {
        width: 95%;
        margin: auto;
        overflow: hidden;
        position: relative;
    }
    .carousel-slide {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }
    .city_icon {
        min-width: 10%;
        box-sizing: border-box;
        text-align: center;
        padding: 10px;
    }
    .city_icon img {
        width: 100%;
        border: 1px solid rgb(182, 180, 180);
    }
    .city_name {
        font-size: 12px;
    }
    .carousel-button {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        border: none;
        padding: 5px;
        cursor: pointer;
    }
    .carousel-button.prev {
        left: 0;
    }
    .carousel-button.next {
        right: 0;
    }
    @media only screen and (max-width: 800px) {
        .city_icon {
            min-width: 25%;
        }
    }

    
      
    </style>
<!-- <div  style="width:22px">
    <img class="sidebar_line_extra shape"  id="shape" src="./mega_menu/img/indexpagebanner/select_category_sideLine.png" 
    alt="Client with Voila Studio"  style="width:22px">
</div>

<div id="toggleButton"  >
<img src="./arrow.png" alt="Client with Voila Studio" style=" width:30px">
</div> -->


    <div class="footer_content2">
        <h2  style="text-align: center; font-size: 16px; font-weight: 600;">Why choose VOILA Studio for your ecommerce photoshoots</h2>
        <h4 style="text-align: center; color: brown; font-size: 14px;">Think Ecommerce Think VOILA</h4>

        <p style="padding:0% 2%;" class="monstor">At VOILA Studio, professionalism is our hallmark. With skilled photographers, makeup artists, and stylists,
            we guarantee flawless shoots. We specialize in capturing ideal angles, lighting, and composition, tailored
            for top e-commerce platforms such as Amazon, Myntra, and Flipkart. Renowned as a premier product photography
            service, we deliver detailed images to enhance product visibility effectively.
        </p>
    </div>

    <ul type="none">
        <div style="text-align: center; font-size: 22px;">
            <h3 style="font-size: 15px;text-align:left ;padding:0% 2% ">Here &apos;s what you can expect when you are partner with us: </h3>
            <!-- <h4 style="margin: 0%;">Our Pillars</h4> -->
        </div>
        <span class="footer_content">
            <li class="content">
            <h5><strong>Top Quality Checks</strong></h5>
            <p class="monstor">Our eCommerce  photoshoot services guarantee top-notch quality from concept to execution, ensuring every image meets high standards, leaving a lasting impression on your customers.</p>
            </li>
            
            <li class="content">
                <h5><strong>Customized Photography Techniquess</strong></h5>
                <P class="monstor">Enhance your brand with these photography techniques for ecommerce shoots. Our studio offers premium
                    ecommerce product photography services, including custom lighting setups. Stand out on platforms
                    like Flipkart, Amazon, Myntra, and more.</P>
            </li>
            <li class="content">
                <h5><strong>Innovative Imagery Creation</strong></h5>
                <p class="monstor"> Our experienced team of e-commerce photographers and designers infuse each shoot with innovative
                    concepts, producing captivating visuals that not only attract attention but also boost sales for
                    your brand.</p>
            </li>
            <li class="content">
                <h5><strong>Expert Brand Photography</strong></h5>
                <p class="monstor"> Partner with VOILA Studio for premium ecommerce product photography services. Our professional
                    photographers create compelling visuals aligned with your brand's vision. Keep photography in-house
                    for consistent quality.</p>
            </li>
            <li class="content">
                <h5><strong>Advanced Shooting Environment</strong></h5>
                <p class="monstor"> Step into our cutting-edge international e-commerce studio, tailored for high-quality photoshoots.
                    Perfect for brands like Amazon and Myntra, our studio ensures top-notch results, meeting the
                    standards of leading e-commerce platforms.</p>
            </li>
            <li class="content">
                <H5><strong>Advanced Visual Solutions</strong></H5>
                <P class="monstor">Our ecommerce photography services, conducted in top-notch studios, utilize advanced technology to
                    capture products with unparalleled clarity and detail.</P>
        </li>
          
         
        </span>
        <H4 style="text-align:center; margin-bottom:0px"><strong>Our services</strong></H4>
        <span class="footer_content" style="font-weight:400">
            <li class="">	
                   <p class="monstor">     Flipkart eCommerce Photoshoot Studio
                    |   Amazon eCommerce Photoshoot Studio
                    |	Myntra eCommerce Photoshoot Studio
                    |	Ajio eCommerce Photoshoot Studio
                    |	Meesho eCommerce Photoshoot Studio
                    |	TataCliq eCommerce Photoshoot Studio
                    |	Alibaba eCommerce Photoshoot Studio
                    |	Professional eCommerce Photoshoot Company in India
                    |	Professional Ecommerce Photoshoot Company Gurgaon
                    |	Best eCommerce Photoshoot Studio Delhi
                    |	Best Product eCommerce Photography Gurgaon
                    |	International eCommerce Photoshoot Studio Gurgaon
                    |	Fashion eCommerce Photography Gurgaon
                    |	Lookbook Photoshoot in Delhi NCR
                    |	360 Degree Product Photoshoot services Delhi
                    |	Best Model Shoot for eCommerce Studio
                    |	Best Female Models eCommerce Shoot
                    |	Best Male Models eCommerce Shoot
                    |	Best Kids Model eCommerce Services
                    |	Best Plus Size Model Photoshoots
                    |	Ghost Photoshoot Services
                    |	Pepperfry Photoshoots
                    |	Best Western Wear eCommerce Photoshoots
                    |	Best Home & Furnishing eCommerce Photoshoots
                    |	Best Video Shoots for eCommerce
                    |	Best Premium eCommerce Photoshoots Studio
                    |	Best Style eCommerce Photoshoots Studio
                    |	Best Basic Ecommerce Photoshoots Studio
                    |	Best Flatlay eCommerce Photoshoots Services
                    |	Best White eCommerce Photoshoots</p>
            </li>
        </span>
    </ul>
   
    <div style="padding:0% 2%;  text-align: justify;">
        <H4 style="text-align:center"><strong>Popular searches </strong></H4>
            <span class="footer_content" style="font-weight:400">
            <p class="monstor"> e-Commerce photography | e-commerce shoot services near me | photography services for ecommerce | e-commerce photoshoot services in Delhi-Ncr | e-Commerce shoot in Gurgoan | product photography for e-Commerce | Professional e-Commerce photography studio | Fashion Photography in Delhi| Best Product photographer | e-Commerce product photography service | e-Commerce photoshoot in Surat | e-commerce photoshoot in Ahmedabad | e-commerce photoshoot in Mumbai | e-commerce photoshoot in Jaipur | e-commerce photoshoot in Ludhiana | e-commerce photoshoot in Tripura | ecommerce photoshoots in Bangalore </p>           </span>

            <br>
            <H4 style="text-align:center"><strong>Popular Shoots  </strong></H4>
            <span class="footer_content" style="font-weight:400">
            <p class="monstor">  Ajio photoshoot | TataCliq e-commerce photoshoot | plus size models shoots | furniture photoshoot | female model picture | saree model photoshoot | footwear photoshoot | western dress photoshoot model | top male international models India | Flipkart e-commerce photoshoot studio | Amazon e-commerce photoshoot studio | Myntra e-commerce photoshoot studio | Ajio e-commerce photoshoot studio | Lookbook shoots | Premium ecommerce photoshoots | Style shoots | Jewellery photoshoots | Furniture Photoshoots | Electronics product photoshoots | Pepperfry Photoshoots </p>
            </span>
 <br>
            <H4 style="text-align:center"><strong>Our Best Shoots  </strong></H4>
            <span class="footer_content" style="font-weight:400">
            <p class="monstor">Co-ords shoot | Dresses shoots | T-shirts shoot | Crop-top shoots | Ghost shoots | Bags shoot | Flatlay shoots | Sweatshirts shoot | Hanger shoots | Style shoots | Sneakers shoots | Watches shoot | Clothing sets shoot | Jeans shoots | Lehenga shoots | Sunglasses shoots | Shorts shoot | Party wear shoots | Sarees shoot | Ethnic wear shoots | Formal shirt shoots | Casual shirt shoots | Sweaters shoot | Summer wear shoots | Flip flop shoots | Sandals shoot | Casual shoes shoot </p>
            </span>

           <br>
            <H4 style="text-align:center; margin-bottom:0px"><strong> We Serves Across the Country   </strong></H4>
            <span class="footer_content" style="font-weight:400">
                        <h5><strong>National: </strong></h5>
            <p class="monstor">Faridabad | Ghaziabad | Ambala | Amritsar | Chandigarh | Punjab | Kanpur | Hyderabad | Agra | Nagpur | Gwalior | Bhopal | Lucknow | Jalpaiguri | Cuttack | Gorakhpur | Aligarh | Kota| Purnia | Jabalpur | Bareilly | Maharashtra | Pune | Vadodara | Rajkot | Bharuch | Ankleshwar | Gandhidham | Bhavnagar | Jamnagar | Vapi| Kolkata | West Bengal | Durgapur | Haldia | Chennai | Tamil Nadu | Coimbatore | Madurai | Tiruchirappalli | Salem | Tirupur | Bengaluru | Karnataka | Mangaluru | Mysuru | Hubli-Dharwad | Belagavi | New Delhi | Haryana | Panipat | Sonipat | Panchkula | Varanasi | Meerut | Moradabad | Allahabad | Jalandhar | Patiala | Mohali | Indore | Raipur | Bhilai | Bhubaneswar | Rourkela | Paradeep | Telangana | Warangal | Vishakhapatnam | Vijayawada | Guntur | Rajahmundry | Nellore | Tirupati | Patna | Muzaffarpur | Gaya | Ranchi | Jamshedpur | Bokaro | Dhanbad | Dehradun | Haridwar | Rudrapur | Rajasthan | Jodhpur | Udaipur | Bhiwadi | Alwar | Bikaner | Guwahati | Assam | Imphal | Manipur  | Shillong | Meghalaya.  
</p></span>

    <div style="display: flex; gap: 12px;" class=" overflow_scroll">
        <div class="flex_none">
            <img src="./city icons/Ludhiana.jpg" alt="Ludhiana" class="country_img_width">
        </div>
        <div class="flex_none">
            <img src="./city icons/Mumbai.jpg" alt="Ludhiana" class="country_img_width">

        </div>
        <div class="flex_none">
            <img src="./city icons/Noida.jpg" alt="Ludhiana" class="country_img_width">
        </div>
        <div class="flex_none">
            <img src="./city icons/Agra.jpg" alt="Ludhiana" class="country_img_width">
        </div> 
           <div class="flex_none">
            <img src="./city icons/Bangalore.jpg" alt="Ludhiana" class="country_img_width">
        </div>   
         <div class="flex_none">
            <img src="./city icons/Chennai.jpg" alt="Ludhiana" class="country_img_width">
        </div>    
        <div class="flex_none">
            <img src="./city icons/Delhi.jpg" alt="Ludhiana" class="country_img_width">
        </div> 
           <div class="flex_none">
            <img src="./city icons/Gurgaon.jpg" alt="Ludhiana" class="country_img_width">
        </div>    
          <div class="flex_none">
            <img src="./city icons/Hyderabad.png" alt="Ludhiana" class="country_img_width">
        </div> 
     </div> 
  

            <br>
            <span class="footer_content" style="font-weight:400">
            <h5><strong>International: </strong></h5></span>
         <p class="monstor">
         China | USA | Vietnam | Germany | Canada | UK | Bangladesh | Kenya</p>     
    <!-- <div class="carousel-container"> -->

  
    <!-- </div> -->

<!-- 
<div>
    <div class="contact-us-container">
        <div class="contact-icon main-icon" onclick="toggleContacts()">
            <img src="./assets/img/contact.png" alt="Contact Us">
        </div>
        <div class="contact-icon whatsapp-icon">
            <a href="https://wa.me/9821554548"><img src="./assets/img/Whatsapp.png" alt="WhatsApp"></a>
        </div>
        <div class="contact-icon email-icon">
            <a href="mailto:info@voila.com"><img src="./assets/img/mail.png" alt="Email"></a>
        </div>
        <div class="contact-icon phone-icon">
        <a  href="sms:+919821554548"><img src="./assets/img/Chat.png" alt="Phone"></a>
        </div>
        <div class="contact-icon phone-icon">
        <a href="javascript:void(Tawk_API.toggle())" style="color:red;"> <img src="./assets/img/Chatboticon.png" alt="Phone"> </a>
        </div>
    </div>
</div> -->
         
<div style="display: flex; gap: 12px;" class=" overflow_scroll">
        <div class="flex_none">
            <img src="https://voilastudio.in/International/USA.webp" alt="Ludhiana" class="country_img_width">
        </div>
        <div class="flex_none">
            <img src="https://voilastudio.in//International/UK.webp" alt="Ludhiana" class="country_img_width">

        </div>
        <div class="flex_none">
            <img src="https://voilastudio.in//International/Vietnam.webp" alt="Ludhiana" class="country_img_width">
        </div>
        <div class="flex_none">
            <img src="https://voilastudio.in/International/Bangladesh.webp" alt="Ludhiana" class="country_img_width">
        </div>    <div class="flex_none">
            <img src="https://voilastudio.in/International/Germany.webp" alt="Ludhiana" class="country_img_width">
        </div>    <div class="flex_none">
            <img src="https://voilastudio.in/International/Kenya.webp" alt="Ludhiana" class="country_img_width">
        </div>    <div class="flex_none">
            <img src="https://voilastudio.in/International/China.webp" alt="Ludhiana" class="country_img_width">
        </div>    <div class="flex_none">
            <img src="https://voilastudio.in/International/Canada.webp" alt="Ludhiana" class="country_img_width">
        </div>   
    </div>
<script>
        const slide = document.querySelector('.carousel-slide');
        const images = document.querySelectorAll('.carousel-slide .city_icon');
        const prevButton = document.querySelector('.carousel-button.prev');
        const nextButton = document.querySelector('.carousel-button.next');

        let counter = 1;
        const size = images[0].clientWidth;

        // Clone first and last elements
        const firstClone = images[0].cloneNode(true);
        const lastClone = images[images.length - 1].cloneNode(true);

        firstClone.id = 'first-clone';
        lastClone.id = 'last-clone';

        slide.appendChild(firstClone);
        slide.insertBefore(lastClone, images[0]);

        slide.style.transform = 'translateX(' + (-size * counter) + 'px)';

        function updateSlidePosition() {
            slide.style.transform = 'translateX(' + (-size * counter) + 'px)';
        }

        function moveToNextSlide() {
            if (counter >= images.length) return;
            slide.style.transition = 'transform 0.5s ease-in-out';
            counter++;
            updateSlidePosition();
        }

        function moveToPrevSlide() {
            if (counter <= 0) return;
            slide.style.transition = 'transform 0.5s ease-in-out';
            counter--;
            updateSlidePosition();
        }

        nextButton.addEventListener('click', () => {
            moveToNextSlide();
        });

        prevButton.addEventListener('click', () => {
            moveToPrevSlide();
        });

        slide.addEventListener('transitionend', () => {
            if (images[counter].id === 'first-clone') {
                slide.style.transition = 'none';
                counter = 1;
                updateSlidePosition();
            }
            if (images[counter].id === 'last-clone') {
                slide.style.transition = 'none';
                counter = images.length - 2;
                updateSlidePosition();
            }
        });

        setInterval(() => {
            moveToNextSlide();
        }, 5000);
    </script>
<script>
  
    </script>
      <!-- function toggleContacts() {
    const contactIcons = document.querySelectorAll('.contact-icon');
    contactIcons.forEach(icon => {
        if (!icon.classList.contains('main-icon')) {
            icon.classList.toggle('show');
        }
    });
} -->

<!-- <script src="./assets/frontpage/assets/script.js"></script> -->
<!-- <script src="mega_menu_new/script.js"></script> -->
<script src='https://unpkg.com/aos@2.3.0/dist/aos.js'>
</script><script  src="./assets/frontpage/animations/script.js"></script>

 <!-- <img src="<?php echo BASE_URL; ?>/siteloader/siteloader_gif.gif"
        alt="logo" /> -->
         
    <!-- <script>
        document.onreadystatechange = function () {
            if (document.readyState !== "complete") {
                document.querySelector(
                    "body").style.visibility = "hidden";
                document.querySelector(
                    "#loader").style.visibility = "visible";
            } else {
                document.querySelector(
                    "#loader").style.display = "none";
                document.querySelector(
                    "body").style.visibility = "visible";
            }
        };
    </script> -->

	<!-- <script>
			document.addEventListener("DOMContentLoaded", function () {
        var shape = document.querySelector(".shape");
        var lastScrollPosition = 0;

        function handleScroll() {
            var currentScrollPosition = window.scrollY || window.pageYOffset;
            var scrollDirection = currentScrollPosition > lastScrollPosition ? 'down' : 'up';
            
            if (window.innerWidth < 600 && currentScrollPosition > 100) {
                if (scrollDirection === 'down') {
                    shape.style.left = (-2 - currentScrollPosition / 100) + "%";
                } 
               
            } else if (window.innerWidth < 600 && currentScrollPosition <= 100) {
                shape.style.left = "-10px"; 
            }
            
            lastScrollPosition = currentScrollPosition;
        }

        window.addEventListener("scroll", handleScroll);
        window.addEventListener("resize", handleScroll);
    });
	</script> -->


    <script>
    document.addEventListener("DOMContentLoaded", function () {
        var shape = document.getElementById("shape");
        var toggleButton = document.getElementById("toggleButton");
        var toggleButtonImg = toggleButton.querySelector("img");

        // Show image for 2 seconds when the page loads
        setTimeout(function() {
            shape.style.left = "-10%";
        }, 5000);

        // Show button after 2 seconds
        setTimeout(function() {
            toggleButton.style.display = "block";
        }, 5000);

        function toggleImage() {
            if (shape.style.left === "-10%") {
                shape.style.left = "0%";
                toggleButtonImg.src = "./close.png"; // Change to your close button image
            } else {
                shape.style.left = "-10%";
                toggleButtonImg.src = "./arrow.png"; // Change back to your original image
            }
        }

        // Toggle image visibility on button click
        toggleButton.addEventListener("click", toggleImage);

        // Toggle image visibility on image click
        shape.addEventListener("click", toggleImage);
    });
</script>
    <?php include("newfooter.php"); ?>


</body>
</html>


<!-- <script>

$("#modal_button").click(function(){
    $("#model_Modal").modal();
  });
  
  
  </script> -->




