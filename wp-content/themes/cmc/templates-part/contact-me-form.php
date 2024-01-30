<?php
require '../mailer/Exception.php';
require '../mailer/OAuthTokenProvider.php';
require '../mailer/OAuth.php';
require '../mailer/PHPMailer.php';
require '../mailer/POP3.php';
require '../mailer/SMTP.php';
$name = isset($_POST['first_name']) ? $_POST['first_name'] : '';
$last_name = isset($_POST['last_name']) ? $_POST['last_name'] : '';
$email = isset($_POST['email_id']) ? $_POST['email_id'] : '';
$phonenumber = isset($_POST['phone_number']) ? $_POST['phone_number'] : '';
$message = isset($_POST['message_cmc']) ? $_POST['message_cmc'] : '';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer;
$mail->isSMTP(); // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
$mail->SMTPAuth = true; // Enable SMTP authentication
$mail->Username = 'noreply-www@cmc.edu.in'; // SMTP username
$mail->Password = 'hhuuehmyqxrubhpu'; // SMTP password
$mail->SMTPSecure = 'tsl'; // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587; // TCP port to connect to
$mail->setFrom('noreply-www@cmc.edu.in', 'CMC');
$mail->addReplyTo('mayur@tonicworldwide.com', 'CMC');
$mail->addAddress('mayur@tonicworldwide.com', 'CMC');
$mail->Subject = 'CMC | Website Enquiry - Contact Us';
$mail->isHTML(true);
$body_message = '
<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
    <head>
        <title>CMC</title>
<!-- [if (mso 16)]>
<style type="text/css">
a {text-decoration: none;}<br />      </style>      <![endif]-->
<!-- [if gte mso 9]>
<style>sup { font-size: 100% !important; }</style>      <![endif]-->
<!-- [if gte mso 9]>
<xml>
<o:OfficeDocumentSettings>
<o:AllowPNG></o:AllowPNG>
<o:PixelsPerInch>96</o:PixelsPerInch>
</o:OfficeDocumentSettings>
</xml>
<![endif]-->
<style type="text/css">
body{font-family:"Open Sans" , sans-serif ;}
         #outlook a {<br />         padding:0;<br />         }<br />         .ExternalClass {<br />         width:100%;<br />         }<br />         .ExternalClass,<br />         .ExternalClass p,<br />         .ExternalClass span,<br />         .ExternalClass font,<br />         .ExternalClass td,<br />         .ExternalClass div {<br />         line-height:100%;<br />         }<br />         .es-button {<br />         mso-style-priority:100!important;<br />         text-decoration:none!important;<br />         }<br />         a[x-apple-data-detectors] {<br />         color:inherit!important;<br />         text-decoration:none!important;<br />         font-size:inherit!important;<br />         font-family:inherit!important;<br />         font-weight:inherit!important;<br />         line-height:inherit!important;<br />         }<br />         .es-desk-hidden {<br />         display:none;<br />         float:left;<br />         overflow:hidden;<br />         width:0;<br />         max-height:0;<br />         line-height:0;<br />         mso-hide:all;<br />         }<br />      </style>
         </head>
     <body>
