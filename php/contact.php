<?php

if(isset($_POST['message'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
        $phone = $_POST['c_phone'];
        $c_procode = $_POST['c_procode'];
	$message = $_POST['message'];
    
	
	$to      = 'varmasuresh26@gmail.com';
	$subject = 'Product Equiry from SaintStraingFacts.com';

	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: '. $email . "\r\n";

        $msg = "Name : ".$name."\r\n";
        
        $msg .= "Email : ".$email."\r\n";
        
        $msg .= "Phone : ".$phone."\r\n";
        
        $msg .= "Product Code : ".$c_procode."\r\n";
        
        $msg .= "Message : ".$message."\r\n";
        
	$status = mail($to, $subject, $msg, $headers);

	if($status == TRUE){	
		$res['sendstatus'] = 'done';
	
		//Edit your message here
		$res['message'] = 'Your Message Sent Successfully';
    }
	else{
		$res['message'] = 'Failed to send mail. Please Try Again';
	}
	
	
	echo json_encode($res);
}

?>