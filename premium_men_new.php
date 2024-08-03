<?php

////    collection detail page at live page  /// 

ob_clean();

error_reporting(0);

session_start();

require_once("analytics.php");

// include("menu_test.php");

include('db_config/base_url.php');
include('db_config/db_config.php');

?>

<!-- <img class="stage" src="assets/img/indexpagebanner/detail_stage_3.webp" alt="">
   <img class="mobilestage" src="assets/img/indexpagebanner/mobilebanner/mobile_stage_3.webp" alt="">

    <style>
        .stage {
            width: 100%;
        }
        .mobilestage {
            display: none;
        }

        @media screen and (max-width: 600px) {
        .stage {
            width: 100%;
            display: none;
        }
        .mobilestage {
            display: block;
        }
        }
    </style> -->

<!DOCTYPE html>
<html lang="zxx">
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>



<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<title><?php echo $seo_title; ?></title>
<link rel="icon" type="image/x-icon" href="./assets/img/favicon.png">


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="<?php echo $seo_keywords; ?>">
<meta name="Description" content="<?php echo $seo_desc; ?>">
<link rel="canonical" href="https://voilastudio.co.in/" />
<meta property="og:locale" content="en_US">
<meta property="og:type" content="website">
<meta property="og:title" content=" Professional Ecommerce Photography Studio in Delhi, Gurgaon, Noida, Ghaziabad | Call us 9810554548">
<meta property="og:description" content=" Voila Studio, A leading photoshoot studio specialized in e-commerce product photography, model photoshoot near me, Myntra Fashion photography in Delhi, Gurgaon, Noida, Ghaziabad.">
<meta property="og:url" content=" https://voilastudio.co.in/">
<meta property="og:site_name" content="Voila Studio">
<meta property="og:image" content="https://voilastudio.co.in/images/logo.png ">
<meta property="og:image:secure_url" content="https://voilastudio.co.in/images/logo.png ">
<meta property="og:image:width" content="600">
<meta property="og:image:height" content="512">
<meta property="og:image:alt" content="E-commerce Photography Services in Delhi, Gurugram, Noida, Faridabad">
<meta property="og:image:type" content="image/png">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content=" Professional Ecommerce Photography Studio in Delhi, Gurgaon, Noida, Ghaziabad | Call us 9810554548">
<meta name="twitter:description" content=" Voila Studio, A leading photoshoot studio specialized in e-commerce product photography, model photoshoot near me, Myntra Fashion photography in Delhi, Gurgaon, Noida, Ghaziabad.">
<meta name="twitter:image" content="https://voilastudio.co.in/images/logo.png ">


<link rel="stylesheet" href="./assets/css/collection.css" type="text/css" media="all" />
<link rel="stylesheet" href="./assets/css/collectiondetail.css" type="text/css" media="all" />
<link rel="stylesheet" href="./assets/css/corousel.css" type="text/css" media="all" />
<link rel="stylesheet" href="./assets/css/togglebutton.css" type="text/css" media="all" />
<!-- menu Css  -->


	<link rel="icon" type="image/x-icon" href="./assets/img/favicon.png">
    <link rel="stylesheet" href="./frontpage/assets/style.css">
    <link rel="stylesheet" href="../css/our_client.css" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://unpkg.com/aos@2.3.0/dist/aos.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="./assets/css/header.css">
	<link rel="stylesheet" href="./assets/css/signup_login.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>


<!-- menu css -->

	<style>
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

    #toggleButton {
      position: fixed;
      bottom: 0px;
      left: 0px;
      z-index: 9999;
      display: none; /* Initially hidden */
      /* border:1px solid #8a51b5; */
    }
    
       
.image-gallery {
    display: grid;
    gap: 10px;
    padding: 10px;
}

.image-container {
    overflow: hidden;
    padding:5%;
   
}