<div class="es-wrapper-color" style="background-color: #f6f6f6;"><!-- [if gte mso 9]>
<v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
<v:fill type="tile" color="#f6f6f6"></v:fill>
</v:background>
<![endif]-->
<table class="es-wrapper" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; border-spacing: 0px; padding: 0; margin: 0; width: 100%; height: 100%; background-repeat: repeat; background-position: center top;" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr class="gmail-fix" style="border-collapse: collapse;">
<td style="padding: 0; margin: 0;">
<table style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; border-spacing: 0px; width: 600px;" border="0" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr style="border-collapse: collapse;">
<td style="padding: 0; margin: 0; line-height: 1px; min-width: 600px;" height="0"><img style="display: block; border: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; max-height: 0px; min-height: 0px; min-width: 600px; width: 600px;" src="https://esputnik.com/repository/applications/images/blank.gif" alt="" width="600" height="1" /></td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr style="border-collapse: collapse;">
<td style="padding: 0; margin: 0;" valign="top">
<table class="es-content" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; border-spacing: 0px; table-layout: fixed !important; width: 100%;" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr style="border-collapse: collapse;">
<td style="padding: 0; margin: 0;" align="center">
<table class="es-content-body" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; border-spacing: 0px; background-color: #ffffff; width: 600px; border: 2px solid #012068;" cellspacing="0" cellpadding="0" align="center" bgcolor="#ffffff">
<tbody>
<tr style="border-collapse: collapse;">
<td style="padding: 0; margin: 0; padding-top: 20px; padding-left: 20px; padding-right: 20px;" align="left">
<table style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; border-spacing: 0px;" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr style="border-collapse: collapse;">
<td style="padding: 0; margin: 0; width: 556px;" align="center" valign="top">
<table style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; border-spacing: 0px;" role="presentation" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr style="border-collapse: collapse;">
<td style="padding: 0; margin: 0; font-size: 0px;" align="center"><img class="adapt-img" style="display: block; border: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic;" src="https://cmc.tonicww.in/wp-content/uploads/2022/11/logo.png" alt="" /></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr style="border-collapse: collapse;">
<td style="padding: 0; margin: 0; padding-top: 20px; padding-left: 20px; padding-right: 20px;" align="left">
<table style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; border-spacing: 0px;" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr style="border-collapse: collapse;">
<td style="padding: 0; margin: 0; width: 556px;" align="center" valign="top">
<table style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; border-spacing: 0px;" role="presentation" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr style="border-collapse: collapse;">
<td style="padding: 20px; margin: 0;" align="left">
<p style="margin: 0; -webkit-text-size-adjust: none; -ms-text-size-adjust: none; mso-line-height-rule: exactly; font-size: 25px;  line-height: 40px; color: #5d5858;"><strong>Dear Admin</strong></p>
</td>
</tr>
<tr style="border-collapse: collapse;">
<td style="margin: 0; padding: 20px 20px 35px 20px;" align="left">
<p style="margin: 0; -webkit-text-size-adjust: none; -ms-text-size-adjust: none; mso-line-height-rule: exactly; font-size:25px;  line-height: 30px; color: #333333;">You have received the following enquiry</p>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr style="border-collapse: collapse;">
<td style="padding: 0; margin: 0; padding-top: 20px; padding-left: 20px; padding-right: 20px;" align="left">
<table style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; border-spacing: 0px;" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr style="border-collapse: collapse;">
<td style="padding: 0; margin: 0; width: 556px;" align="center" valign="top">
<table style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; border-spacing: 0px;" role="presentation" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr style="border-collapse: collapse;">
<td style="padding: 0; margin: 0;">
<table style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; border-spacing: 0px; border: 2px solid #012068;" role="presentation" border="0" width="100%" cellspacing="2" cellpadding="3">
<tbody>
<tr style="border-collapse: collapse;">
<td style="padding: 20px; margin: 0; border: 2px solid #012068;"><strong>Name:</strong></td>
<td style="padding: 20px; margin: 0; border: 2px solid #012068;">' . $name . '</td>
</tr>
<tr style="border-collapse: collapse;">
<td style="padding: 20px; margin: 0; border: 2px solid #012068;"><strong>Last Name:</strong></td>
<td style="padding: 20px; margin: 0; border: 2px solid #012068;">' . $last_name . '</td>
</tr>
<tr style="border-collapse: collapse;">
<td style="padding: 20px; margin: 0; border: 2px solid #012068;"><strong>Email ID:</strong></td>
<td style="padding: 20px; margin: 0; border: 2px solid #012068; line-height: 0.1;"><a style="-webkit-text-size-adjust: none; -ms-text-size-adjust: none; mso-line-height-rule: exactly;  font-size: 14px; text-decoration: none; color: #5d5858;" href="mailto:' . $email . '" target="_blank" rel="noopener">
' . $email . '</a></td>
</tr>
<tr style="border-collapse: collapse;">
<td style="padding: 20px; margin: 0; border: 2px solid #012068;"><strong>Phone Number:</strong></td>
<td style="padding: 20px; margin: 0; border: 2px solid #012068;">' . $phonenumber . '</td>
</tr>
<tr style="border-collapse: collapse;">
<td style="padding: 20px; margin: 0; border: 2px solid #012068;"><strong>Message:</strong></td>
<td style="padding: 20px; margin: 0; border: 2px solid #012068;">' . $message . '</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr style="border-collapse: collapse;">
<td style="padding: 0; margin: 0; padding-top: 40px;" align="left">
<table style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; border-spacing: 0px;" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr style="border-collapse: collapse;">
<td style="padding: 0; margin: 0; width: 596px;" align="center" valign="top">
<table style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; border-spacing: 0px;" role="presentation" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr style="border-collapse: collapse;">
<td style="padding: 0; margin: 0;" align="right" bgcolor="#012068">
<p style="margin: 0; -webkit-text-size-adjust: none; -ms-text-size-adjust: none; mso-line-height-rule: exactly; font-size: 20px; padding:10px 20px;  line-height:28px; color: #fff;"><strong>Powered By CMC</strong></p>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</div>
</body>
</html>
';
$mail->Body = $body_message;
// Auto Responder
$mail2 = new PHPMailer;
$mail2->isSMTP(); // Set mailer to use SMTP
$mail2->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
$mail2->SMTPAuth = true; // Enable SMTP authentication
$mail2->Username = 'noreply-www@cmc.edu.in'; // SMTP username
$mail2->Password = 'hhuuehmyqxrubhpu'; // SMTP password
$mail2->SMTPSecure = 'tsl'; // Enable TLS encryption, `ssl` also accepted
$mail2->Port = 587; // TCP port to connect to
$mail2->setFrom('mayur@tonicworldwide.com', 'CMC');
$mail2->addReplyTo('mayur@tonicworldwide.com', 'CMC');
$mail2->addAddress($email);
$mail2->Subject = 'Your Query - CMC: Our Response Inside';
$mail2->isHTML(true);
$body_message2 = '
<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>CMC</title>
<!-- [if (mso 16)]>
<style type="text/css">
    a {text-decoration: none;}<br />    </style>    <![endif]-->
