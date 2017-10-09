<!DOCTYPE html>
<html >
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

<!-- Facebook Conversion Code for Leads - The Pug 1 -->
<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6029278935773', {'value':'0.00','currency':'AUD'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6029278935773&amp;cd[value]=0.00&amp;cd[currency]=AUD&amp;noscript=1" /></noscript>


<style>
a:link{

						color:#096976;
						text-decoration:none;
						font-size:14px;
						}
						a:visited{

						color:#096976;
						text-decoration:none;
						}

						a:hover{

						color:#096976;
						text-decoration:none;
						}
						</style>
</head>
<body >

<?php

				$mail_contatti = "info@thepug.com.au";
				$mail_sito = "info@thepug.com.au";
				
				
				
				$sopra ="<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\">
						<html><head>
						<meta http-equiv=Content-Type content=\"text/html; charset=windows-1252\">
						<meta content=\"MSHTML 6.00.2730.1700\" name=GENERATOR>
						<style>
						
						body {
							font-family: 'Lato', Calibri, Arial, sans-serif;
							font-size:16px;
							color:#096976;
							background-position: 15px 15px; 
							background-repeat: no-repeat;
							margin-left: 5px; 
							margin-top: 4px; 
							margin-bottom: 4px;
							text-align:left;
							line-height:20px;
						}
						a:link{

						color:#096976;
						text-decoration:none;
						}
						a:visited{

						color:#096976;
						text-decoration:none;
						}

						a:hover{

						color:#096976;
						text-decoration:none;
						}
						</style>
						</head>
						<body >
						<div>
						<br />
						
						";
						
$sotto ="</div><br />
		
					
					
					<div>
						<table>
					
							<tr>	
								<td style=\"width:200px\" ><img src=\"http://www.thepug.com.au/wp-content/themes/pugfinancial/img/pug_sml.png\" /></td>
								<td valign=\"top\" style=\"padding-top:15px;width:250px\">
								<b>Pug Team</b><br /><br /><span style=\"font-size:14px;\">0419 202 972</span><br />
								<span style=\"font-size:14px;\">1300 THE PUG</span><br /><br />
								<img src=\"http://www.thepug.com.au/wp-content/themes/pugfinancial/img/logo_smler.png\" />
									<br /> Little Dog, Big Deals!
								</td>
								
							</tr>
							<tr>
								<td colspan=\"2\"><div style=\"text-align:justify;font-size:12px;color:#929393;\" >
								
								Credit Representative Number 480297 | Pug Financial Pty Ltd - ABN 63 168 655 089 (Credit Representative Number 480259)
								is authorised under Australian Credit Licence Number 389328.<br /><br />
All loan offers and products shown on the website www.thepug.com.au or in this email, are subject to lender approval, terms and conditions.
 Please contact The Pug on 1300 843 784 for key details regarding these terms and conditions. Your full financial situation would need to 
 be reviewed prior to acceptance of any offer or product. All rates, deals and offers are believed to be correct at the time of publication,
 but are subject to final confirmation by lender and may change without notice.<br /><br />
Any comparison rates shown on the website www.thepug.com.au or in this email, are based on a loan amount of $150,000 and a 
term of 25 years. Warning: These comparison rates apply only to the example or examples given. 
Different amounts and terms will result in different comparison rates. Costs such as redraw fees or early repayment
 fees, and costs savings such as fee waivers, are not included in the comparison rate but may influence the cost of the loan.<br /><br />
This email and any files transmitted with it are confidential and intended solely for the use of the
individual or entity to whom they are addressed. If you are not the named addressee you should
not disseminate, distribute or copy this e-mail. Please notify the sender immediately by e-mail
if you have received this e-mail by mistake and delete this e-mail from your system. If you are not
the intended recipient you are notified that disclosing, copying, distributing or taking any action in
reliance on the  contents of this information is strictly prohibited.
								
							