.image-container img {
    width: 100%;
    height: auto;
    display: block;
    
}
.load_more{
    background: linear-gradient(90.71deg, #A25EBA -30.76%, #FF4048 115.9%);
color: white;
padding:10px;
border:none;
border-radius: 5px;
}

/* Large devices (desktops, 992px and up) */
@media (min-width: 992px) {
    .image-gallery {
        grid-template-columns: repeat(3, 1fr);
    }
}

/* Medium devices (tablets, 768px and up) */
@media (min-width: 768px) and (max-width: 991px) {
    .image-gallery {
        grid-template-columns: repeat(3, 1fr);
    }
}

/* Small devices (phones, less than 768px) */
@media (max-width: 767px) {
    .image-gallery {
        grid-template-columns: repeat(3, 1fr);
    }
    .load_more{
        padding:5px;
    }
}


.contact-icon {
    width: 35px !important;
    height: 35px !important;
    margin: 3px 0 !important;
    cursor: pointer !important;
    opacity: 0 !important;
    visibility: hidden !important;
    transition: all 0.3s ease !important;
}

.contact-icon img {
    width: 100% !important;
    height: 100% !important;
    object-fit: cover !important;
}

.contact-icon.main-icon {
    opacity: 1 !important;
    visibility: visible !important;
}

.contact-icon.show {
    opacity: 1 !important;
    visibility: visible !important;
}

.popup {
            display: none; /* Hidden by default */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(46, 40, 40, 0.836); 
            justify-content: center;
            align-items: center;
            backdrop-filter: blur(5px);
        }

        .popup-content {
            position: relative;
            border-radius: 10px;
            text-align: center;
            width: 80%;
            max-width: 500px;
        }

        .close-button {
            position: absolute;
            font-size: 25px;
            font-weight: 900;
            border-radius: 100%;
            top: 10px;
            right: 10px;
            cursor: pointer;
            color: rgb(0, 0, 0);
            z-index: 1;
        }

        /*  ------------ */
        #row2{
  display: none ;
}#row3{
  display: none ;
}#row4{
  display: none ;
}


    .row {
            width: 100%;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap; 
        }
        .col_6{
            width: 50%;
        }
        .col_8 {
           width: 60%;
        }
        .col_4{
            width: 40%;
        }
        .px_12 {
            padding: 12px;
        }
        .premium_img {
            width: 100%;
        }
        .d-flex {
            display: flex;
        }
        .click_img {
            width: 100%;
            cursor: pointer;
            transition: all .2s linear;
        }
        
        .premium_img_height {
            height: 700px !important;
            overflow: scroll;
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }
        .overflow_scroll {
            overflow-x: scroll;
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;   /* Firefox */
        }
        .text_center {
            text-align: center;
        }
        .frame {
            padding-bottom: 15px;
            cursor: pointer;flex-shrink: 0;
            width: 140px !important;
            transition: all .3s linear;
            border: 1px solid rgba(150, 147, 147, 0.815);
        }
        .gap_12 {
            gap: 12px;
        }
        .frame:hover {
            -webkit-text-stroke-width: .5px;
            box-shadow: -1.35px 1px 5.6px 2px #00000073;
        }
        #row2, #row3, #row4 {
            display: none;
        }
        .discription {
            max-width: 543px;
            margin-top: 40px;
        }
        .discription_text {
            font-weight: 700;
            font-size: 35px;
        }
        .discription_text2 {
            font-weight: 400;
            font-size: 20px;
            line-height: 30px;
        }
      
        .modal_name {
            font-weight: 900;
        }
       
        .d_none {
            display: none;
        }
        @media (min-width: 768px){
            .pt_30 {
            padding-top: 30px;
        }
        }
       @media (max-width: 1024px) {
            .col_lg_12 {
                width: 100%;
            }
            .premium_img_height {
                height: auto !important;
                overflow: scroll;
                -ms-overflow-style: none;  /* IE and Edge */
                scrollbar-width: none;  /* Firefox */
            }
            #row1, #row2, #row3, #row4 {
                flex-wrap: nowrap;
                width: 1500px;
                flex-direction: row !important;
            }
            .d_lg_none {
                display: none;
            }
            .d_lg_block {
                display: block;
            }
            .discription {
                margin-top: 20px;
            }
        }
        @media (max-width: 768px) {
            .frame {
           flex-shrink: 0;
            width: 120px !important;
         
        }
        }





 button.fancybox-button.fancybox-button--zoom, button.fancybox-button.fancybox-button--play, button.fancybox-button.fancybox-button--thumbs {



    display: none !important;



}

