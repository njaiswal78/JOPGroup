<?php
session_start();
ini_set("display_error","off");
$_SESSION['fillall']="";

$to="web@brysadvertising.com";
$subject="Enquiry Form Capital Athena";
$name=$_POST["name"];
$email=$_POST["mail"];
$phone=$_POST["phone"];
$comment=$_POST["comment"];
$_SESSION['postdata']=$_POST;

function error($error, $location)
{
	
	$_SESSION['loginerror']=$error;
} 

$headers = 'From: Enquiry' ."\r\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$msg='<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CAPITAL ATHENA ENQUIRY FORM</title>

</head>

<body>
	<h3 align="center" style="font:15px Arial, Helvetica, sans-serif; color:#000; font-weight:700; margin:0 0 5px 0; padding:0;">CAPITAL ATHENA ENQUIRY FORM</h3><br /><br />
    <table width="300px" cellspacing="2" cellpadding="2" align="center" style="border:1px solid #ccc;">
    	
    	<tr bgcolor="#CCCCCC">
        	<td>Name : </td>
            <td>'.$name.'</td>
        </tr>
        <tr bgcolor="e0e0e0">
        	<td>Email Id :</td>
            <td>'.$email.'</td>
        </tr>
        <tr bgcolor="#CCCCCC">
        	<td>Phone Number :</td>
            <td>'.$phone.'</td>
        </tr>
		<tr bgcolor="#CCCCCC">
			<td>Comments :</td>
			<td>'.$comment.'</td>
		</tr>
    </table>
</body>
</html>';
//$smtpinfo["host"] = "smtp.mycorp.com";
//$smtpinfo["port"] = "25";
//$smtpinfo["auth"] = true;
//$smtpinfo["username"] = "smtpusername";
//$smtpinfo["password"] = "smtpPassword";
//$mail_object =& Mail::factory("smtp", $smtpinfo);
//$mail_object->send($to, $headers, $msg);
$ans=mail($to, $subject, $msg ,$headers);
if(isset($_POST['submit']) and $ans=='1')
{
$_SESSION['fillall']="Data submitted successfully";
}
else 
{
	$_SESSION['fillall']="";
}
 
header("Location: index.html");

?>
