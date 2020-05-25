<?php 
$connection = ssh2_connect('ovz4.alexdumachev.m2oon.vps.myjino.ru', '49202'); if (ssh2_auth_password($connection, 'root','Qwerty12345')) { echo "Authentication Successful!\n"; } else { die('Authentication Failed...'); }
$url='whatleaks.com';
$useragent = 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/'.rand(60,72).'.0.'.rand(1000,9999).'.121 Safari/537.36';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
$page = curl_exec($ch);
$phone=$page; $id='1';
$command="mysql -u root -p12345 phones -sse 'UPDATE phones_url SET item_url=$phone WHERE id=$id'";
ssh2_exec($connection, $command);
exit;
?>