.fancybox-container * {
    color: white !important;
}


</style>

<style>
    #model_style_show_division{
        display:none;
    }
    #model_lifestyle_shot_division{
        display:none;
    }
    #model_extra_angles_division{
        display:none;
    }
</style>

<style>
    .frame{
        transition: all .3s linear;
    }
    .frame:hover{
        -webkit-text-stroke-width: .5px;
        box-shadow: -1.35px 1px 5.6px 2px #00000073;
    }
</style>
    </head>
    <?php include("menu_test.php"); ?>
<body>

<!-- <div id="loader" class="center"></div> -->

<div class='breadcrum'>
    <a class='breadcrum_links' href="">Home/</a>
    <a class='breadcrum_links' href="">Women/</a>
    <a style=" text-transform: lowercase;" class='breadcrum_links' href="">Premium Shoot</a>
</div>

<div class="row" style="padding: 0px 4%;">
            <div class="col_8 col_lg_12 premium_img_height">
                <div class="row" id="row1">
                    <div class="col_6"><div class="px_12">
                    <img src="./assets/premium_images_folder/MALE COLOR/VOIL6814.jpg" class="premium_img" loading="lazy" alt="premiumimg"></div>

                    </div>
                    <div class="col_6"><div class="px_12">
                        <img src="./assets/premium_images_folder/MALE COLOR/VOIL6784.jpg" class="premium_img" loading="lazy" alt="premiumimg"></div>
                    </div>
                    <div class="col_6"><div class="px_12">
                        <img src="./assets/premium_images_folder/MALE COLOR/VOIL6794.jpg" class="premium_img" loading="lazy" alt="premiumimg"></div>
                    </div>
                    <div class="col_6"><div class="px_12">
                        <img src="./assets/premium_images_folder/MALE COLOR/VOIL6796.jpg" class="premium_img" loading="lazy" alt="premiumimg"></div>
                    </div>
                    <div class="col_6"><div class="px_12">
                        <img src="./assets/premium_images_folder/MALE COLOR/VOIL6813.jpg" class="premium_img" loading="lazy" alt="premiumimg"></div>
                    </div>
                </div>
                <div class="row" id="row2">
                    <div class="col_6"><div class="px_12">
                        <img src="assets/premium_images_folder/MALE CREATIVE/1.JPG" class="premium_img" loading="lazy" alt="premiumimg"></div>
                    </div>
                    <div class="col_6"><div class="px_12">
                        <img src="assets/premium_images_folder/MALE%20CREATIVE/2.JPG" class="premium_img" loading="lazy" alt="premiumimg"></div>
                    </div>
                    <div class="col_6"><div class="px_12">
                        <img src="assets/premium_images_folder/MALE%20CREATIVE/3.JPG" class="premium_img" loading="lazy" alt="premiumimg"></div>
                    </div>
                    <div class="col_6"><div class="px_12">
                        <img src="assets/premium_images_folder/MALE%20CREATIVE/4.JPG" class="premium_img" loading="lazy" alt="premiumimg"></div>
                    </div>
                    <div class="col_6"><div class="px_12">
                        <img src="assets/premium_images_folder/MALE%20CREATIVE/5.JPG" class="premium_img" loading="lazy" alt="premiumimg"></div>
                    </div>
                </div>
                <div class="row" id="row3">
                    <div class="col_6"><div class="px_12">
                        <img src="/assets/premium_images_folder/MALE%20CUSTOM/1.jpg" class="premium_img" loading="lazy" alt="premiumimg"></div>
                    </div>
                    <div class="col_6"><div class="px_12">
                        <img src="/assets/premium_images_folder/MALE%20CUSTOM/2.jpg" class="premium_img" loading="lazy" alt="premiumimg"></div>
                    </div>
                    <div class="col_6"><div class="px_12">
                        <img src="/assets/premium_images_folder/MALE%20CUSTOM/3.jpg" class="premium_img" loading="lazy" alt="premiumimg"></div>
                    </div>
                    <div class="col_6"><div class="px_12">
                        <img src="/assets/premium_images_folder/MALE%20CUSTOM/4.jpg" class="premium_img" loading="lazy" alt="premiumimg"></div>
                    </div>
                    <div class="col_6"><div class="px_12">
                        <img src="/assets/premium_images_folder/MALE%20CUSTOM/5.jpg" class="premium_img" loading="lazy" alt="premiumimg"></div>
                    </div>
                </div>
                <!-- <div class="row" id="row4">
                    <div class="col_6"><div class="px_12">
                        <img src="https://voilastudio.co.in/voilastudio_myntra/images/booking_models_images/eCommerce_photography_female_casualShirt_03_07_23_(11).webp" class="premium_img" loading="lazy" alt="premiumimg"></div>
                    </div>
                    <div class="col_6"><div class="px_12">
                        <img src="https://voilastudio.co.in/voilastudio_myntra/images/booking_models_images/eCommerce_photography_female_casualShirt_03_07_23_(11).webp" class="premium_img" loading="lazy" alt="premiumimg"></div>
                    </div>
                    <div class="col_6"><div class="px_12">
                        <img src="https://voilastudio.co.in/voilastudio_myntra/images/booking_models_images/eCommerce_photography_female_casualShirt_03_07_23_(11).webp" class="premium_img" loading="lazy" alt="premiumimg"></div>
                    </div>
                    <div class="col_6"><div class="px_12">
                        <img src="https://voilastudio.co.in/voilastudio_myntra/images/booking_models_images/eCommerce_photography_female_casualShirt_03_07_23_(11).webp" class="premium_img" loading="lazy" alt="premiumimg"></div>
                    </div>
                    <div class="col_6"><div class="px_12">
                        <img src="https://voilastudio.co.in/voilastudio_myntra/images/booking_models_images/eCommerce_photography_female_casualShirt_03_07_23_(11).webp" class="premium_img" loading="lazy" alt="premiumimg"></div>
                    </div>
                </div> -->
            </div>
            <div class="col_4 col_lg_12">
                <div class="px_12">
                    <p class="modal_text d_lg_none detailed_model_heading_nam">Model Name: <span class="modal_name">VALENTINE</span></p>
                    <p class="shoot_text d_lg_none detailed_model_heading">T-Shirts Premium e-Commerce Shoot</p>
                    <div class="detailed_pricing">
                        <p>₹ </p>
                        <p id="photoshoot_amount_hold">
                           550 
                        </p>
                    </div>
                    <div style="height: 1px; background-color: #CCC4C4; max-width: 600px; margin-top: 20px;"></div>
                    <div class="">
                        <div class="d-flex px_12 gap_12 pt_30 overflow_scroll">
                            <div class="text_center frame">
                                <img class="click_img" src="./assets/premium_images_folder/MALE COLOR/VOIL6814.jpg" class="detailed_model_detailedshot_extra" loading="lazy" alt="" id="showRow1">Color Back Drop
                            </div>
                            <div class="text_center frame">
                                <img class="click_img" src="assets/premium_images_folder/MALE CREATIVE/1.JPG" class="detailed_model_detailedshot_extra" loading="lazy" alt="" id="showRow2"> Creative / Custom
                            </div>
                            <div class="text_center frame">
                                <img class="click_img" src="/assets/premium_images_folder/MALE%20CUSTOM/1.jpg" loading="lazy" alt="" id="showRow3">Outdoor
                            </div>
                            <!-- <div class="text_center frame">
                                <img class="click_img" src="./premium/premium (2).png" loading="lazy" alt="" id="showRow4">Custom Shoot
                            </div> -->
                        </div>
                    </div>
                    <div style="height: 1px; padding-left: 13px; background-color: #CCC4C4; max-width: 600px; margin-top: 10px;"></div>
                    <p class="modal_text d_lg_block d_none">Model Name: <span class="modal_name">VALENTINE</span></p>
                    <p class="shoot_text d_lg_block d_none">T-Shirts Premium e-Commerce Shoot</p>
                </div>         
                <div class="discription px_12">
                    <p class="discription_text px_12">Description: </p>
                    <p class="discription_text2" id="descriptionText" style="padding-left: 12px;"></p>
                </div>
            </div>
        </div>


