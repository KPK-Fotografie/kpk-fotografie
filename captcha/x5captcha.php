<?php
include("../res/x5engine.php");
$nameList = array("p77","um2","twd","ytv","p7k","l7v","ssu","dr6","6v8","pwh");
$charList = array("D","W","7","R","A","N","R","2","C","D");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
