<?php
if(isset($token) && $token=="pickup" )
{
    $message='<table width="500" border="0" align="center" cellpadding="0" cellspacing="10" style="font-family:Arial, Helvetica, sans-serif; background-color:#e9e8e8; border:1px solid #cfcfcf;">
        <tr>
          <td colspan="2" style="font-size:16px; background-color:#172e50; color:#fff; padding:4px 10px;"><strong> New Pick Up  Details </strong></td>
        </tr>
        <tr>
          <td style="font-size:12px; font-weight:bold; padding:0px 0px 0px 10px;">First Name : '.$fname.'</td>
          <td style="font-size:11px;">&nbsp;</td>
        </tr>
        <tr>
          <td style="font-size:12px; font-weight:bold; padding:0px 0px 0px 10px;">Last Name : '.$lname.'</td>
          <td style="font-size:11px;">&nbsp;</td>
        </tr>  
         <tr>
          <td style="font-size:12px; font-weight:bold; padding:0px 0px 0px 10px;">Phone Number : '.$num.'</td>
          <td style="font-size:11px;">&nbsp;</td>
        </tr>
         <tr>
          <td style="font-size:12px; font-weight:bold; padding:0px 0px 0px 10px;">Email ID : '.$email.'</td>
          <td style="font-size:11px;">&nbsp;</td>
        </tr>
        <tr>
          <td style="font-size:12px; font-weight:bold; padding:0px 0px 0px 10px;">State : '.$state.'</td>
          <td style="font-size:11px;">&nbsp;</td>
        </tr>  
         <tr>
          <td style="font-size:12px; font-weight:bold; padding:0px 0px 0px 10px;">City : '.$city.'</td>
          <td style="font-size:11px;">&nbsp;</td>
        </tr>
        <tr>
          <td style="font-size:12px; font-weight:bold; padding:0px 0px 0px 10px;">Pincode : '.$pincode.'</td>
          <td style="font-size:11px;">&nbsp;</td>
        </tr>
         <tr>
          <td style="font-size:12px; font-weight:bold; padding:0px 0px 0px 10px;">Address : '.$add.'</td>
          <td style="font-size:11px;">&nbsp;</td>
        </tr>

        <tr>
          <td style="font-size:12px; font-weight:bold; padding:0px 0px 0px 10px;">Message  : '.$mess.'</td>
          <td style="font-size:11px;">&nbsp;</td>
        </tr>         
      </table>';
      

      	
      	$subject="New Pickup Point Details";
      	 
}
elseif(isset($token) && $token=="contact" )
{

  $message=
  'New Contact has been made :
    Name : '.$name.',
    Phone Number : '.$num.',
    Email ID : '.$email.',
    Message : '.$mess.','
    ;

      $subject="New User Contact Us";
      
}
 elseif(isset($token) && $token=="sub" )
{
   $message=
  'New Subscription received :
    Email ID : '.$email.''
    ;
   $subject="New Subscribe ";

}
else
  {
   echo "<script>
    window.location='index.php';
     </script>";
    exit();
  }

  $to="harishnigam21@gmail.com"; // Email that receives the contact form data
  $from="harishnigam21@gmail.com"; // Email you want to appear as the sender

$headers = "MIME-Version: 1.0\r\n";
$headers = "Content-type: text/html; charset=UTF-8\r\n"; // Added charset for better compatibility
$headers = "From: ADS EXHIBITION <".$from.">\r\n"; // Set the desired 'From' address
$headers = "Reply-To:".$email."\r\n"; // It's a good idea to set the form submitter's email as the Reply-To
 
 // Check if the email was successfully sent
 if (mail( $to, $subject, $message, $headers )) {
     echo "<script>alert('Thank for your time, we will get in touch soon. '); window.location='index.php';</script>";
 // Optional: Add logging or additional success logic here
 } else {
 // Optional: Add logging or failure logic here
 }

// ini_set("SMTP","localhost"); // These settings might be ignored or overridden by your hosting environment
// ini_set("smtp_port","25"); // if you are using a dedicated mail service.
$redirect=true;
// Removed the direct mail call here as it's cleaner to use the conditional one above.

?>