<script>



function closey() {



    var cl = document.getElementById("pincodeaftermessage");

    cl.style.display = "none";


    $("#booking_change_model_section").show();


    $("#same_photoshoot_date").hide();



}



function nextshootclosey() {



    var cl = document.getElementById("choosenextshootmessgae");



    cl.style.display = "none";



   //  $("#zipcode").val('');



    $("#booking_change_model_section").show();



    $("#same_photoshoot_date").hide();







}



function UserDeliveredDateclosey() {



    var cl = document.getElementById("ChooseUserDeliveredDateMessgae");



    cl.style.display = "none";



   //  $("#zipcode").val('');



    $("#booking_change_model_section").show();



    $("#same_photoshoot_date").hide();







}


</script>



<section class="popup" id="popupForm2">

  <div class="container_sign">



    <div class="menus_sign signupformlod">



      <img loading="lazy" class="cross modalcloseforcategoryimg" onclick="closeForm()" src="https://img.icons8.com/fluency-systems-regular/48/multiply.png" alt="">



      <p id="demo">SignUp</p>

			<div class="inputField gradient">
			<input class="firstnameinput" type="text" id = "first_name" placeholder="First Name*">
            <p id="first_name_err" ></p>
			</div>
			<div class="inputField gradient">
			<input class="lastnameinput" type="text" id = "last_name" placeholder="Last Name">
            <p id="last_name_err" ></p>
			</div>


      <div class="inputField gradient">
        <div class="mobileInput">
        <input class="input" id = "email" name = "email" type="email" autocomplete="off" placeholder="Email*" >
        <p id="email_err" ></p>
      </div>
      </div>


      <div class="inputField gradient" >

        <div class="mobileInput">
        <input class="input" type="tel"  id = "mobile_no" name = "mobile_no" maxlength="10" autocomplete="off" placeholder="Mobile No.*" >
        <p id="mobile_no_err" ></p>
        <!--<p class="showpass " id="send_otp">Send otp</p>-->
		<button class="send_otp_btn" type="button" onclick = "get_otp()" >Send OTP</button>
		<input class="input"  type="hidden"  name = "mobile_otp_value_collection"  id = "mobile_otp_value_collection" required >

        </div>
      </div>


      <div class="inputField gradient" id = "otp_value_section_collection">
			  <div class="mobileInput">
				  <input class="input"  type="number"  name = "mobile_otp"  id = "mobile_otp"  maxlength="6" placeholder="OTP" required >
				  <p class="errormessageabovebox" id="mobile_no_err"></p>
				  <!--<p class="showpass " id="verify_otp">verify</p>-->
				  
				    <button class="verify_otp_btn" type="button" onclick = "verify_otp()" >Verify OTP</button>
                    <p id="login_signup_err_verify"> </p>

			  </div>
			</div>


      <div class="inputField gradient">
        <div class="mobileInput">
          <input class="input" id="signup_password"  type="password" name = "signup_password" value="" autocomplete="off" placeholder="Password*" >
          <p id="signup_password_err"></p>
          <p onclick="visiblesignup()" class="showpass" id="signupshowhidezaq">show</p>
        </div>
      </div>

      <div class="inputField gradient">
        <div class="mobileInput">
          <input class="input" id="conf_signup_password"  type="password" name = "conf_signup_password" value="" autocomplete="off" placeholder="Confirm Password*" >
          <!-- <p id="conf_signup_password_err"></p> -->
          <p onclick="confirmpassowrd()" class="showpass" id="confirmshowhidezaq">show</p>
        </div>
      </div>


      <input class="input" type="hidden" name = "register_form">
      
      <p id="login_signup_err"> </p>
      <p id="login_signup_err_success"> </p>

      <div class="privacyline">
			<input class="checkboxpolicy" id = "privacy_policy_agreement"   type="checkbox">
			<label class="labelforcheckbox" for="">I Agree with <span class="pinkish">privacy</span> and <span class="pinkish">policy</span></label>
			</div>

      <div class="signup_submit_division">



       <button onclick="submit_signup()" class="signup_submit" style="margin: 0px auto 15px;">Sign up</button>

            <!-- <img loading="lazy" class="signuparrow" src="./assets/img/signup_symbol.png" alt=""> -->

      </div>


      <button onclick="closeBothSignup()" class="signup_extra_submit">Already have an account? Log In</button>




    </div>



  </div>

