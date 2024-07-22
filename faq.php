<?php    
error_reporting(0);  
session_start();
include('db_config/db_config.php');
?>
<?php  include("menu_test.php"); ?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FAQ Page</title>
    <style>
      .section_faq {
        font-family: Arial, sans-serif;

        /* margin: 20%; */
        padding: 0% 10%;
        display: flex;
        scroll-behavior: smooth;
      }

      .sidebar {
        width: 20%;
        background-color: #f4f4f4;
        padding: 20px;
        position: fixed;
        height: 100vh;
        overflow-y: auto;
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
      }

      .sidebar ul {
        list-style-type: none;
        padding: 0;
      }

      .sidebar ul li {
        padding: 10px;
        cursor: pointer;
        transition: background-color 0.3s ease, font-weight 0.3s ease;
      }

      .sidebar ul li.active {
        color: blue;
        font-weight:800;
        font-size:16px
      }

      .content {
        margin-left: 30%;
        padding: 20px;
        width: 70%;
      }

      h1 {
        text-align: center;
        margin-bottom: 20px;
      }

      .faq {
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
      }

      .faq-item {
        border-bottom: 1px solid #ccc;
      }

      .faq-item:last-child {
        border-bottom: none;
      }

      .faq-question {
        /* background-color: #007bff; */
        /* color: #fff; */
        padding: 2px 10px;
        cursor: pointer;
        /* transition: background-color 0.3s ease; */
        font-size: 12px;
        
      }

      .faq-question:hover {
        background-color:blue;
        color:white !important;
      }
      .faq-question:active {
        background-color: blue;
        color:white !important;
      }
      
      .faq-answer {
        display: none;
        padding: 10px 20px;
        background-color: #f9f9f9;
        border-top: 1px solid #ccc;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.5s ease, padding 0.5s ease;
      }

      .faq-answer.show {
        display: block;
        /* height: 100%; */
        max-height: 250px;
        /* padding: 10px 20px; */
      }
      .faq_answer {
        font-size: 14px;
        color: rgb(66, 60, 60);
        font-weight: 500;
      }
      .hoverText:hover{
        color:white;
      }
      .faq-question:hover {
        background-color:blue;
        color:white !important;
      }
      @media (max-width: 600px) {
        .sidebar {
          display: none;
        }
        .content {
          width: 100% !important;
          margin: 1%;
          padding: 0%;
        }
        .faq-section {
          width: 100%;
        }
      }
    </style>
  </head>
  <body>
   