<!-- [if gte mso 9]>
<style>sup { font-size: 100% !important; }</style><![endif]-->
<!-- [if gte mso 9]>
<xml>
<o:OfficeDocumentSettings>
<o:AllowPNG></o:AllowPNG>
<o:PixelsPerInch>96</o:PixelsPerInch>
</o:OfficeDocumentSettings>
</xml>
<![endif]-->
<style type="text/css">
body{font-family:"Open Sans" , sans-serif ;}
#outlook a {<br />	padding:0;<br />}<br />.ExternalClass {<br />	width:100%;<br />}<br />.ExternalClass,<br />.ExternalClass p,<br />.ExternalClass span,<br />.ExternalClass font,<br />.ExternalClass td,<br />.ExternalClass div {<br />	line-height:100%;<br />}<br />.es-button {<br />	mso-style-priority:100!important;<br />	text-decoration:none!important;<br />}<br />a[x-apple-data-detectors] {<br />	color:inherit!important;<br />	text-decoration:none!important;<br />	font-size:inherit!important;<br />	font-family:inherit!important;<br />	font-weight:inherit!important;<br />	line-height:inherit!important;<br />}<br />.es-desk-hidden {<br />	display:none;<br />	float:left;<br />	overflow:hidden;<br />	width:0;<br />	max-height:0;<br />	line-height:0;<br />	mso-hide:all;<br />}<br /></style>
</head>
     <body>