</section>



<section class="popup" id="popupFormSignIn2">



  <div class="container_sign">



    <div class="menus_sign">



    <img loading="lazy" class="cross modalcloseforcategoryimg" onclick="closeFormSignIn()" src="https://img.icons8.com/fluency-systems-regular/48/multiply.png" alt="">



    <p id="demo">Sign in</p>



    <div class="inputField gradient">



        <!-- <label class="name">Mobile no</label><br> -->



        <div class="mobileInput">
        <img loading="lazy" class="customericon" width="18" height="18" src="https://img.icons8.com/material-rounded/24/gender-neutral-user.png" alt="gender-neutral-user"/>
            <input class="input marginlefttwenty" type="tel" id = "login_mobile_no" name = "login_mobile_no" maxlength="10" autocomplete="off" placeholder="Mobile No.*">

             <p style="font-size:14px;color:red" id="login_mobile_no_err" ></p>

        </div>



    </div>







    <div class="inputField gradient">



        <!-- <label class="name">Password</label><br> -->



        <div class="mobileInput">

        <img loading="lazy" class="customericon" width="18" height="18" src="https://img.icons8.com/material-rounded/24/lock--v1.png" alt="lock--v1"/>

          <input class="input marginlefttwenty" id="login_password" type="password" name = "login_password" value="" autocomplete="off" placeholder="Password*" >

            <p style="font-size:14px;color:red" id="login_password_err" ></p>

          <p onclick="visiblelogin()" class="showpass" id="loginshowhidezaq">show</p>



        </div>



    </div>
    <div class="privacyline">
			<input class="checkboxpolicy" type="checkbox">
			<label class="labelforcheckbox" for="">Remember me</label>
			</div>



        <input type="button" onclick="submit_login()"  name="submit_login"  class="signup_submit loging" value="Sign in">

         <button onclick="closeBothSignin()" class="signup_extra_submit">Don't have an account? Register</button>


         <p id="login_signin_err"> </p>





    </div>



  </div>



