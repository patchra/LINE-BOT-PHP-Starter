<?php
$access_token = '6RX4/OOatXA2HDqT0puXT7XunQffhOr9MMihxJSfRmFtlo6YJ1UPzGnQLbm4bTVH2FbZrmKjZrXVpQbxb4QiNNJaaYmrnlnJW1bBuENIuLuyZgV4w1TPj3FVoKrQx/+jNvnxrVW0baDmRGdj65B7sgdB04t89/1O/w1cDnyilFU=';
$proxy = 'velodrome.usefixie.com:80';
$proxyauth = 'fixie:UlDg2fnqFYAnYaf';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
