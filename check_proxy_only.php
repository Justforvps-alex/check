<?php 
//require_once '/var/www/domains/ovz4.alexdumachev.m2oon.vps.myjino.ru/main/simple_html_dom.php';
$url='https://www.avito.ru/items/phone/1882218813?pkey=9d25e66db156e03dde14f4db5ff38597&vsrc=r';
//$url='https://www.avito.ru/nizhniy_tagil';
//$url='whatleaks.com';
$useragent = 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/'.rand(60,72).'.0.'.rand(1000,9999).'.121 Safari/537.36';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_PROXY, '165.22.49.57:443');
curl_setopt($ch, CURLOPT_PROXYUSERPWD, 'vps:12345');
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
$page = curl_exec($ch);
//$html=str_get_html($page);
curl_close($ch);
sleep(2);
echo $page;
exit;
?>