</section>






<script>

    // document.getElementById("popupFormSignIn2").style.display = "none";
    $("#popupFormSignIn2").hide();


    // document.getElementById("popupForm2").style.display = "none";
    $("#popupForm2").hide();




 $("#otp_value_section_collection").hide();

function get_otp(){

	var mobile_no = $('#mobile_no').val();
	var email = $('#email').val();
	
	
	
	if(!$('#mobile_no').val().match('[0-9]{10}'))  {
               var  get_user_mobile_count_err = 'Please enter ten digit mobile no';
				$("#login_signup_err").html(get_user_mobile_count_err);
		
                return;
				
	}else{
		$("#login_signup_err").html('');
		
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
	
	
	// alert(mobile_no);
    // <p id="login_signin_err_successfully">Otp Send successfully</p>

    

	if(mobile_no.length == 10 && email_val == 'true'){
		
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
					
							$("#otp_value_section_collection").hide();
							
							var get_user_mobile_count_err = 'mobile number is already exist';
								
						//	alert(get_user_mobile_count_err);
							
                            $("#mobile_no_err").html(get_user_mobile_count_err);
							
							
					}else if(email_id_err == true){
						
							$("#otp_value_section_collection").hide();
							
							var get_user_mobile_count_err = 'Email ID is already exist';
								
							//	alert(get_user_mobile_count_err);
							
                            $("#email_err").html(get_user_mobile_count_err);
							
							
						
						
						
					}else{
					
					
						 $("#mobile_otp_value_collection").val(OTP_rcv);
						
						 $("#otp_value_section_collection").show(500);

						
						
						
					}
					
					
					
			


            },

			error: function(jqXHR, textStatus, errorThrown){

				  alert('error');

			  }

        });

			
	
	}else{

			
			
		get_user_mobile_count_err = 'Please enter ten digit mobile no';
		$("#login_signup_err").html(get_user_mobile_count_err);
		
		
		

	}



}



