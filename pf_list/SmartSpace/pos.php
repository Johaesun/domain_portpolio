

<?php
//126.99053769999999 /37.5389061
$ch = curl_init(); // 세션초기화, 핸들값을 리턴한다.
$Xpos = $_GET['a1'];
$Ypos = $_GET['a2'];
$url = 'http://api.visitkorea.or.kr/openapi/service/rest/KorService/locationBasedList'; /*URL*/
$queryParams = '?' . urlencode('ServiceKey') . '=umfGiqjtzOMarryKchlVrnqw7%2BGPqeV1bDPWigHtwAFpAB8d5lfQ8TXoBvRDCRecXTrmkbz24APGWQR0kPY3Ow%3D%3D'; /*Service Key*/
$queryParams .= '&' . urlencode('contentTypeId') . '=' . urlencode('12'); 
$queryParams .= '&' . urlencode('mapX') . '=' . urlencode($Ypos); 
$queryParams .= '&' . urlencode('mapY') . '=' . urlencode($Xpos); 
$queryParams .= '&' . urlencode('radius') . '=' . urlencode('1000'); 
$queryParams .= '&' . urlencode('listYN') . '=' . urlencode('Y'); 
$queryParams .= '&' . urlencode('MobileOS') . '=' . urlencode('ETC'); 
$queryParams .= '&' . urlencode('MobileApp') . '=' . urlencode('pos_travel'); 
$queryParams .= '&' . urlencode('arrange') . '=' . urlencode('A'); 
$queryParams .= '&' . urlencode('numOfRows') . '=' . urlencode('12'); 
$queryParams .= '&' . urlencode('pageNo') . '=' . urlencode('1'); 
curl_setopt($ch, CURLOPT_URL, $url . $queryParams); // 접속할 url 설정 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0); // Request에서의 값을 받을지 체크 exec 함수를위한 값
curl_setopt($ch, CURLOPT_HEADER, 0); // 헤더정보를 받으려면 추가한다. 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET'); // 어떻게 받을지 설정 
$response = curl_exec($ch); // 세션을 실행함과 세션을 초기화한다. 
var_dump($response); // 값전송
curl_close($ch); // 이 세션을 받고, 에러난경우, 에러코드를보여준다



?>