<div class="es-wrapper-color" style="background-color: #f6f6f6;"><!-- [if gte mso 9]>
<v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
<v:fill type="tile" color="#f6f6f6"></v:fill>
</v:background>
<![endif]-->
<table class="es-wrapper" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; border-spacing: 0px; padding: 0; margin: 0; width: 100%; height: 100%; background-repeat: repeat; background-position: center top;" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr class="gmail-fix" style="border-collapse: collapse;">
<td style="padding: 0; margin: 0;">
<table style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; border-spacing: 0px; width: 600px;" border="0" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr style="border-collapse: collapse;">
<td style="padding: 0; margin: 0; line-height: 1px; min-width: 600px;" height="0"><img style="display: block; border: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; max-height: 0px; min-height: 0px; min-width: 600px; width: 600px;" src="https://esputnik.com/repository/applications/images/blank.gif" alt="" width="600" height="1" /></td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr style="border-collapse: collapse;">
<td style="padding: 0; margin: 0;" valign="top">
<table class="es-content" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; border-spacing: 0px; table-layout: fixed !important; width: 100%;" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr style="border-collapse: collapse;">
<td style="padding: 0; margin: 0;" align="center">
<table class="es-content-body" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; border-spacing: 0px; background-color: #ffffff; width: 600px; border: 1px solid #012068;" cellspacing="0" cellpadding="0" align="center" bgcolor="#ffffff">
<tbody>
<tr style="border-collapse: collapse;">
<td style="padding: 0; margin: 0; padding-top: 20px; padding-left: 20px; padding-right: 20px;" align="left">
<table style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; border-spacing: 0px;" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr style="border-collapse: collapse;">
<td style="padding: 0; margin: 0; width: 558px;" align="center" valign="top">
<table style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; border-spacing: 0px;" role="presentation" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr style="border-collapse: collapse;">
<td style="padding: 0; margin: 0; font-size: 0px;" align="center"><img class="adapt-img" style="display: block; border: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic;" src="https://cmc.tonicww.in/wp-content/uploads/2022/11/logo.png" alt="" /></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr style="border-collapse: collapse;">
<td style="padding: 0; margin: 0; padding-top: 20px; padding-left: 20px; padding-right: 20px;" align="left">
<table style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; border-spacing: 0px;" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr style="border-collapse: collapse;">
<td style="padding: 0; margin: 0; width: 558px;" align="center" valign="top">
<table style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; border-spacing: 0px;" role="presentation" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr style="border-collapse: collapse;">
<td style="padding: 0; margin: 0; padding-top: 25px; padding-left: 25px; padding-right: 25px;" align="left">
<h1 style="margin: 0; line-height: 52px; mso-line-height-rule: exactly;  font-size: 26px; font-style: normal; font-weight: normal; color: #5d5858; text-align: center;"><strong>Thank you for your Inquiry!</strong></h1>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr style="border-collapse: collapse;">
<td style="padding: 0; margin: 0; padding-top: 20px; padding-left: 20px; padding-right: 20px;" align="left">
<table style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; border-spacing: 0px;" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr style="border-collapse: collapse;">
<td style="padding: 0; margin: 0; width: 558px;" align="center" valign="top">
<table style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; border-spacing: 0px;" role="presentation" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr style="border-collapse: collapse;">
<td style="padding: 15px; margin: 0;" align="center">
<p style="margin: 0; -webkit-text-size-adjust: none; -ms-text-size-adjust: none; mso-line-height-rule: exactly; font-size: 14px;            line-height: 21px; color: #5d5858;"><span style="font-size: 20px;">A CMC Team will get back to you as soon as possible.</span><span style="display: none;" data-cke-bookmark="1"> </span></p>
</td>
</tr>
<tr style="border-collapse: collapse;">
<td style="padding: 15px; margin: 0;" align="center">
<p style="margin: 0; -webkit-text-size-adjust: none; -ms-text-size-adjust: none; mso-line-height-rule: exactly; font-size: 14px;  line-height: 21px; color: #5d5858;"><span style="font-size: 20px; line-height: 30px;">We aim to respond to all queries within 24 hours. If your enquiry requires urgent attention or you would like to speak to me immediately, please contact <strong><a style="-webkit-text-size-adjust: none; -ms-text-size-adjust: none; mso-line-height-rule: exactly;            font-size: 20px; text-decoration: none; color: #5d5858;" href="tel:+919498760000" target="_blank" rel="noopener">+91 9498760000</a></strong></span></p>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr style="border-collapse: collapse;">
<td style="padding: 0; margin: 0; padding-top: 40px;" align="left">
<table style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; border-spacing: 0px;" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr style="border-collapse: collapse;">
<td style="padding: 0; margin: 0; width: 598px;" align="center" valign="top">
<table style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; border-spacing: 0px;" role="presentation" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr style="border-collapse: collapse;">
<td style="padding: 0; margin: 0;" align="right" bgcolor="#012068">
<p style="margin: 0; -webkit-text-size-adjust: none; -ms-text-size-adjust: none; mso-line-height-rule: exactly; font-size: 20px; padding:10px 20px;  line-height:28px; color: #fff;"><strong>Powered By CMC</strong></p>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</div>
</body>
    </html>
';
$mail2->Body = $body_message2;
$mail2->send();
// End Auto Responder
if ($mail->send()) {
} else {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