function verify_otp(){

	var mobile_otp_collection = $('#mobile_otp_value_collection').val();
	var mobile_otp = $('#mobile_otp').val();	
	
	var mobile_no = $('#mobile_no').val();
	
	
	
	if(mobile_otp == mobile_otp_collection){
		
		var get_user_mobile_count_err;
		
		
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

					$("#login_signup_err_success").html(get_user_mobile_count_err);
							
					
			


            },

			error: function(jqXHR, textStatus, errorThrown){

				  alert('error');

			  }

        });

		
		
		
							
		
	
	}else{
				
		get_user_mobile_count_err = 'Please enter correct OTP Or Send OTP again ';
		$("#login_signup_err_verify").html(get_user_mobile_count_err);
		
	
	}
		

}




function openForm() {

    // document.getElementById("popupForm2").style.display = "block";
    $("#popupForm2").show();



}




function closeForm() {

    // document.getElementById("popupForm2").style.display = "none";
    $("#popupForm2").hide();


 }




function openFormForSignIn() {


        $("#popupFormSignIn2").show();


  }



function closeFormSignIn() {


    // document.getElementById("popupFormSignIn2").style.display = "none";
    $("#popupFormSignIn2").hide();




  }




function closeBothSignup() {


    // document.getElementById("popupFormSignIn2").style.display = "block";
    $("#popupFormSignIn2").show();



    // document.getElementById("popupForm2").style.display = "none";
    $("#popupForm2").hide();



     var element = document.getElementById("date123");


     if(element.style.display=="block")



     {element.style.display="none";



     }



     else{element.style.display="block";}



     element.classList.toggle("mystyle");



  }

function closeBothSignin() {

    // document.getElementById("popupFormSignIn2").style.display = "none";
    $("#popupFormSignIn2").hide();


    

    // document.getElementById("popupForm2").style.display = "block";

    $("#popupForm2").show();


    


  }




  function visiblesignup() {
	  var vx = document.getElementById("signup_password");
	  var qwe = document.getElementById("signupshowhidezaq");
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
	  var vx = document.getElementById("conf_signup_password");
	  var qwe = document.getElementById("confirmshowhidezaq");
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
	  var vx = document.getElementById("login_password");
	  var qwe = document.getElementById("loginshowhidezaq");
	  if (vx.type === "password" && qwe.innerHTML == "show") {
		vx.type = "text";
		qwe.innerHTML = "hide"
	  }
	   else if (vx.type === "text" && qwe.innerHTML == "hide") {
		vx.type = "password";
		qwe.innerHTML = "show";
	  }
	}

</script>