<section class="section_faq">
    <div class="sidebar">
      <ul id="main-headings">
        <li data-target="section1" class="active">&#9734; Trending Questions</li>
        <li data-target="section2"> &#9734; Voila Studio</li>
        <li data-target="section3">&#9734; Shoot Related</li>
        <li data-target="section4">&#9734;  Payment</li>
        <li data-target="section5">&#9734;  Market Place</li>
        <li data-target="section6"> &#9734; Sign up and Login</li>
        <li data-target="section7"> &#9734; Fashion portal</li>
      </ul>
    </div>
    <div class="content">
      <div id="section1" class="faq-section">
        <h3 class="hoverText" style="color:blue"> Trending Questions</h3>
        <div class="container">
          <div class="faq">
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">What is studio live</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer" style="hover:color:white">
                  STUDIO Live is a live streaming feature at VOILA Studio where
                  clients and visitors can see our studio in action. This allows
                  you to watch how our team conducts e-commerce photoshoots,
                  manages shoots, and handles the entire process. Through STUDIO
                  Live, you can observe our workflow and get a behind-the-scenes
                  look at how we create stunning images for your products.
                </p>
              </div>
            </div>
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">How to become VOILA Studio partner</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  Are you a passionate e-commerce photographer? Join the VOILA
                  Studio Partners Program to elevate your business. Follow these
                  steps:
                  <br /><br />
                   1. Application: Fill out a simple form at [VOILA Studio
                  Partner
                  Application](https://VOILAstudio.co.in/studio_partner.php) to
                  express your interest. We review applications promptly.</li>

                  2. Once approved, access our exclusive partner portal with
                  resources, networking opportunities, and tools to enhance your
                  studio's capabilities.<br />
                  3. Enjoy the benefits of partnership, including exclusive
                  perks and collaborations with VOILA Studio.<br />

                  For more information, visit the VOILA Studio Partner Program.
                  Keywords: e-commerce photography, model photoshoot, product
                  photography, VOILA Studio.
               
                </p>
              </div>
            </div>
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">How you can work with us as model?</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  Ready to step into the world of fashion and become the face of
                  our exciting e-commerce platform? Simply fill out our
                  application form at VOILA Studio Model Application. Once
                  submitted, we will review your application and a team member
                  will connect with you.
                  <br />
                  Keywords: Models for shoot, ecommerce photoshoot, catalog
                  shoot, model application, studio for product photography,
                  e-commerce photography, VOILA Studio, product photography
                  services, photoshoot models, fashion model.
                </p>
              </div>
            </div>
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">How you can work with us as photographer?</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  Are you ready to break into the fashion industry and become
                  the face of our dynamic e-commerce platform? Complete our
                  application form at VOILA Studio Photographer Application.
                  After submission, we will review your application, and a team
                  member will get in touch with you.
                </p>
              </div>
            </div>
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">How you can work with us as stylish?</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  Are you ready to step into the world of fashion and become the
                  face of our exciting e-commerce platform? Just fill out our
                  application form at VOILA Studio Makeup Artist Application.
                  Once submitted, we will review your application, and a team
                  member will reach out to you.
                </p>
              </div>
            </div>
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">How you can work with us as editor?</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  Are you prepared to enter the realm of fashion and be the
                  featured image on our dynamic e-commerce platform? Just
                  complete our application form at VOILA Studio Editor
                  Application. Once you submit it, we'll assess your application
                  and reach out to you soon.
                </p>
              </div>
            </div>
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">Is ecommerce photoshoot service available everywhere?</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  Yes, we provide e-commerce photoshoot services globally. While
                  our studio is based in Gurgaon, India, we offer high-quality
                  photoshoots worldwide to meet your needs.<br />
                  Keywords: e-commerce photoshoot, global services, studio in
                  Gurgaon, VOILA Studio, professional photography, model
                  photoshoots.
                </p>
              </div>
            </div>
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">
                  How can I stay updated on VOILA Studio's services and
                  offerings?
                </h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  Follow us on our social media channels and visit our website
                  regularly. You can also sign up for our newsletter to receive
                  updates on our services, promotions, and industry news.
                </p>
              </div>
            </div>
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">
                  Why is VOILA Studio Called the No. 1 E-commerce Booking
                  Platform?
                </h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  VOILA Studio is recognized as the No. 1 e-commerce booking
                  platform because we offer the best e-commerce photoshoot
                  services worldwide. We are pioneers in launching a
                  comprehensive platform that caters to all categories,
                  including men, women, kids, and product photography. Our
                  services range from basic to premium shoots, ensuring
                  top-quality images that elevate your online presence. At VOILA
                  Studio, we combine professional photography, innovative
                  techniques, and a global network of top models to deliver
                  exceptional results, making us the preferred choice for
                  e-commerce photoshoots. Key Highlights: 1. Diverse Categories:
                  Men, Women, Kids, Products 2. Comprehensive Services: Basic to
                  premium e-commerce shoots, catalog shoots, and more 3. Global
                  Reach: International models and photoshoots 4. In-House Studio
                  Advantage: State-of-the-art facilities for perfect captures By
                  consistently delivering high-quality images that meet the
                  diverse needs of e-commerce businesses, VOILA Studio stands
                  out as the leading platform in the industry. For more details,
                  visit our About Us section.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Repeat similar structure for other sections -->
      <div id="section2" class="faq-section">
        <h3 class="hoverText" style="color:blue" >Voila Studio</h3>
        <div class="container">
          <div class="faq">
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">What services does VOILA Studio offer?</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  VOILA Studio specializes in high-quality e-commerce
                  photography, including product shoots, model shoots (men,
                  women, kids), designer lookbook shoots, portrait shoots, and
                  ghost shoots. We cater to platforms like Amazon, Flipkart,
                  Myntra, etc.
                </p>
              </div>
            </div>
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">Where are VOILA Studio's locations?</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  We have a studio in Gurgaon, but we work with clients from all
                  over the world. Our main office is at Welldone Tech Park,
                  Sector 48, Sohna Road, Gurugram, Haryana. We also have a
                  branch office on MS Ramaiah Road, Mathikere Extension,
                  Bengaluru, Karnataka.
                </p>
              </div>
            </div>
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">How can you sign up to be an influencer on VOILA Studio</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  To become a VOILA Studio influencer, contact us via email at
                  info@VOILAstudio.in or call +919821654548. We provide diverse
                  e-commerce photoshoot services globally and locally, with
                  models for men, women, and kids. Benefit from our in-house
                  studio advantage for exceptional shoots. Join us to enhance
                  your influence today!.
                </p>
              </div>
            </div>
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">
                  Are there any additional services provided by VOILA Studio?
                </h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  In addition to ecommerce photoshoots, we provide a range of
                  other services, including videography for e-commerce, social
                  media management, and digital marketing. These offerings
                  complement our visual solutions within our e-kart, retail, and
                  business verticals.
                </p>
              </div>
            </div>
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">What are your core values at VOILA Studio?</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  Our core values are Integrity, Innovation, and Collaboration.
                  We aim to be transparent, continuously innovate in e-commerce
                  photography, and work closely with our clients to achieve
                  outstanding results.
                </p>
              </div>
            </div>
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">
                  Does VOILA Studio provide any consultancy services for
                  e-commerce businesses?
                </h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  Our commitment to integrity, innovation, and collaboration
                  sets us apart. We provide high-quality, elegant photography
                  backed by professional photographers. We also offer strategic
                  consultancy services to help businesses navigate the
                  e-commerce landscape.
                </p>
              </div>
            </div>
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">
                  Does VOILA Studio offer photography services for international
                  clients?
                </h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  Yes, we serve clients globally. Our extensive experience and
                  professional team ensure that we can meet the photography
                  needs of international e-commerce businesses.
                </p>
              </div>
            </div>
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">
                  Are there any awards or recognitions VOILA Studio has
                  received?
                </h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  Yes, VOILA Studio has been recognized for excellence in
                  e-commerce photography, reflecting our dedication to
                  high-quality service and client satisfaction. You can visit
                  our [About Us](https://VOILAstudio.co.in/aboutus.php) page to
                  view all our awards.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Add sections 3 to 7 similarly -->
      <div id="section3" class="faq-section">
        <h3 class="hoverText" style="color:blue">Shoot Related</h3>
        <div class="container">
          <div class="faq">
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">What is a basic ecommerce photoshoot?</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  A basic shoot at VOILA Studio involves capturing essential
                  angles and poses of models, typically featuring 5 to 6 simple
                  and natural poses. These photoshoots are designed to provide
                  high-quality images that highlight your e-commerce products
                  effectively.
                  <br />
                  Keywords: Models for shoot, model for photo shoot, ecommerce
                  shoot, catalog shoot, ecommerce photoshoot, e-commerce
                  photoshoot, ecommerce photo shoot, studio for product
                  photography, VOILA Studio, ecommerce photography, ecommerce
                  product photography, ecommerce photography services,
                  photography ecommerce, photography e-commerce, e-commerce
                  photography, product photography ecommerce.
                </p>
              </div>
            </div>
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">What is a premium ecommerce photoshoot?</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  A premium shoot at Voila Premium ecommerce photoshoots at
                  VOILA Studio are about crafting unique, high-quality images
                  tailored to your needs. Our professional photographers
                  collaborate with models to capture diverse poses, ensuring
                  your products shine with elegance and realism. Whether it's
                  for catalogs or online platforms like Amazon or Myntra, our
                  expertise guarantees your products stand out studio is an
                  exquisite e-commerce photo session tailored to your needs.
                  It's about capturing unique poses and high-quality images that
                  elevate your products or brand. Whether it's showcasing the
                  latest fashion trends or highlighting product details, our
                  premium shoots ensure your visuals stand out with excellence.
                </p>
              </div>
            </div>
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">What is MSQ?</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  MSQ, or Minimum Shoot Quantity, refers to the minimum number
                  of shoots required for availing our e-commerce photography
                  services. At VOILA Studio, it's set at a minimum of 50 shoots
                  per client to ensure the best quality and service for your
                  e-commerce needs.
                </p>
              </div>
            </div>
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">If client don’t like shoots</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  We strive to satisfy our clients through our e-commerce
                  photoshoots. Initially, we share watermarked images with the
                  client, and if any changes are required, we respect their
                  preferences and accommodate them in three stages. If, after
                  these three stages, you are still unsatisfied with the shoot,
                  you can contact our higher authorities via email or phone.
                </p>
              </div>
            </div>
          
          <div class="faq-item">
            <div class="faq-question">
              <h3 class="hoverText">
                What is the processing time of shoot images to reach clients?
              </h3>
            </div>
            <div class="faq-answer">
              <p class="faq_answer">
                Your shoot images will take 10 to 15 working days to reach you
                after your shoot is scheduled. First, you'll receive watermark
                samples to review how your shoot turned out in our studio. If
                you're satisfied, the final images will be sent to you via an
                encrypted link, ensuring that only you can access them. This
                entire process is completed within the 10 to 15 working days.
              </p>
            </div>
          </div>
          <div class="faq-item">
            <div class="faq-question">
              <h3 class="hoverText">What models we provide local or international</h3>
            </div>
            <div class="faq-answer">
              <p class="faq_answer">
                We offer both local and international models for our ecommerce
                photoshoots, covering men, women, and kids, ensuring a diverse
                and dynamic visual presentation for your products
              </p>
            </div>
          </div>
          <div class="faq-item">
            <div class="faq-question">
              <h3 class="hoverText">What models we provide local or international</h3>
            </div>
            <div class="faq-answer">
              <p class="faq_answer">
                We offer both local and international models for our ecommerce photoshoots, covering men, women, and kids, ensuring a diverse and dynamic visual presentation for your products
              </p>
            </div>
          </div>
          <div class="faq-item">
            <div class="faq-question">
              <h3 class="hoverText">What is model photoshoot calendar </h3>
            </div>
            <div class="faq-answer">
              <p class="faq_answer">
                Model Photoshoot Calendar is a unique feature on VOILA Studio's website. It's your go-to place to check out models, their profiles, and upcoming shoot availability. It helps you plan your shoots efficiently by knowing which models are available for your desired dates.
              </p>
            </div>
          </div>
          <div class="faq-item">
            <div class="faq-question">
              <h3 class="hoverText">What is grey background ecommerce photoshoots?</h3>
            </div>
            <div class="faq-answer">
              <p class="faq_answer">
                A "grey background shoot" is when products are photographed against a neutral grey background. This creates a clean, distraction-free image, ideal for showcasing items in e-commerce. Grey backgrounds make editing easier and maintain consistency across product images on online stores. It's commonly used for fashion portals to follow guidelines and ensure the focus stays on the product. For more on fashion portals, check out our FAQ section on "What is ecommerce fashion portal".
              </p>
            </div>
          </div>
          <div class="faq-item">
            <div class="faq-question">
              <h3 class="hoverText">What is white background ecommerce photoshoots?</h3>
            </div>
            <div class="faq-answer">
              <p class="faq_answer">
                A white background shoot is a photography session where products are captured against a simple white backdrop. This method is ideal for e-commerce because it gives products a clean and professional appearance, making them stand out without any distractions. At VOILA Studio, we excel in creating these visually appealing images that meet the guidelines of top marketplaces like Fashimarket.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div id="section4" class="faq-section">
        <h3 class="hoverText" style="color:blue">Payment</h3>
        <div class="container">
          <div class="faq">
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">What are the payment terms?</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  At VOILA Studio, we offer flexible payment options to suit your convenience. You can pay using various methods such as UPI, credit/debit cards, EMI, wallets, net banking, PhonePe, GPay, and more. 
                </p>
              </div>
            </div>
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">Do we provide international transaction?</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  Yes, we offer flexible international payment options for our global clientele.
                </p>
              </div>
            </div>
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">Do we apply GST in international transactios?</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  No, we don't apply GST for international transactions.
                </p>
              </div>
            </div>
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">What are the prices of female models for shoot?</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  Female e-commerce photoshoot services start from 550 onwards.
                </p>
              </div>
            </div>
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">What are the prices of male models for shoot?</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  Male e-commerce photoshoot services start from 550 onwards.
                </p>
              </div>
            </div>
            
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">What are the prices of kids models for shoot?</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  Kids e-commerce photoshoot services start from 850 onwards.
                </p>
              </div>
            </div>

            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">What is PhonePe wallet?</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  PhonePe wallet is RBI approved semi-closed payment instrument and can be used on Myntra and any other PhonePe partners. You can use your PhonePe wallet for quick purchases and easy refunds. You can also withdraw your PhonePe balance at any time into a bank account of your choice.
                </p>
              </div>
            </div>

            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText"> Do I need to have a PhonePe account to shop on VOILA Studio?</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  PhonePe account is not mandatory to shop on VOILA Studio. However, we recommend you to have a PhonePe account for quick purchases and easy refunds. Also, any refund initiated by VOILA Studio in exceptional cases will be credited only to the PhonePe wallet. You can sign up for PhonePe account by visiting the PhonePe application.
                </p>
              </div>
            </div>
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">What will happen to my money, if an order placed using PhonePe wallet fails or is rejected?</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  If an order is not successful, it can also be due to payment failure and in these cases you are not liable for any refund. In scenarios, wherein payment is received at our end and order is rejected, payment made through PhonePe wallet will be automatically refunded to PhonePe wallet. Kindly reach out to our Customer Care, if the money is not refunded to your wallet.
                </p>
              </div>
            </div>
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">Do you offer any discounts or packages for bulk photoshoots?    </h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  Yes, we offer special packages and discounts for bulk photoshoots. Please contact our customer service for more details on available offers.
                </p>
              </div>
            </div>
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">How is the GST amount decided?</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  The GST amount is calculated as 18% of your total cart value.
                </p>
              </div>
            </div>
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">What are the prices of product shoot?</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  Our e-Commerce product shoot services start from 350 onwards.
                </p>
              </div>
            </div>
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">What are the prices of home & furnishing shoot?</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  The prices for ecommerce home & furnishing shoots start from just 350 onwards.
                </p>
              </div>
            </div>
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">What are the prices of video shoot?</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  Ecommerce video shoots at VOILA Studio start from 2000 onwards.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="section5" class="faq-section">
        <h3 class="hoverText" style="color:blue">Market Place</h3>
        <div class="container">
          <div class="faq">
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText"> What is market place</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  A marketplace, commonly known as a market or mart, is a bustling hub where individuals convene regularly to buy and sell various goods, from provisions to livestock. Found across the globe, markets come in diverse forms such as souks, bazaars, and mercados, reflecting regional cultures and traditions. Some markets operate daily, while others appear weekly or on special occasions. Whether bustling squares or covered halls, markets cater to a wide array of trading needs. Throughout history, markets have been vital for commerce, evolving from ancient bazaars to modern online platforms. Today, they remain essential for daily life, regulated to ensure quality and fairness, often serving as cultural landmarks and tourist attractions.
                </p>
              </div>
            </div>
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText"> What is ecommerce market place</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  An ecommerce marketplace is like a big online store where lots of different sellers can put their products for sale. Websites like Amazon, flipkart, Meesho, and eBay are best examples. The people who own the marketplace make sure lots of shoppers come to the site and handle the payments. The sellers are responsible for making and delivering the stuff they sell. It's like a streamlined way of selling things online. Instead of each seller having their own website, they all sell their things on one website. The marketplace owners make money by taking a small piece of the sales that happen on their site.
                </p>
              </div>
            </div>
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">How many standard shoots do you offer for a single product for the marketplace?</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  At VOILA Studio, we offer 5 standard shoots for a single product of ecommerce photoshoots in the marketplace.
                </p>
              </div>
            </div>
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">What is voila ecommerce market place</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  The VOILA eCommerce marketplace offers various photoshoot services for websites, focusing mainly on the Indian market. They collaborate with platforms like Amazon, Flipkart, eBay, Meesho, and others. VOILA Studio is meticulous in adhering to the rules of each platform, ensuring high-quality imagery. Their attention to detail guarantees the delivery of excellent photoshoots, enhancing product presentation and increasing brand visibility.
                </p>
              </div>
            </div>

            
          </div>
        </div>
      </div>
      <div id="section6" class="faq-section">
        <h3 class="hoverText" style="color:blue">SignUp and Login</h3>
        <div class="container">
          <div class="faq">
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">How do I login on VOILA Studio? I used to login with email, Google/Facebook login.</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  To log in to VOILA Studio, simply enter your registered mobile number and password. Easy as that!
                </p>
              </div>
            </div>
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">Why am I asked for password after entering OTP while trying to register?</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  After entering the OTP, VOILA Studio asks for a password to ensure the security of your account. This extra step makes logging in easier for you in the future by requiring a password only at the time of login.
                </p>
              </div>
            </div>
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">Can I still login with password on VOILA Studio?</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  Yes, you can simply log in using your password.
                </p>
              </div>
            </div>

            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">What if I don't receive an OTP due to poor network connectivity?</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  If you're not receiving the OTP due to poor network connectivity, don't worry! You can simply try again later or wait a bit for better signal.
                </p>
              </div>
            </div>

            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">Do I need to provide email to create an account on VOILA Studio?</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  Yes, providing your email during registration is necessary. It ensures you receive important updates about your orders, easy communication with us, and access to exclusive offers and newsletters. Plus, having your email linked to your account allows for smooth password resets when needed.
                </p>
              </div>
            </div>

            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">I have given my mobile number in my last order? Can I use that number to log in to VOILA Studio?</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  Mobile numbers given along with shipping address cannot be used to log in on VOILA Studio. To use a number for login on VOILA Studio, you need to add your number to your profile and verify it with OTP. This can be done under profile section in Account.
                </p>
              </div>
            </div>

            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">What happens if my mobile number is given to someone else by the telecom operator. Is my VOILA Studio account still safe?</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  Yes, your VOILA Studio account is safe. The other person cannot access your account as he will need to enter your account password. VOILA Studio systems can smartly detect such SIM handovers and ask the user to enter password additionally in such cases. The new user, however, will be able to create a new account with that number.
                </p>
              </div>
            </div>

            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">How can i change my mobile number that I use to login on VOILA Studio?</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  You can log in to your account and change it from your Profile > Edit Profile.                </p>
              </div>
            </div>

            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">I do not have my old mobile number? How can I log into my account and change mobile number?</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  You can update your account details by going to Account Recovery. For that, you will need to enter your old mobile number and go to the OTP page. You will find an option "Get Help" there to recover your account.                </p>
              </div>
            </div>

            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">Does VOILA Studio read my SMSes?</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  VOILA Studio can only read OTP SMSes that are sent by Myntra. This is in accordance with guidelines provided by Google and Apple in line with user privacy policies.                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="section7" class="faq-section">
        <h3 class="hoverText" style="color:blue">Fashion Portal</h3>
        <div class="container">
          <div class="faq">
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">What is Fashion portal</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  A fashion portal typically refers to a website or online platform that serves as a comprehensive resource for all things related to fashion. These portals often feature a variety of content, including articles, news, trends, style tips, reviews, interviews with designers, shopping guides, and sometimes even online shopping capabilities. They aim to provide users with a one-stop destination for everything they need to know about fashion, whether it's the latest runway trends, celebrity styles, or fashion industry updates. Fashion portals can cater to different demographics, interests, and niches within the fashion world.
                </p>
              </div>
            </div>
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">What is ecommerce fashion portal</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  An ecommerce fashion portal is an online platform that specializes in selling clothing, accessories, and beauty products exclusively through digital channels. These portals offer a wide range of fashion items from various brands, allowing customers to browse, select, and purchase products conveniently from their devices. Examples include Nykaa, Myntra, and Ajio, which have become prominent players in the Indian market. These websites provide a diverse selection of fashion and beauty products, along with features such as personalized recommendations, user reviews, and hassle-free delivery, making them popular choices for consumers seeking convenient and trend-forward shopping experiences.
                </p>
              </div>
            </div>
            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">How many standard shoots do you offer for a single product for the fashion portal?</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  At VOILA Studio, we offer 5 standard shoots for a single product of ecommerce photoshoots for fashion portal.
                </p>
              </div>
            </div>

            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">How many premium shoots do you offer for a single product for the fashion portal?</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  At VOILA Studio, we offer 6 premium shoots for a single product of ecommerce photoshoots for fashion portal.
                </p>
              </div>
            </div>

            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">Duration of a video as for fashion portal </h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  At VOILA Studio, the minimum duration for a fashion portal video is 10 seconds. Beyond that, the length can be customized according to your specific requirements. For more details or to discuss your project, please reach out to us via email at info@voilastudio.in or call us at +91 9810554548.
              <br>Keywords: Models for shoot, ecommerce shoot, ecommerce photoshoot, studio for product photography, VOILA Studio, ecommerce photography services, product photography ecommerce, fashion video shoot.
                </p>
              </div>
            </div>

            <div class="faq-item">
              <div class="faq-question">
                <h3 class="hoverText">What is VOILA ecommerce fashion portal</h3>
              </div>
              <div class="faq-answer">
                <p class="faq_answer">
                  VOILA eCommerce Fashion Portal focuses on tailored website photoshoots, particularly for the Indian market. We collaborate with platforms such as Nykaa, Myntra, AJIO, and others. Our VOILA Studio ensures that the photoshoots adhere to fashion website standards, resulting in top-quality images that resonate with the target audience.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
    <script>
      document.addEventListener("DOMContentLoaded", () => {
        const headings = document.querySelectorAll("#main-headings li");
        const sections = document.querySelectorAll(".faq-section");

        headings.forEach((heading) => {
          heading.addEventListener("click", () => {
            document
              .querySelector(".sidebar ul li.active")
              .classList.remove("active");
            heading.classList.add("active");

            const target = heading.getAttribute("data-target");
            document.getElementById(target).scrollIntoView({
              behavior: "smooth",
            });
          });
        });

        const debounce = (func, wait = 20, immediate = true) => {
          let timeout;
          return function () {
            const context = this,
              args = arguments;
            const later = function () {
              timeout = null;
              if (!immediate) func.apply(context, args);
            };
            const callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) func.apply(context, args);
          };
        };

        const handleScroll = debounce(() => {
          let current = "";

          sections.forEach((section) => {
            const sectionTop = section.offsetTop;
            if (pageYOffset >= sectionTop - 20) {
              current = section.getAttribute("id");
            }
          });

          headings.forEach((li) => {
            li.classList.remove("active");
            if (li.getAttribute("data-target") === current) {
              li.classList.add("active");
            }
          });
        });

        window.addEventListener("scroll", handleScroll);
      });

      document.addEventListener("DOMContentLoaded", () => {
        const faqItems = document.querySelectorAll(".faq-item");

        faqItems.forEach((item) => {
          item.querySelector(".faq-question").addEventListener("click", () => {
            const answer = item.querySelector(".faq-answer");

            if (answer.classList.contains("show")) {
              answer.classList.remove("show");
            } else {
              answer.classList.add("show");
            }

            faqItems.forEach((otherItem) => {
              if (otherItem !== item) {
                otherItem.querySelector(".faq-answer").classList.remove("show");
              }
            });
          });
        });
      });
    </script>



  </body>
  <?php // include("newfooter.php"); ?>

</html>
