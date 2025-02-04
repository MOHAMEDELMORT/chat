<?php

$name = $_POST["name"];
$usertele = $_POST["user"];
$messagee = $_POST["message"];

$API_KEY = "5929414297:AAH_KLpHkXSaePqRBOwJqz13amUZKmCUnO4"; //توكن البوت
$admin = 1372188096 ; //تيليجرام ايدي

$text = urlencode("
name : $name
-------------
user tele : $usertele
-------------
message :

$messagee
");

$url = "https://api.telegram.org/bot".$API_KEY."/sendMessage?chat_id=$admin&text=$text&parse_mode=markdown";
file_get_contents($url);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $name; ?></title>
</head>
<link rel="stylesheet" href="bv.css">
<body>
        <h1 class="hhii">Done send : <br> <?php echo $name; ?></h1>
</body>
</html>
