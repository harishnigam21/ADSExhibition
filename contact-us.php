
<?php 
$title="Contact Us || ADS EXHIBITION AND EVENTS SOLUTION";
$dir="contact";
include('structure/header.php'); 
?>
<!-- End of Header -->

<?php 
  $mess="";
    if(isset($_POST['sendMSGCOnatcv']))
    {
    include('adminPanel/config/database.php');
    include('adminPanel/models/adminModel/contactModel.php');

      $name =  mysqli_real_escape_string ($conn,$_POST['userName']);
      $num =  mysqli_real_escape_string ($conn,$_POST['userNumber']);
      $email =  mysqli_real_escape_string ($conn,$_POST['userEmail']);
      $mess= mysqli_real_escape_string ($conn,$_POST['userMEss']);
      if($num != "" && $name != "" && $email != "" && $mess != "" )
      {
        $errorCode=addContact($conn,$name,$num,$email,$mess);
          if($errorCode=="1")
            {
                $token="contact"; // Set token to trigger the contact mail logic
                include('sendmail.php');
             $mess="<span> <p style='background-color: green;color: white;padding: 5px 2px 1% 5%;'> Thank You For Contacting. </p> </span>";
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

       <section id="content-region-3" class="padding-40 page-tree-bg">
            <div class="container">
                <h3 class="page-tree-text">
                    get in touch
                </h3>
            </div>
        </section><!--page-tree end here-->

        <div class="space-70"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h4 class="heading-mini">We’d Love to Hear From You</h4>
                    <div style="display:flex;gap:10px;">
                        <strong style="white-space:nowrap;font-size:32px;">Warehouse :</strong>
                        <p style="margin:0;font-size:20px;"><span style="white-space:nowrap;">Delhi(NCR)</span>, <span style="white-space:nowrap;">Mumbai</span>, <span style="white-space:nowrap;">Bangalore</span>, <span style="white-space:nowrap;">Hyderabad</span></p>
                    </div>
                    <div class="space-20"></div>
                 	 <p><b>Get in touch using the contact details below:</b></p>
                    <p> <b> Address : </b> <?php echo $website['storeAddress']; ?> </p>
                  	<hr>
                    <p>	<b> Phone : </b><a style="color:unset;" target="_blank" href="https://wa.me/<?php echo $website['storeNumber1']; ?>">+91 <?php echo $website['storeNumber1']; ?></a>, <a style="color:unset;" target="_blank" href="https://wa.me/<?php echo $website['storeNumber2']; ?>">+91 <?php echo $website['storeNumber2']; ?></a></p>
                    <div style="display:flex;gap:10px">
                        <b style="white-space: nowrap;"> Email : </b>
                    <span> <a style="color:unset;" target="_blank" href="mailto:<?php echo $website['mailingEmails'];?>"><?php echo $website['mailingEmails'];?></a>, <a style="color:unset;" target="_blank" href="mailto:<?php echo $website['storeEmail'];?>"><?php echo $website['storeEmail'];?></a>, <a style="color:unset;" target="_blank" href="mailto:<?php echo $website['storeEmail2'];?>"><?php echo $website['storeEmail2'];?></a></span>
                    </div>
                 </div>
                <div class="col-md-6 ml-auto">
                    <h4 class="heading-mini">Contact us</h4>
                    <?php
                    if($mess != "")
                    echo $mess; 
                    ?>
                    <div class="my-contact-form">
                        <form  method="post" action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row control-group">
                                        <div class="form-group col-sm-12 controls">

                                            <input type="text" class="form-control" placeholder="Name*" id="name" name="userName" required="">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="row control-group">
                                        <div class="form-group col-sm-12 controls">                   
                                            <input type="email" name="userEmail" class="form-control" placeholder="Email Address*"  required="">
                                            <p class="help-block"></p>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-sm-12">
                                    <input type="text" class="form-control" name="userNumber" placeholder="Contact Number*" required="">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-sm-12 controls">
                                    <textarea rows="5" class="form-control" name="userMEss" placeholder="Message*" required=""></textarea>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <br>
                            <div id="success"></div>
                            <div class="row">
                                <div class="form-group col-sm-12 text-right" style="margin-top: -15px;">
                                    <button type="submit" name="sendMSGCOnatcv" class="btn theme-btn-color btn-lg">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!--contact page end-->
<!-- including Footer secition -->
<?php include('structure/footer.php'); ?>
<!-- End of Footer -->
