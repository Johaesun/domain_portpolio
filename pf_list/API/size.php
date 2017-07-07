<?php
$ch = curl_init();
$code=$_GET['code'];

$url = 'http://openapi1.nhis.or.kr/openapi/service/rest/HmcSpecificInfoService/getWorkHourInfoDetail'; 
$queryParams = '?' . urlencode('ServiceKey') . '=PNy81xfyH%2Fkji%2FtEeqQXqwEPJfrzJMmn2uRhOOzR8NmO%2FqeLypE%2FnmgSM%2FsEJoyTxUgZdn%2FC3%2Fn1M8UhnIv9Rg%3D%3D'; /*Service Key*/
$queryParams .= '&' . urlencode('ykiho') . '=' . urlencode($code); /*요양기관번호*/
$queryParams .= '&' . urlencode('numOfRows') . '=' . urlencode('999'); /*검색건수*/
$queryParams .= '&' . urlencode('pageNo') . '=' . urlencode('1'); /*페이지 번호*/

curl_setopt($ch, CURLOPT_URL, $url . $queryParams);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$response = curl_exec($ch);
curl_close($ch);

var_dump($response);
?>