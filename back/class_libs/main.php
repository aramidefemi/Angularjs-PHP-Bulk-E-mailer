

<?php






/**
	* user account details class
	*/





class actions
{
	
	function sendMail ($to,$from,$body,$subject) {
		$message = $body;		
		//  Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		
		
		//  More headers
		$headers .= 'From: <'.$from.'>' . "\r\n";
		
		
		mail($to,$subject,$message,$headers);
	}
	function getTemplate(){
		return file_get_contents('../mail/sample.html');
	}
}

?>