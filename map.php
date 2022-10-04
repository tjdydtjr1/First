<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
   
    <meta name="viewport" content="user-salable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width,height=device-height=device-height">
    <link rel="stylesheet" href="style.css">
  
    <title>카카오맵 API</title>

    <style>
	@media (max-width : 480px){
		#map{
			float: none;
			width:auto;
				}

     aside {
	float : right;
	width : 20%;
	}
</style>
<style>
    .vl {
  border-left: 3px solid black;
  height: 100%;
  
  left: 90%;
  margin-left: -3px;
  top: 0;
}  
    </style>   
</head>

<body>
<!-- 지도를 표시할 div 입니다 -->
<div id="map" style ='float:left; width:80%; margin:0 auto; padding-bottom:80%;'>
</div>


<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=aca7a33cbeba078ce12f0cd87f9b9208"></script>



<?php

$host = "localhost";
$dbName = "GMANH";
$user = "test2";
$pw = "1234";

$con = mysqli_connect($host,$user,$pw,$dbName);

// 쿼리문 작성하기
$sql = "SELECT serial_num, x_position, y_position,time FROM user_tbl ORDER BY time ASC";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
//test
$lat = $row["x_position"];
$long = $row["y_position"];
$time = $row["time"];
$name = $row["serial_num"];
echo "<br>";
 
//
$row = mysqli_fetch_array($result);
$lat2 = $row["x_position"];
$long2 = $row["y_position"];
$time2 = $row["time"];
$name2 = $row["serial_num"];
echo "<br>";
//
$row = mysqli_fetch_array($result);
$lat3 = $row["x_position"];
$long3 = $row["y_position"];
$time3 = $row["time"];
$name3 = $row["serial_num"];
echo "<br>";



//echo "Mysql query 테스트중<br>";
/*
$time = 5;
//반복문 시작 
while($row = mysqli_fetch_array($result)){
//php 변수 지정 
$lat = $row["xx"]; 
$long = $row["yy"];
//

echo $time."분 전 위치: "."이름:";
echo $row["name"]."폰 번호:";
echo $row["phone"]."x좌표:";
echo $row["xx"]."y좌표:";
echo $row["yy"]." ";
echo $row["timestamp"];
echo "<br>";
// timestamp를 5분 간격으로 출력합니다.
$time = $time + 5;
  	}
*/
?>


<script>

//1,2,3 X,Y 좌표 변수
<?php

echo "let xx = $lat;\n";
echo "let yy = $long;\n";
echo "let xx2 = $lat2;\n";
echo "let yy2 = $long2;\n";
echo "let xx3 = $lat3;\n";
echo "let yy3 = $long3;\n";
echo "let t_time ='".$time."';";
echo "let t_time2 ='".$time2."';";
echo "let t_time3 ='".$time3."';";
echo "let name = '".$name."';";
echo "let name2 = '".$name2."';";
echo "let name3 = '".$name3."';";

?>

// 좌표 중심점 
var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
    mapOption = { 
        center: new kakao.maps.LatLng(xx, yy), // 지도의 중심좌표
        level: 3 // 지도의 확대 레벨
    };
// 지도를 표시할 div와  지도 옵션으로  지도를 생성합니다
var map = new kakao.maps.Map(mapContainer, mapOption); 
// 지도 cursor 변경 
//map.setCursor('url(1111.webp),default'):


//
//Marker image
var imageSrc = "https://t1.daumcdn.net/localimg/localimages/07/mapapidoc/markerStar.png",
imageSize = new kakao.maps.Size(24,35),
imageOption = {offset: new kakao.maps.Point(27,69)};
///
var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize, imageOption);


// 마커가 표시될 위치입니다 
var markerPosition  = new kakao.maps.LatLng(xx, yy); 
var markerPosition2 = new kakao.maps.LatLng(xx2, yy2);
var markerPosition3 = new kakao.maps.LatLng(xx3, yy3);







//Marker image
//var imageSrc = "1111.png";
//var imageSize = new kakao.maps.Size(24,35);
//var imageOption = {offset: new kakao.maps.Point(27,69)};
//var markerimage = new kakao.mapsMarkerimage(imageSrc,imageSize,imageOption);
// 마커를 생성합니다
var marker = new kakao.maps.Marker({ position: markerPosition, image : markerImage });
var marker2 = new kakao.maps.Marker({ position: markerPosition2, image : markerImage });
var marker3 = new kakao.maps.Marker({ position: markerPosition3, image : markerImage });

// 마커가 지도 위에 표시되도록 설정합니다
marker.setMap(map);
marker2.setMap(map);
marker3.setMap(map);

// 첫번째 좌표 인포윈도우
var iwContent = '<div style="padding:2px;">'+name+':&nbsp' +t_time +'</div>',
  iwPosition = new kakao.maps.LatLng(xx, yy);
var infowindow = new kakao.maps.InfoWindow({ position : iwPosition, content : iwContent });
// 두번째 좌표 인포윈도우
var iwContent2 = '<div style="padding:2px;">'+name2+':&nbsp'+ t_time2 +'</div>',
  iwPosition2 = new kakao.maps.LatLng(xx2,yy2);
var infowindow2 = new kakao.maps.InfoWindow({ position : iwPosition2, content : iwContent2 });
// 세번째 좌표 인포 윈도우 
var iwContent3 = '<div style="padding:2px;">'+name3+':&nbsp'+ t_time3 +'</div>',
  iwPosition3 = new kakao.maps.LatLng(xx3, yy3);
var infowindow3 = new kakao.maps.InfoWindow({ position : iwPosition3, content : iwContent3});

// 인포 윈도우 오픈 
infowindow.open(map, marker);
infowindow2.open(map, marker2);
infowindow3.open(map, marker3);




//마커이미지 바꾸기 이거 됨
//var imageSrc = 'https://t1.daumcdn.net/localimg/localimages/07/mapapidoc/marker_red.png',
//imageSize = new kakao.maps.Size(64, 69),
//imageOption = {offset: new kakao.maps.Point(27, 69)};
// var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize, imageOption),
// markerPosition4 = new kakao.maps.LatLng(36.3506076, 127.4533739);
// var marker4 = new kakao.maps.Marker({
// position: markerPosition,
// image: markerImage  }); 
//marker4.setMap(map); 

</script>


<hr size = "3px" noshade width="100%" align="left" color="black">


<script>
    window.onfocus=function(){
    }
    window.onload=function(){
     window.focus(); // 현재 window 즉 익스플러러를 윈도우 최상단에 위치
    window.moveTo(100,100); // 웹 페이지의 창 위치를 0,0 (왼쪽 최상단) 으로 고정
    window.resizeTo(1280,800); // 웹페이지의 크기를 가로 1280 , 세로 800 으로 고정(확장 및 축소)
    window.scrollTo(0,250); // 페이지 상단 광고를 바로 볼 수 있게 스크롤 위치를 조정
    }
    </script>







</body>
 
 </html>