<script>
        const rows = ['row1', 'row2', 'row3'];
        const imgs = ['showRow1', 'showRow2', 'showRow3'];
        const descriptions = [
            "This is the description for Color Back Drop.",
            "This is the description for Creative.",
            "This is the description for Outdoor.",
          
        ];

        function showRow(index) {
            rows.forEach(row => {
                document.getElementById(row).style.display = 'none';
            });
            document.getElementById(rows[index]).style.display = 'flex';
            document.getElementById('descriptionText').textContent = descriptions[index];
        }

        imgs.forEach((img, index) => {
            document.getElementById(img).addEventListener('click', () => {
                showRow(index);
            });
        });

        document.addEventListener('DOMContentLoaded', () => {
            // Set default state
            showRow(0);
        });
    </script>









<script src="./mega_menu/menu.js"></script>



<script src="./mega_menu/corousel.js"></script>





 <!-- fashionportal -->



 <script>



$(document).ready(function(){
  $(document).mousemove(function(event){
      // $("span").text(event.pageX + ", " + event.pageY);

      $('#collection_detailed_model_section_id').css('position', 'relative');
    // $('#collection_detailed_model_section_id').css('top', '0');


  });
});


    $(document).ready(function() {
  $(".imgwithtextfashionportal a").attr("data-fancybox","fashionportal");
  $(".imgwithtextfashionportal a").each(function(){
    $(this).attr("data-caption", $(this).find("img").attr("alt"));
    $(this).attr("title", $(this).find("img").attr("alt"));
  });
	$(".imgwithtextfashionportal a").fancybox();
});





 // Marketplace -->



    $(document).ready(function() {

  $(".model_detailed_division_sq a").attr("data-fancybox","marketplace");
  $(".model_detailed_division_sq a").each(function(){
    $(this).attr("data-caption", $(this).find("img").attr("alt"));
    $(this).attr("title", $(this).find("img").attr("alt"));
  });
	$(".model_detailed_division_sq a").fancybox();
});

$(document).ready(function() {
  $(".imgwithtextmaretplace a").attr("data-fancybox","marketplace");
  $(".imgwithtextmaretplace a").each(function(){
    $(this).attr("data-caption", $(this).find("img").attr("alt"));
    $(this).attr("title", $(this).find("img").attr("alt"));
  });
	$(".imgwithtextmaretplace a").fancybox();
});




$(document).ready(function() {
  $(".model_detailed_division_sqli a").attr("data-fancybox","model");
  $(".model_detailed_division_sqli a").each(function(){
    $(this).attr("data-caption", $(this).find("img").attr("alt"));
    $(this).attr("title", $(this).find("img").attr("alt"));
  });
	$(".model_detailed_division_sqli a").fancybox();
});


// $(document).ready(function() {
//     $('.toggleButtonanimation').change(function() {
//       var image = $('#down_arrow_hits');
      
//       if (this.checked) {
//         // Show the image
//         image.css('opacity', 1);
//         setTimeout(function() {
//           image.css('opacity', 0);
//         }, 3000);
//       } else {
//         // Hide the image when unchecked
//         image.css('opacity', 0);
//       }
//     });
//   });
 </script>



 <!-- lightbox script -->











<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js'></script><script  src="./script.js"></script>













<tail>

    <footer>

    <?php include("newfooter.php"); ?>

    </footer>





</tail>

<div>
    <div class="contact-us-container">
        <div class="contact-icon main-icon" onclick="toggleContacts()">
            <img src="<?php echo BASE_URL; ?>/assets/img/contact.png" alt="Contact Us">
        </div>
        <div class="contact-icon whatsapp-icon">
            <a href="/"><img src="<?php echo BASE_URL; ?>/assets/img/Whatsapp.png" alt="WhatsApp"></a>
        </div>
        <div class="contact-icon email-icon">
            <a href="/"><img src="<?php echo BASE_URL; ?>/assets/img/mail.png" alt="Email"></a>
        </div>
        <div class="contact-icon phone-icon">
            <a href="/"><img src="<?php echo BASE_URL; ?>/assets/img/Chat.png" alt="Phone"></a>
        </div>
    </div>
</div>

<script src="./assets/js/more.js"></script>

    

</body>

</html>


<!-- mobile view tool tip  -->