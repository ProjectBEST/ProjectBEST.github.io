<?php
 if(isset($_POST['submit']))
 {
    $name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$query = $_POST['message'];
	$email_from = $name.'<'.$email.'>';

 $to="projectbest.usa@gmail.com";
 $subject="Enquiry!";
 $headers  = 'MIME-Version: 1.0' . "\r\n";
 $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 $headers .= "From: ".$email_from."\r\n";
 $message="	  
 	   
 		 Name:
		 $name 	   
         <br>
 		 Email-Id:
		 $email 	   
         <br>
         Phone:
		 $phone 	   
         <br>
 		 Message:
		 $query 	   
      
   ";
	if(mail($to,$subject,$message,$headers))
		header("Location:../contact.php?msg=Successful Submission! Thank you for contacting us.");
	else
		header("Location:../contact.php?msg=Error To send Email !");
		//contact:-your-email@your-domain.com
 }
?>
