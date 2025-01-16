<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$company = $_POST['company'];
$zipcode = $_POST['zipcode'];
$size = $_POST['size'];
$message = $_POST['message'];

$to = "hr@cloudtekcorp.com";
			$from= $_POST['email'];
			$subject ="User Contact Details";
			$body = "<table>

			                <tr>
							    <th colspan='2'><h1 style=color:#3191c8><u>User Contact Details</u></h1></th>
							 </tr><br>

	                         <tr>
							    <th colspan='2'><h3 style=color:green>This Mail is From User Contact details from  CloudTek</h3></th>
							 </tr><br>

							  <tr>
							    <td style=color:blue><b>First Name :</b></td>
								<td>".$fname."</td>
							 </tr><br>

							  <tr>
							    <td style=color:blue><b>Last Name :</b></td>
								<td>".$lname."</td>
							 </tr><br>

							 <tr>
							    <td style=color:blue><b>Email  :</b></td>
								<td>".$email."</td>
							 </tr><br>

							 <tr>
							  <td style=color:blue><b>ZipCode :</b></td>
							  <td>".$zipcode."</td>
							</tr><br>

							 <tr>
							  <td style=color:blue><b>Company Name :</b></td>
							  <td>".$company."</td>
							</tr><br>

							 <tr>
							  <td style=color:blue><b>Company Size :</b></td>
							  <td>".$size."</td>
							</tr><br>



							<tr>
							  <td style=color:blue><b>Message / Comments :</b></td>
							  <td>".$message."</td>
							</tr><br>
	                     <table>";
	                     $body = preg_replace('/\\\\/','', $body); //Strip backslashes



$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "From: ".$_POST['email'] . "\r\n" .
"Reply-To: hr@cloudtekcorp.com" . "\r\n" .
"X-Mailer: PHP/" . phpversion();

$mail= mail($to,$subject,$body,$headers);

header("Location:thanks.html");


?>