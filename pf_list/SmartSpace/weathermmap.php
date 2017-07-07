<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

    include('weather_.php');
    $seoul = Seoul::get_Seoul();
    $busan = Busan::get_Busan();
    $gwangju = Gwangju::get_Gwangju();
    $daejeon = Daejeon::get_Daejeon();
    $daegu = Daegu::get_Daegu();
    $ulsan = Ulsan::get_Ulsan();
    $ganglung = Ganglung::get_Ganglung();
    $andong = Andong::get_Andong();
?>
<!DOCTYPE html>
<html>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<head>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
	<meta charset="UTF-8">
	<title>Weather Map</title>
    <style>
        body{
            margin :0;
            padding: 0;
        background-color: #999999;
        }
        #map{
            
            position: absolute;
            margin-left:452px;
         
        }
        #leftside{
background-color: aliceblue;
            margin-left:25px;
            width: 20%;
            height: 50%;
        }
        #head{
        width:100%;
            height:30%;
            background-color:black;
            font-size:150px;
            font-family:inherit;
            color:aliceblue;
            text-shadow: -2px 0 #999999, 0 2px #999999, 2px 0 #999999, 0 -2px #999999;
            -moz-text-shadow: -1px 0 #f00, 0 1px #f00, 1px 0 #f00, 0 -1px #f00;
            
    text-align: center;
            vertical-align:super;
            
        }
        #left{
            background-color: aliceblue;
            width: 20%;
            height: 50%;
         margin-left:25px;
            margin-top:25px;
        }
    
    </style>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRjyolHlstwmMrTNK9vanIGsdeRJU3hDo"
  type="text/javascript"></script>
	<script>
		function initialize() {

			/*
				http://openapi.map.naver.com/api/geocode.php?key=f32441ebcd3cc9de474f8081df1e54e3&encoding=euc-kr&coord=LatLng&query=서울특별시 강남구 강남대로 456
                위의 링크에서 뒤에 주소를 적으면 x,y 값을 구할수 있습니다.
			*/
            
			var Y_point			= 36.27110100714382;		// Y 좌표
			var X_point			= 127.80169690333006;		// X 좌표

			var zoomLevel		= 8;						// 지도의 확대 레벨 : 숫자가 클수록 확대정도가 큼
			var markerTitle		= "marker";				// 현재 위치 마커에 마우스를 오버을때 나타나는 정보
			var markerMaxWidth	= 100;						// 마커를 클릭했을때 나타나는 말풍선의 최대 크기

			// 말풍선 내용
			var contentString_Seoul	= '<div>' +
			'<h2>서울의 날씨</h2>'+
			'<img src="<?=$seoul['icon']?>">'+
			'<p>기온 <?=$seoul['current_temp']."℃"?></p>'+
			'<p>최저기온 <?=$seoul['temp_min']."℃"?></p>'+
			'<p>최고기온 <?=$seoul['temp_max']."℃"?></p>'
           
			//'<a href="http://www.daegu.go.kr" target="_blank">http://www.daegu.go.kr</a>'+ //링크도 넣을 수 있음
			'</div>';
            //'<a href="http://www.daegu.go.kr" target="_blank">http://www.daegu.go.kr</a>'+ //링크도 넣을 수 있음
			

			var myLatlng_Seoul = new google.maps.LatLng(37.566949,126.978056);//이거
            var center = new google.maps.LatLng(Y_point, X_point);
			var mapOptions = {
 
            scrollwheel: true,    
								zoom: zoomLevel,
								center: center,
								mapTypeId: google.maps.MapTypeId.ROADMAP
			
            }

            var map = new google.maps.Map(document.getElementById('map'), mapOptions);
            var map = new google.maps.Map(document.getElementById('map2'), mapOptions);

			var marker_Seoul = new google.maps.Marker({
													position: myLatlng_Seoul,
													map: map,
													title: markerTitle
			});

            
			var infowindow_Seoul = new google.maps.InfoWindow(
														{
														
                                                            
                                                            content: contentString_Seoul,
															maxWidth: markerMaxWidth
														}
                
			);
        
            
            
			google.maps.event.addListener(marker_Seoul, 'click', function() {
				infowindow_Seoul.open(map, marker_Seoul);
			});
		//지금부터 부싼
     var myLatlng_Busan = new google.maps.LatLng(35.180168,129.076835);//마커 좌표
           
            var contentString_Busan = '<div>'+
            '<h2>부산의 날씨</h2>'+
            '<img src="<?=$busan['icon']?>">'+
			'<p>기온 <?=$busan['current_temp']."℃"?></p>'+
			'<p>최저기온 <?=$busan['temp_min']."℃"?></p>'+
			'<p>최고기온 <?=$busan['temp_max']."℃"?></p>'
    '</div>';  //여기에 쓰고싶은 거쓰면댐
            
        
var marker_Busan = new google.maps.Marker({
    position : myLatlng_Busan, //마커위치 불러옴
    map:map,//마커가 생길 지도 ID
    title:markerTitle //마커 이름
    
});            
            
         
            var infowindow_Busan= new google.maps.InfoWindow(
            {
                content:contentString_Busan,
                maxWidth:markerMaxWidth
            });
       
            
            google.maps.event.addListener(marker_Busan,'click', function(){
            
           infowindow_Busan.open(map, marker_Busan); 
        });
//지금부터 광주
        
     var myLatlng_Gwangju = new google.maps.LatLng(35.160386,126.851136);//마커 좌표
           
            var contentString_Gwangju = '<div>'+
            '<h2>광주의 날씨</h2>'+
            '<img src="<?=$gwangju['icon']?>">'+
			'<p>기온 <?=$gwangju['current_temp']."℃"?></p>'+
			'<p>최저기온 <?=$gwangju['temp_min']."℃"?></p>'+
			'<p>최고기온 <?=$gwangju['temp_max']."℃"?></p>'
    '</div>';  //여기에 쓰고싶은 거쓰면댐
            
        
var marker_Gwangju = new google.maps.Marker({
    position : myLatlng_Gwangju, //마커위치 불러옴
    map:map,//마커가 생길 지도 ID
    title:markerTitle //마커 이름
    
});            
            
         
            var infowindow_Gwangju= new google.maps.InfoWindow(
            {
                content:contentString_Gwangju,
                maxWidth:markerMaxWidth
            });
       
            
            google.maps.event.addListener(marker_Gwangju,'click', function(){
            
           infowindow_Gwangju.open(map, marker_Gwangju); 
            
            });
        
            var marker_Daejeon = new google.maps.Marker({
    position : myLatlng_Daejeon, //마커위치 불러옴
    map:map,//마커가 생길 지도 ID
    title:markerTitle //마커 이름
    
});            
            //지금부터 대전
         var myLatlng_Daejeon = new google.maps.LatLng(36.351937,127.386750);//마커 좌표
           
            var contentString_Daejeon ='<div>'+
            '<h2>대전의 날씨</h2>'+
            '<img src="<?=$daejeon['icon']?>">'+
			'<p>기온 <?=$daejeon['current_temp']."℃"?></p>'+
			'<p>최저기온 <?=$daejeon['temp_min']."℃"?></p>'+
			'<p>최고기온 <?=$daejeon['temp_max']."℃"?></p>'
    '</div>';  //여기에 쓰고싶은 거쓰면댐
            
        
var marker_Daejeon = new google.maps.Marker({
    position : myLatlng_Daejeon, //마커위치 불러옴
    map:map,//마커가 생길 지도 ID
    title:markerTitle //마커 이름
    
});            
           
         
          
            var infowindow_Daejeon= new google.maps.InfoWindow(
            {
                content:contentString_Daejeon,
                maxWidth:markerMaxWidth
            });
       
            
            google.maps.event.addListener(marker_Daejeon,'click', function(){
            
           infowindow_Daejeon.open(map, marker_Daejeon); 
            
            });
         
            //지금부터 대구
            
            
            var myLatlng_Daegu = new google.maps.LatLng(35.871837,128.601441);//마커 좌표
           
            var contentString_Daegu ='<div>'+
            '<h2>대구의 날씨</h2>'+
            '<img src="<?=$daegu['icon']?>">'+
			'<p>기온 <?=$daegu['current_temp']."℃"?></p>'+
			'<p>최저기온 <?=$daegu['temp_min']."℃"?></p>'+
			'<p>최고기온 <?=$daegu['temp_max']."℃"?></p>'
    '</div>';  //여기에 쓰고싶은 거쓰면댐
            
        
var marker_Daegu = new google.maps.Marker({
    position : myLatlng_Daegu, //마커위치 불러옴
    map:map,//마커가 생길 지도 ID
    title:markerTitle //마커 이름
    
});            
           
         
          
            var infowindow_Daegu= new google.maps.InfoWindow(
            {
                content:contentString_Daegu,
                maxWidth:markerMaxWidth
            });
       
            
            google.maps.event.addListener(marker_Daegu,'click', function(){
            
           infowindow_Daegu.open(map, marker_Daegu); 
            
            });
      
            var myLatlng_Ulsan = new google.maps.LatLng(35.538957,129.311209);//마커 좌표
           
            var contentString_Ulsan ='<div>'+
                '<h2>울산의 날씨</h2>'+
            '<img src="<?=$ulsan['icon']?>">'+
			'<p>기온 <?=$ulsan['current_temp']."℃"?></p>'+
			'<p>최저기온 <?=$ulsan['temp_min']."℃"?></p>'+
			'<p>최고기온 <?=$ulsan['temp_max']."℃"?></p>'
    '</div>';  //여기에 쓰고싶은 거쓰면댐
            
        
var marker_Ulsan = new google.maps.Marker({
    position : myLatlng_Ulsan, //마커위치 불러옴
    map:map,//마커가 생길 지도 ID
    title:markerTitle //마커 이름
    
});            
           
         
          
            var infowindow_Ulsan= new google.maps.InfoWindow(
            {
                content:contentString_Ulsan,
                maxWidth:markerMaxWidth
            });
       
            
            google.maps.event.addListener(marker_Ulsan,'click', function(){
            
           infowindow_Ulsan.open(map, marker_Ulsan); 
            
            });
            
             var myLatlng_Ganglung = new google.maps.LatLng(37.752216,128.875938);//마커 좌표
           
            var contentString_Ganglung ='<div>'+
                '<h2>강릉의 날씨</h2>'+
            '<img src="<?=$ganglung['icon']?>">'+
			'<p>기온 <?=$ganglung['current_temp']."℃"?></p>'+
			'<p>최저기온 <?=$ganglung['temp_min']."℃"?></p>'+
			'<p>최고기온 <?=$ganglung['temp_max']."℃"?></p>'
    '</div>';  //여기에 쓰고싶은 거쓰면댐
            
        
var marker_Ganglung = new google.maps.Marker({
    position : myLatlng_Ganglung, //마커위치 불러옴
    map:map,//마커가 생길 지도 ID
    title:markerTitle //마커 이름
    
});            
           
         
          
            var infowindow_Ganglung= new google.maps.InfoWindow(
            {
                content:contentString_Ganglung,
                maxWidth:markerMaxWidth
            });
       
            
            google.maps.event.addListener(marker_Ganglung,'click', function(){
            
           infowindow_Ganglung.open(map, marker_Ganglung); 
            
            });
            //지금부터 안동
            
             var myLatlng_Andong = new google.maps.LatLng(36.568932,128.729752);//마커 좌표
           
            var contentString_Andong = '<div>'+
            '<h2>안동의 날씨</h2>'+
            '<img src="<?=$andong['icon']?>">'+
			'<p>기온 <?=$andong['current_temp']."℃"?></p>'+
			'<p>최저기온 <?=$andong['temp_min']."℃"?></p>'+
			'<p>최고기온 <?=$andong['temp_max']."℃"?></p>'
    '</div>';  //여기에 쓰고싶은 거쓰면댐
            
        
var marker_Andong = new google.maps.Marker({
    position : myLatlng_Andong, //마커위치 불러옴
    map:map,//마커가 생길 지도 ID
    title:markerTitle //마커 이름
    
});            
            
         
            var infowindow_Andong= new google.maps.InfoWindow(
            {
                content:contentString_Andong,
                maxWidth:markerMaxWidth
            });
       
            
            google.maps.event.addListener(marker_Andong,'click', function(){
            
           infowindow_Andong.open(map, marker_Andong); 
        });
            

        }

        
        
    </script>
</head>

<body onload="initialize()">
  
 
<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <!-- 브라우저가 좁아졋을때 나오는 버튼(클릭시 메뉴출력) -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><h1>Smartspace <small>-weathermap</small></h1></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">지도</a></li>
            <li><a href="#about">기온지도</a></li>
            <li><a href="#contact">마커생성</a></li>
          </ul>
        </div>
      </div>
</div>
    
            </body>
    
    
</html>