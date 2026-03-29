<!-- including header secition -->
<?php 
$title="Home || ADS EXHIBITION AND EVENTS SOLUTION";
$dir="index";
include('structure/header.php'); 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>
<!-- End of Header -->

<?php 
  $mess="";
    if(isset($_POST['submitSubscribe']))
    {
    include('adminPanel/config/database.php');
    include('adminPanel/models/adminModel/subscribeModel.php');
      $email =  mysqli_real_escape_string ($conn,$_POST['email']);
      if($email != "")
      {
        $errorCode=addSubscribe($conn,$email);
          if($errorCode=="1")
            {
                $token="sub"; // Set token to trigger the contact mail logic
                include('sendmail.php');
             $mess="<span> <p style='background-color: green;color: white;padding: 5px 2px 1% 5%;'> Thank You For Subscribing. </p> </span>";
            }
            else
            {
             $mess="<span> <p style='background-color: red;color: white;padding: 5px 2px 1% 5%;'>Error Please try Again. </p> </span>";
            }
      }
      else
      {
        $mess="<span> <p style='background-color: red;color: white;padding: 5px 2px 1% 5%;'>Error Please Provide Details. </p> </span>";
      }
    }

?>

<!-- including Menu secition -->
<?php include('structure/menu.php'); ?>
<!-- End of Menu -->
        <!--<section id="slider-sec" class="slider-reg">-->
                <!-- Swiper -->
        <!--        <div class="swiper-container swiper-fullwidth">-->
        <!--            <div class="swiper-wrapper">-->
        <!--                <div class="swiper-slide">-->
        <!--                    <img src="adminPanel/assets/img/banner/<?php echo $banner['image1']?>" alt="refresh" class="img-fluid deskH" width="100%" style="position: relative;">-->
                            
        <!--                </div>-->
        <!--                <div class="swiper-slide">-->
        <!--                    <img src="adminPanel/assets/img/banner/<?php echo $banner['image2']?>" alt="refresh" class="img-fluid deskH" width="100%" style="position: relative;">-->
                            
        <!--                </div>-->
        <!--            </div>-->
                    <!-- Add Arrows -->
        <!--            <div class="swiper-button-next" style="color: #e53e31; font-size: 50px;    font-weight: 600;"></div>-->
        <!--            <div class="swiper-button-prev" style="color: #e53e31; font-size: 50px;    font-weight: 600;"></div>-->
        <!--        </div>-->
    
        <!--</section><!--main flex slider end-->
        
        <!--if want video as banner-->
        <div style="width:100% position:relative;display:flex;justify-content: center;height:100%;overflow:hidden;">
            <div style="background-color: black;color:white;height:100%;width:100%;padding:0;margin:0;">
            <video style="width:100%;" autoplay loop muted playsinline>
            <source src="adminPanel/assets/video/home_video1.mp4" type="video/mp4">Your browser does not support the video tag.
        </video>
                
            </div>
        </div>
        
        <div class="space-50"></div>
        <div class="container">
                <div class="row intro-row">
                    <div class="col-md-12 text-center wow animated fadeInUp">
                        <h2>Welcome to Ads Exhibition </h2>
                        <p class="bottommargin_30">
                            ADS EXHIBITION is one of the best exhibition companies in Delhi, with over 10+ years of experience in creating exhibition stands that bring brands to life. As a trusted exhibition stand builder in Delhi NCR, our team handles everything from concept and design to production and installation, ensuring a smooth and stress-free process for our clients. With ADS EXHIBITION by your side, you can be confident that your exhibition presence will be memorable, professional, and built to impress.
                            </p>
                    </div>
                    <div class="space-70"></div>
                    <div class=" col-md-4 wow animated bounceIn">
                        <div class="services-box">
                            <i class="ion-laptop"></i>
                            <h4>Exhibition stall</h4>
                            <p>
                                End-to-end service for planning, designing, building, and installing visually compelling stands for all trade show needs.
                            </p>
                        </div>
                    </div><!--services box-->
                    <div class=" col-md-4 wow animated bounceIn" data-wow-delay=".2s">
                        <div class="services-box">
                            <i class="ion-ios-color-wand-outline"></i>
 <h4>Stall fabrication</h4>
                            <p>
                            Custom designing and constructing unique, bespoke exhibition booths using wood, metal, and other materials for maximum impact.
                            </p>

                            
                        </div>
                    </div><!--services box-->
                    <div class="col-md-4 wow animated bounceIn" data-wow-delay=".3s">
                        <div class="services-box">
                            <i class="ion-laptop"></i>
                           <h4>Octonorm stall branding</h4>
                            <p>
                            Branding modular Octonorm shell scheme stands with high-impact graphics, fascia, and signage for exhibitions.
                            </p>
                        </div>
                    </div><!--services box-->
                </div><!--row end-->
        </div><!--intro with services end-->
        <div class="space-70"></div><div class="space-30"></div>

        <div class="space-70"></div>
    <div class="container">
        <div class="row" style="display:flex;flex-direction:row;align-items:center;">
                <div class="col-md-6">
                <video muted width="100%" height="315" src="adminPanel/assets/video/home_video1.mp4" controls>Your browser does not support the video tag.</video>
                </div><!--our skill progress bar col end-->

                <div class="col-md-6 hire-sec">
                    <h4 class="heading-mini">Why choose us?</h4>
                    <div class="row">
                        <div class="col-md-3 services-icon">
                            <i class="ion-laptop"></i>
                        </div><!--services icon-->
                        <div class="col-md-9 services-text">
                            <h4 class="heading-mini">Complete advertising solution under one roof</h4>
                            <p>
                           We understand the complexity of scattered advertising services company; that’s why we offer an array of all advertising services under one roof to help ease the burden.  
                            </p>
                        </div><!--services 1 text-->
                    </div><!--services 1 row-->
                    <div class="space-20"></div>
                    <div class="row">
                        <div class="col-md-3 services-icon">
                            <i class="ion-ios-barcode-outline"></i>
                        </div><!--services icon-->
                        <div class="col-md-9 services-text">
                            <h4 class="heading-mini">Best Quality and Services</h4>
                            <p>
                          We are known for best quality and rapid services. We have highly experienced team to deliver best quality of product on time.  
                            </p>
                        </div><!--services 2 text-->
                    </div><!--services 2 row-->
                    
                </div><!--hire section end-->
            </div><!--row-->
            </div><!--about content end-->
            
            <!--testimonal section starts here-->
        <!--    <div class="space-50"></div>-->
        <!--    <section id="google-reviews">-->
        <!--        <div class="container">-->
        <!--            <div class="row">-->
        <!--                <div class="col-md-8 mr-auto ml-auto text-center">-->
                         <!-- Elfsight Google Reviews | Untitled Google Reviews -->
        <!--                    <script src="https://static.elfsight.com/platform/platform.js" async></script>-->
        <!--                    <div class="elfsight-app-85883aae-9459-4a2f-8080-743ee04a6524" data-elfsight-app-lazy></div>-->
        <!--                </div>-->
        <!--        </div>-->
        <!--    </section>-->
        <!--    <div class="space-70"></div>-->
        <!--testimonials section end here-->
<div class="space-70"></div>
        <div class="newsletter-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h3>Get latest news from us</h3>
                        <p>
                            Subscribe to our newsletter
                        </p>
                    </div>
                </div><!--row-->

                <div class="row">
                    <div class="col-md-4 ml-auto mr-auto text-center">
                        <form method="post" action="#" class="form-subscribe">
                            <input type="text" name="email" placeholder="Email Id..." class="form-control" style="border:1px solid black;">
                            <button type="submit" name="submitSubscribe" class="btn theme-btn-color btn-block">Subscribe Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        
        <!--<div class="cta-bg">-->
        <!--    <div class="container text-center">-->
        <!--        <h3>Interested Then Try it..-->
        <!--            <a href="pickup.php" class="btn btn-lg btn-white btn-radius">Schedule Pickup</a>-->
        <!--        </h3>-->
        <!--    </div>-->
        <!--</div>-->
        
        
        <!-- Including footer page -- footer-->
          <?php include("structure/footer.php");  ?>
        <!--#footer option end-->
    
    </body>

</html>