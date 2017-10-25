<?php

	$file_name = 'subs.txt'; 

	$error = null;

	//if((!isset($_POST['email'])) or (strlen($_POST['email']) === 0))
		//{
		//$error = 'No email address';
		//}

	
	//if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		//$error = 'Invalid email address';

	//if(file_exists($file_name))
	//{
		//$content = file_get_contents($file_name);
		//$list = explode("\n", $content);

		//if((in_array($_POST['email'], $list)) and ($error == null))
			//{
			//$error = 'Email address already exists';
			//}
	//}

	if($error == null)
	{
		
		$fp = fopen($file_name, "a+");
		fwrite($fp,$_POST['email']."\n");
		fclose($fp);
		
		$from = 'info@thepug.com.au';
		
		$header = "From: The Pug <".$from.">\n";
		$header .= "X-Mailer: ".phpversion()."\n";
		$header .= "MIME-Version: 1.0\n";
		$header .= "Content-Type: text/html; charset=\"utf-8\"\n";
		$header .= "Content-Transfer-Encoding: 7bit\n\n";
        
		$content = '
		
		<body bgcolor="#f1f1f2"><table width="620" height="794" align="center" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td width="620" height="61" colspan="4" style="font-size: 8px;">
			<img style="display: block; border: 0px; font-size: 8px;" src="http://thepug.com.au/eDMs/Welcome/images/Welcome_eDM2_01.jpg" width="620" height="61" alt=""/></td>
	</tr>
	<tr>
		<td width="620" height="102" colspan="4" style="font-size: 8px;">
			<img style="display: block; border: 0px; font-size: 8px;" src="http://thepug.com.au/eDMs/Welcome/images/Welcome_eDM2_02.jpg" width="620" height="102" alt=""/></td>
	</tr>
	<tr>
		<td width="71" height="120" style="font-size: 8px;">
			<img style="display: block; border: 0px; font-size: 8px;" src="http://thepug.com.au/eDMs/Welcome/images/Welcome_eDM2_03.jpg" width="71" height="120" alt=""/></td>
		<td width="479" height="120" colspan="2" style="font-size: 16px; font-family:Arial, Helvetica, sans-serif; color:#404040; background-color:#FFF;">

Dear Pug Lover,
<br /><br />
Thank you for your interest.
<br />
I will definitely get in touch with you
<br />
as soon as we launch our platform.

		</td>
		<td width="70" height="120" style="font-size: 8px;">
			<img style="display: block; border: 0px; font-size: 8px;" src="http://thepug.com.au/eDMs/Welcome/images/Welcome_eDM2_05.jpg" width="70" height="120" alt=""/></td>
	</tr>
	<tr>
		<td width="71" height="146" style="font-size: 8px;">
			<img style="display: block; border: 0px; font-size: 8px;" src="http://thepug.com.au/eDMs/Welcome/images/Welcome_eDM2_06.jpg" width="71" height="146" alt=""/></td>
		<td width="238" height="146" style="font-size: 8px;">
			<img style="display: block; border: 0px; font-size: 8px;" src="http://thepug.com.au/eDMs/Welcome/images/Welcome_eDM2_07.jpg" width="238" height="146" alt=""/></td>
		<td width="241" height="368" rowspan="2" style="font-size: 8px;">
			<img style="display: block; border: 0px; font-size: 8px;" src="http://thepug.com.au/eDMs/Welcome/images/Welcome_eDM2_08.jpg" width="241" height="368" alt=""/></td>
		<td width="70" height="146" style="font-size: 8px;">
			<img style="display: block; border: 0px; font-size: 8px;" src="http://thepug.com.au/eDMs/Welcome/images/Welcome_eDM2_09.jpg" width="70" height="146" alt=""/></td>
	</tr>
	<tr>
		<td width="71" height="222" style="font-size: 8px;">
			<img style="display: block; border: 0px; font-size: 8px;" src="http://thepug.com.au/eDMs/Welcome/images/Welcome_eDM2_10.jpg" width="71" height="222" alt=""/></td>
		<td width="238" height="222" style="font-size: 8px;">
			<img style="display: block; border: 0px; font-size: 8px;" src="http://thepug.com.au/eDMs/Welcome/images/Welcome_eDM2_11.jpg" width="238" height="222" alt=""/></td>
		<td width="70" height="222" style="font-size: 8px;">
			<img style="display: block; border: 0px; font-size: 8px;" src="http://thepug.com.au/eDMs/Welcome/images/Welcome_eDM2_12.jpg" width="70" height="222" alt=""/></td>
	</tr>
	<tr>
		<td width="620" height="57" colspan="4" style="font-size: 8px;">
			<img style="display: block; border: 0px; font-size: 8px;" src="http://thepug.com.au/eDMs/Welcome/images/Welcome_eDM2_13.jpg" width="620" height="57" alt=""/></td>
	</tr>
	<tr>
		<td width="620" height="86" colspan="4" style="font-size: 8px;">
			<img style="display: block; border: 0px; font-size: 8px;" src="http://thepug.com.au/eDMs/Welcome/images/Welcome_eDM2_14.jpg" width="620" height="86" alt=""/></td>
	</tr>
</table></body>
		
		';
		
		$subject = '*bark* Welcome *bark*';
				
        @mail($_POST['email'], $subject, $content, $header);

		die(header('Location: thanks.php'));
	}
	else
	{
	die(header('Location: index.php?error='.$error));
	}



?>