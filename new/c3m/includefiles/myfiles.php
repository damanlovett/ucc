<?php

function techconfirm($subject)
{

$user = $_POST['title'];
$mailto = 'eddie_lovett@ncsu.edu';
$password = $_POST['Password'];
$form = 'SEAHO 2007 Programming login info';
$email = $_POST['email'];
$first = $_POST['contactfirst'];
$last = $_POST['contactlast'];

// Header for return address
$headers = 'From: eddie_lovett@ncsu.edu' . "\r\n" .
   'Reply-To: eddie_lovett@ncsu.edu' . "\r\n" .
   'X-Mailer: PHP/' . phpversion();
   
// Header for html email
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

$message = "
<html>
<style type='text/css'>
<!--
.boldcolor {
	color: #000099;
	font-weight: bold;
}
.style1 {color: #000099}
-->
</style>
<body>

<h3>Request for C3M from ".$first." ".$last."</h3>
<hr />

<p>Event:".$user.",</p>
<p>Email:".$email.",</p>
</body>
</html>
";

mail($mailto, $subject, $message,$headers);


}

function myConfirmationEmail($subject)
{

$user = $_POST['contactfirst'];
$program = $_POST['title'];
$description = $_POST['eventdescription'];
$eventdate = $_POST['eventdate'];
$mailto = $_POST['email'];
$email = $_POST['email'];

// Header for return address
$headers = 'From: eddie_lovett@ncsu.edu' . "\r\n" .
   'Reply-To: eddie_lovett@ncsu.edu' . "\r\n" .
   'X-Mailer: PHP/' . phpversion();
   
// Header for html email
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

$message = "
<html>
<style type='text/css'>
<!--
.boldcolor {
	color: #000099;
	font-weight: bold;
}
.style1 {color: #000099}
-->
</style>
<body>

<b>C3M Submission Confirmation</b>
<hr />

<p>".$user.",</p>
<p>This is your official notice that your event ".$program." was submitted to the University Career Center.</p>

<p>Please save this email as your record that your event has been submitted.  Thanks again for partnering with the University Career Center.</p>
<hr />
<p><b>Event Description</b><br />".$description." </p>
<p><b>Event Date</b><br />".$eventdate." </p>

<p>Sincerely, the Universtiy Career Center</p>
</body>
</html>
";

mail($mailto, $subject, $message,$headers);


}




?>