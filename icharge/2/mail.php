
<?php 

		
if(isset($_POST['submit'])){
    $to = 'ramyar026@gmail.com'; // this is your Email address
	$email = $_POST['form-email']; // this is the sender's Email address
    $name  = $_POST['form-name'];

    $phone = $_POST['form-phone'];
	//$subject = $_POST['subject'];
    $req=$_POST['form-message'];
   

		$subject = 'Enquiry';
		$headers = "From:" . $email . "\r\n";
		$headers .= "Reply-To:" . $email . "\r\n";
		$headers .= "Return-Path: 'ramyar026@gmail.com'\r\n";
		$headers .= 'Cc: ramyar026@gmail.com ' . "\r\n";
		/*$headers .= 'Bcc: ramya@gwebsolution.com'."\r\n";*/

		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		
		$message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
		$message .= '<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
		$message .= '<title>Enquiry For :  Enquiry</title></head><body style="font-family:Arial, Helvetica, sans-serif;"><br /><br />';
		


		$message .= '<table  cellspacing="0" cellpadding="10" style="color:#207fdc;border:1px solid #207fdc;" width="600" align="center" >
				<tr bgcolor="#fff"   ><td height="40px" colspan="3" align="center" bgcolor="#207fdc" style="color:#FFF; font-size:16px; font-weight:bold;">Enquiry For <a href="#" style="color:#FFF; text-decoration:none;">Enquiry </a></td></tr>


				<tr bgcolor="#fff" cellpadding="2"  >
			<td bgcolor="#fff" style="font-size:12px;font-weight:bold; color:#207fdc; padding-left:20px;border-right:1px solid #9a9a9a;border-bottom:1px solid #9a9a9a;">Name</td>
<td style="border-bottom:1px solid #9a9a9a;color:#9a9a9a;">' . $name . '</td></tr>

<tr bgcolor="#fff" cellpadding="2"  >
			<td bgcolor="#fff" style="font-size:12px;font-weight:bold; color:#207fdc; padding-left:20px;border-right:1px solid #9a9a9a;border-bottom:1px solid #9a9a9a;">Phone No</td>
<td style="border-bottom:1px solid #9a9a9a;color:#9a9a9a;">' . $phone . '</td></tr>


<tr bgcolor="#fff" cellpadding="2"  >
			<td bgcolor="#fff" style="font-size:12px;font-weight:bold; color:#207fdc; padding-left:20px;border-right:1px solid #9a9a9a;border-bottom:1px solid #9a9a9a;">E-mail</td>
<td style="border-bottom:1px solid #9a9a9a;color:#9a9a9a;">' . $email . '</td></tr>

	

<tr bgcolor="#fff" cellpadding="2"  >
			<td bgcolor="#fff" style="font-size:12px;font-weight:bold; color:#207fdc; padding-left:20px;border-right:1px solid #9a9a9a;">Requirment</td>
<td style="color:#9a9a9a;">' . $req . '</td></tr></table>';


		
		$message .= '</body></html>';
		
		//echo $headers;
		$mail_send = mail($to, $subject, $message, $headers);
		 
		

		if($mail_send)
		{
			$msg = "Your Enquiry has been successfully submitted.";
		} else {
			$msg = " Mail Sending Failed";
		}

		print ('<script language="javascript">');
		print ('alert("' .$msg. '");');
        	print ('</script>');

		print ('<script language="javascript">');
		print ('window.location="index.html"');
        	print ('</script>'); 
			
    }
	
	

?>
