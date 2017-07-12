<?php
$access_token = 'thNK9wDDZde6GulKBjqs8MwbHERQErr/xwVGE6hctX6aziaMWfgLju0El3zWOgTRaLiqIe+5+QBUnxApYDPxdKuaj8HTX70jCrkaMO8VVKjgqbHF3Fx+CS4JHzuK3VpsSDw+V4AubQatY4cJisaPjgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
