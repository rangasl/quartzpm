<!DOCTYPE html>
<html>
<?php session_start();?>
<head>
<title>Thank you</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  
<style type="text/css">
body {
  background-color: #eee;
}

body, h1, p {
  font-family: "Helvetica Neue", "Segoe UI", Segoe, Helvetica, Arial, "Lucida Grande", sans-serif;
  font-weight: normal;
  margin: 0;
  padding: 0;
  text-align: center;
}

.container {
  margin-left:  auto;
  margin-right:  auto;
  margin-top: 177px;
  max-width: 1170px;
  padding-right: 15px;
  padding-left: 15px;
}

.row:before, .row:after {
  display: table;
  content: " ";
}

.col-md-6 {
  width: 50%;
}

.col-md-push-3 {
  margin-left: 25%;
}

h1 {
  font-size: 48px;
  font-weight: 300;
  margin: 0 0 20px 0;
}

.lead {
  font-size: 21px;
  font-weight: 200;
  margin-bottom: 20px;
}

p {
  margin: 0 0 10px;
}

a {
  color: #3282e6;
  text-decoration: none;
}
</style>
</head>

<body>



<?php

// if(isset($_REQUEST['email'])){
 $to = "sales@pmquartz.in"; 


 $name = $_REQUEST["fname"] ?? '';
 $phone = $_REQUEST["phone"] ?? '';
 $email = $_REQUEST["temail"] ?? '';
 $tmessage = $_REQUEST["message"] ?? '';
$subject = $_REQUEST["subject"] ?? ''; 
 $cptch= $_REQUEST['captcha_challenge'] ?? '';
 
 $message = "<p>Name: ".$name."</p>";
 $message .=  "<p>Number: ".$phone."</p>";
 $message .= "<p>Email: ".$email."</p>";
 $message .= "<p>Message: ".$tmessage."</p>"; 

 
 $header = "From:".$email." \r\n";

 $header .= "MIME-Version: 1.0\r\n";
 $header .= "Content-type: text/html\r\n";
 
 



 if( $_SESSION['caotcga'] == $cptch){  
    $retval = mail ($to,$subject,$message,$header);
        
        if( $retval == true ) {
            echo "<h4>Thank you for contacting us. Our representative will contact you shortly.</h4>";
        }else {
            echo "Message could not be sent...";
        }
}
else{// Captcha verification is Correct. Final Code Execute here!              
      
$msg="<span style='color:red'>The Validation code does not match!</span>";

echo $msg;
}
?>



<div class="container text-center" id="error">
  <svg height="100" width="100">
  
   
  </svg>

</body>
</html>