</div></td>
							</tr>
						</table>

					
					</div>
					
					


					</body></html>";
				
				$oggetto_ut    = "Thank you for your Request - The Pug";
				$oggetto_az    = "Info Request - The Pug";
				$intestazioni  = "From: The Pug <$mail_contatti>\n";
				$intestazioni .= "MIME-Version: 1.0\n";
				$intestazioni .= "Content-type: text/html; \n charset=iso-8859-1\n";		
				
				
				
				if(isset($_POST["sent"]) && $_POST["sent"]=="land"){
					
				
				
				
				
				$mail_phone = $_POST["mail_phone"];
			
				

						
				$testo_cliente ="Dear Consumer,<br /><br />
				Thank you for contacting The Pug.
				A representative will contact you shortly.
				
				<br /> <br /> Yours sincerely,<br /><br />

				";
				
				

				 $testo_az ="<br /><br />New info request from The Pug <strong>Landing</strong> page:
				<br /><br />
				
				<b>E-mail / Phone:</b> $mail_phone<br />
				
				
				<br />

				";

					$testo_cli = $sopra . $testo_cliente . $sotto;
					 $testo_az = $sopra . $testo_az . $sotto;
					
				 $resp1 =  mail($mail_contatti, $oggetto_az, $testo_az, $intestazioni,"-f$mail_sito");
				
				mail("alessio@thepug.com.au", $oggetto_az, $testo_az, $intestazioni,"-f$mail_sito");
				if($email!=""){ $resp2 =  mail($email, $oggetto_ut, $testo_cli, $intestazioni,"-f$mail_sito");}
				 
				 $msg="";
				 if($resp1== 1 ){
					 $msg = "Dear Consumer, thank you for contacting The Pug.<br />A representative will contact you shortly.";
				 }else{
					$msg = "Error sending.please try again.";
				 }
			
			



			
		echo "<div style=\"color:rgb(51, 51, 51);font-weight: 100;text-align:center;font-family: Lato, Calibri, Arial, sans-serif;font-size: 20px;line-height: 40px;\"><br /><br /><br />
		<img src=\"http://www.thepug.com.au/wp-content/themes/pugfinancial/img/pug_sml.jpg\" /><br /><br />
		$msg
		<br /><br />
			<a class=\"main_b last\" href=\"http://www.thepug.com.au\">RETURN TO HOME</a>
		</div>";	
				
				
				}else if(isset($_POST["sent"]) && $_POST["sent"]=="challenge"){
					
				
				
				
				
				$name = $_POST["name"];
				$mail_phone = $_POST["mail_phone"];
				$type_loan = $_POST["type_loan"];
				$my_value = $_POST["my_value"];
				$my_loan = $_POST["my_loan"];
				 $therate=$_POST["therate"];
				

						
				$testo_cliente ="Dear Consumer,<br /><br />
				Thank you for contacting The Pug.
				A representative will contact you shortly.
				
				<br /> <br /> Yours sincerely,<br /><br />

				";
				
				

				 $testo_az ="<br /><br />New info request from The Pug <strong>Challenge</strong> page:
				<br /><br />
				
				<b>Name:</b> $name<br />
				<b>E-mail / Phone:</b> $mail_phone<br />
				<b>Rate:</b> $therate<br />
				<b>Property value:</b> $my_value<br />
				<b>Loan Required:</b> $my_loan<br />
				<b>Type of Loan:</b> $type_loan<br />
				
				
				<br />

				";

					$testo_cli = $sopra . $testo_cliente . $sotto;
					 $testo_az = $sopra . $testo_az . $sotto;
					
				 $resp1 =  mail($mail_contatti, $oggetto_az, $testo_az, $intestazioni,"-f$mail_sito");
				
				mail("alessio@thepug.com.au", $oggetto_az, $testo_az, $intestazioni,"-f$mail_sito");
				if($email!=""){ $resp2 =  mail($email, $oggetto_ut, $testo_cli, $intestazioni,"-f$mail_sito");}
				 
				 $msg="";
				 if($resp1== 1 ){
					 $msg = "Dear Consumer, thank you for participating in our challenge.
					<br /><br />
					We shall endeavour to call you shortly with some great rates , and hopefully help you save some money ";
				 }else{
					$msg = "Error sending.please try again.";
				 }
			
			



			
		echo "<div style=\"color:rgb(51, 51, 51);font-weight: 100;text-align:center;font-family: Lato, Calibri, Arial, sans-serif;font-size: 20px;line-height: 40px;\"><br /><br /><br />
		<img src=\"http://www.thepug.com.au/wp-content/themes/pugfinancial/img/pug_sml.jpg\" /><br /><br />
		$msg
		<br /><br />
			<a class=\"main_b last\" href=\"http://www.thepug.com.au\">RETURN TO HOME</a>
		</div>";	
				
				
				
				
				
						
				
				
				}else if(isset($_POST["sent"]) && $_POST["sent"]=="contact"){
					
				
				$name = ucfirst($_POST["name"]);
				$phone = $_POST["phone"];
				$email = $_POST["email"];
				$message = $_POST["message"];
				

						
				$testo_cliente ="Dear $name,<br /><br />
				Thank you for contacting The Pug.
				A representative will contact you shortly.
				
				<br /> <br /> Yours sincerely,<br /><br />

				";
				
				

				 $testo_az ="<br /><br />New info request from The Pug <strong>Contact</strong> page:
				<br /><br />
				<b>Name:</b> $name;<br />
				<b>E-mail:</b> $email<br />
				<b>Phone:</b> $phone<br />
				<b>Message:</b> $message<br />
				
				<br />

				";

					$testo_cli = $sopra . $testo_cliente . $sotto;
					 $testo_az = $sopra . $testo_az . $sotto;
					
				 $resp1 =  mail($mail_contatti, $oggetto_az, $testo_az, $intestazioni,"-f$mail_sito");
				
				mail("alessio@thepug.com.au", $oggetto_az, $testo_az, $intestazioni,"-f$mail_sito");
				if($email!=""){ $resp2 =  mail($email, $oggetto_ut, $testo_cli, $intestazioni,"-f$mail_sito");}
				 
				 $msg="";
				 if($resp1== 1 ){
					 $msg = "Dear $name, thank you for contacting The Pug.<br />A representative will contact you shortly.";
				 }else{
					$msg = "Error sending.please try again.";
				 }
			
			



			
		echo "<div style=\"color:rgb(51, 51, 51);font-weight: 100;text-align:center;font-family: Lato, Calibri, Arial, sans-serif;font-size: 20px;line-height: 40px;\"><br /><br /><br />
		<img src=\"http://www.thepug.com.au/wp-content/themes/pugfinancial/img/pug_sml.jpg\" /><br /><br />
		$msg
		<br /><br />
			<a class=\"main_b last\" href=\"http://www.thepug.com.au\">RETURN TO HOME</a>
		</div>";	

		}else if(isset($_POST["sent"]) && $_POST["sent"]=="speak"){
	
	
				$name = ucfirst($_POST["name"]);
				$phone = $_POST["phone"];
				$time_preferred = $_POST["time_preferred"];
				$weekend=" No";
				if(isset($_POST["weekend"]) && $_POST["weekend"]=="on"){
					$weekend=" Yes";
				}
				$testo_cliente ="Dear $name,<br /><br />
				Thank you for contacting The Pug.
				A representative will call you at the specified time.
				
				<br /> <br /> Yours sincerely,<br /><br />

				";
				
				

				 $testo_az ="<br /><br />New request from The Pug <strong>Speak to our Experts</strong> page:
				<br /><br />
				<b>Name:</b> $name;<br />
				<b>Phone:</b> $phone<br />
				<b>Time preferred:</b> $time_preferred<br />
				<b>Including weekend:</b> $weekend<br />
				<br />

				";

					$testo_cli = $sopra . $testo_cliente . $sotto;
					 $testo_az = $sopra . $testo_az . $sotto;
					
				 $resp1 =  mail($mail_contatti, $oggetto_az, $testo_az, $intestazioni,"-f$mail_sito");
				
				mail("alessio@thepug.com.au", $oggetto_az, $testo_az, $intestazioni,"-f$mail_sito");
				 
				//if($email!=""){ $resp2 =  mail($email, $oggetto_ut, $testo_cli, $intestazioni,"-f$mail_sito");}
				 
				 $msg="";
				 if($resp1== 1 ){
					 $msg = "Dear $name,<br /><br /> Thank you for choosing The Pug for your loan needs. 
					 A representative will call you at the specified time.";
				 }else{
					$msg = "Error sending.please try again.";
				 }
			
			



			
		echo "<div style=\"color:rgb(51, 51, 51);font-weight: 100;text-align:center;font-family: Lato, Calibri, Arial, sans-serif;font-size: 20px;line-height: 40px;\"><br /><br /><br />
		<img src=\"http://www.thepug.com.au/wp-content/themes/pugfinancial/img/pug_sml.jpg\" /><br /><br />
		$msg <br /><br />
			<a class=\"main_b last\" href=\"http://www.thepug.com.au\">RETURN TO HOME</a></div>";	
	
	
		}else if(isset($_POST["sent"]) && $_POST["sent"]=="apply"){
			
			
				$name = ucfirst($_POST["my_name"]);
				$lastname = ucfirst($_POST["my_last_name"]);
				$email = $_POST["my_email"];
				$phone = $_POST["my_phone"];
				
				$my_value = $_POST["my_value"];
				$my_loan = $_POST["my_loan"];
				$my_interest = $_POST["my_interest"];
				/*$time_preferred = $_POST["time_preferred"];
				$weekend = $_POST["weekend"];
				if($weekend=="on"){
					$weekend=" Yes";
				}else{
					$weekend=" No";
				}*/
				
				/*<br />
				Once you submit your information, you will receive an email with a link, username and password.<br /> <br />
					Please follow the link to start your application and complete all information fields provided by the portal to avoid any delays.<br />
					If at any stage you get stuck or need more information, please call us on 1300 THE PUG.*/
					
				$testo_cliente ="Dear $name,<br /><br />
				Thank you for contacting The Pug.
				A representative will contact you shortly.
				
				<br /> <br /> Yours sincerely,<br /><br />

				";
				
				

				 $testo_az ="<br /><br />New request from The Pug <strong>Apply Now</strong> page:
				<br /><br />
				<b>Name:</b> $name;<br />
				<b>Last Name:</b> $lastname;<br />
				<b>Email:</b> $email<br />
				<b>Phone:</b> $phone<br />
				
				<b>Current Value of the property:</b> $ $my_value <br />
				<b>Loan required:</b> $ $my_loan <br />
				<b>Interested in:</b>  $my_interest <br />
				<br />

				";

					$testo_cli = $sopra . $testo_cliente . $sotto;
					 $testo_az = $sopra . $testo_az . $sotto;
					
				 $resp1 =  mail($mail_contatti, $oggetto_az, $testo_az, $intestazioni,"-f$mail_sito");
					
					mail("alessio@thepug.com.au", $oggetto_az, $testo_az, $intestazioni,"-f$mail_sito");
				 
				if($email!=""){ $resp2 =  mail($email, $oggetto_ut, $testo_cli, $intestazioni,"-f$mail_sito");}
				 
				 $msg="";
				 if($resp1== 1 ){
					 $msg = "Dear $name, Thank you for choosing The Pug for your Home Loan needs.<br />A representative will contact you shortly.
							
							<br /><br />
					<div style=\"color:#1D707B\"	>
					</div>
					
					 ";
				 }else{
					$msg = "Error sending.please try again.";
				 }
			
			



			
		echo "<div style=\"color:rgb(51, 51, 51);font-weight: lighter;text-align:center;font-family: 
		Lato, Calibri, Arial, sans-serif;font-size: 20px;line-height: 40px;\"><br />
		<img src=\"http://www.thepug.com.au/wp-content/themes/pugfinancial/img/pug_sml.jpg\" /><br /><br />
		
		$msg <br /><br />
			<a class=\"main_b last\" href=\"http://www.thepug.com.au\">RETURN TO HOME</a></div>	
			
			
			";
			
			
		}
		
?>
</body>
</html>