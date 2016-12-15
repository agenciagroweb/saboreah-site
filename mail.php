<?php

$subject = 'Contato - Saboreah!';
$to = 'leonardopinto@saboreah.com.br';

$name  = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$msg   = $_REQUEST['message'];

$headers = "From: " .$name.'<'.$email.'>' . "\r\n";
$headers .= "Reply-To: ". strip_tags($email) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet" type="text/css">
    <style type="text/css">

        #outlook a {padding:0;}
        body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; font-family: Arial, sans-serif;color:#424242;}

        .ExternalClass {width:100%;}
        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;}

        img {outline:none; text-decoration:none; -ms-interpolation-mode: bicubic;}
        a img {border:none;}
        .image_fix {display:block;}

        table td {border-collapse: collapse;}

        table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }

        @media only screen and (max-device-width: 480px) {

            a[href^="tel"], a[href^="sms"] {
                text-decoration: none;
                pointer-events: none;
                cursor: default;
            }

            .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                text-decoration: default;
                pointer-events: auto;
                cursor: default;
            }

        }

        @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {

            a[href^="tel"], a[href^="sms"] {
                text-decoration: none;
                pointer-events: none;
                cursor: default;
            }

            .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                text-decoration: default;
                pointer-events: auto;
                cursor: default;
            }
        }

        #weare-table {
            font-family: "Lato", Arial, sans-serif;
            color:#424242;
        }
        font { font-family: "Lato", Arial, sans-serif; }
    </style>

</head>
<body>

<table id="weare-table" width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#ffffff">
    <tr>
        <td>
            <table width="560" align="center" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td align="center" height="98" valign="top"><a href="http://www.pitoli.com.br"><img src="http://www.groweb.com.br/releases/saboreah/images/logo/logo-saboreah-header.png" alt="Saboreah!" width="150" height="78" border="0" /></a></td>
                </tr>
                <tr>
                    <td height="40" valign="bottom"><h1 style="font-family:Arial,sans-serif;color:#FF0000;font-size:25px;font-weight:bold;"><font face="Arial,sans-serif" color>Contato:</font></h1></td>
                </tr>
                <tr>
                    <td>
                        <p>
                            Nome: ' . $name . '<br>
                            E-mail: ' . $email . '<br>
                            Telefone: ' . $phone . '<br><br>
                            Mensagem: ' . $msg . '<br>
                        </p>

                        <p>
                            E-mail enviado através do site Saboreah!, às ' . date("d/m/Y H:i") . '.<br><br>
                        </p>
                    </td>
                </tr>

                <tr>
                    <td style="border-top:1px solid #D0D0D0;" align="center" valign="middle" height="40">
                        <p style="font-family:Arial,sans-serif;color:#838383;font-size:11px;"><font face="Arial,sans-serif"><a href="http://www.saboreah.com.br/" style="text-decoration:none;color:#152e6d;">www.saboreah.com.br</a></font></p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

</body>
</html>';

if (@mail($to, $subject, $message, $headers))
{
	echo 'sent';
}
else
{
	echo 'failed';
}
