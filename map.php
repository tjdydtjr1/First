<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
   
    <meta name="viewport" content="user-salable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width,height=device-height">
    
    <title>카카오맵 API</title>
    <style>
	aside {
	float : right;
	width : auto;
	height : 100%;	
	margin : 0 auto;
	}


    </style>   
</head>
<body>

<header>
<?php include 'header.php'; ?>
<br><br><br><br>
<!-- 로그인 상태인지 체크 -->
<?php if (!$userid) { ?>
	<script>
		alert('로그인 해야 이용이 가능한 서비스입니다.');
		location.href = 'login_form.php';
	</script>
<?php } ?>
</header>

<!-- 지도를 표시할 div 입니다 -->
<div id="map" style ='float:left; width:70%; margin:0 auto; padding-bottom:100%;'>
</div>


<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=aca7a33cbeba078ce12f0cd87f9b9208"></script>



<?php

$host = "210.123.224.87";
$dbName = "GMANH";
$user = "GMANH";
$pw = "1234";

$con = mysqli_connect($host,$user,$pw,$dbName);

// 쿼리문 작성하기
$sql = "SELECT u_deviceno, h_lat, h_long,timestamp FROM history ORDER BY timestamp desc";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
//test
$lat1 = $row["h_lat"];
$long1 = $row["h_long"];
$time1 = $row["timestamp"];
$name1 = $row["u_deviceno"];

 
//
$row = mysqli_fetch_array($result); 
$lat2 = $row["h_lat"]; 
$long2 =$row["h_long"];
$time2= $row["timestamp"];
$name2 = $row["u_deviceno"];
//
$row = mysqli_fetch_array($result);
$lat3 = $row["h_lat"];
$long3 = $row["h_long"];
$time3 = $row["timestamp"];
$name3 = $row["u_deviceno"];
//
$row = mysqli_fetch_array($result);
$lat4 = $row["h_lat"];
$long4 = $row["h_long"];
$time4 = $row["timestamp"];
$name4 = $row["u_deviceno"];
//
$row = mysqli_fetch_array($result);
$lat5 = $row["h_lat"];
$long5 = $row["h_long"];
$time5 = $row["timestamp"];
$name5 = $row["u_deviceno"];
//
$row = mysqli_fetch_array($result);
$lat6 = $row["h_lat"];
$long6 = $row["h_long"];
$time6 = $row["timestamp"];
$name6 = $row["u_deviceno"];
//
$row = mysqli_fetch_array($result);
$lat7 = $row["h_lat"];
$long7 = $row["h_long"];
$time7 = $row["timestamp"];
$name7 = $row["u_deviceno"];
//
$row = mysqli_fetch_array($result);
$lat8 = $row["h_lat"];
$long8 = $row["h_long"];
$time8 = $row["timestamp"];
$name8 = $row["u_deviceno"];
//
$row = mysqli_fetch_array($result);
$lat9 = $row["h_lat"];
$long9 = $row["h_long"];
$time9 = $row["timestamp"];
$name9 = $row["u_deviceno"];
//
$row = mysqli_fetch_array($result);
$lat10 = $row["h_lat"];
$long10 = $row["h_long"];
$time10 = $row["timestamp"];
$name10 = $row["u_deviceno"];
//
//$row = mysqli_fetch_array($result);
//$lat3 = $row["x_position"];
//$long3 = $row["y_position"];
//$time3 = $row["time"];
//$name3 = $row["serial_num"];
//echo "<br>";



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

echo "let xx1 = $lat1;\n";
echo "let yy1 = $long1;\n";
echo "let xx2 = $lat2;\n";
echo "let yy2 = $long2;\n";
echo "let xx3 = $lat3;\n";
echo "let yy3 = $long3;\n";
echo "let xx4 = $lat4;\n";
echo "let yy4 = $long4;\n";
echo "let xx5 = $lat5;\n";
echo "let yy5 = $long5;\n";
echo "let xx6 = $lat6;\n";
echo "let yy6 = $long6;\n";
echo "let xx7 = $lat7;\n";
echo "let yy7 = $long7;\n";
echo "let xx8 = $lat8;\n";
echo "let yy8 = $long8;\n";
echo "let xx9 = $lat9;\n";
echo "let yy9 = $long9;\n";
echo "let xx10 = $lat10;\n";
echo "let yy10 = $long10;\n";

echo "let t_time1 ='".$time1."';";
echo "let t_time2 ='".$time2."';";
echo "let t_time3 ='".$time3."';";
echo "let t_time4 ='".$time4."';";
echo "let t_time5 ='".$time5."';";
echo "let t_time6 ='".$time6."';";
echo "let t_time7 ='".$time7."';";
echo "let t_time8 ='".$time8."';";
echo "let t_time9 ='".$time9."';";
echo "let t_time10 ='".$time10."';";

echo "let name1 = '".$name1."';";
echo "let name2 = '".$name2."';";
echo "let name3 = '".$name3."';";
echo "let name4 = '".$name4."';";
echo "let name5 = '".$name5."';";
echo "let name6 = '".$name6."';";
echo "let name7 = '".$name7."';";
echo "let name8 = '".$name8."';";
echo "let name9 = '".$name9."';";
echo "let name10 = '".$name10."';";

?>

// 좌표 중심점 
var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
    mapOption = { 
        center: new kakao.maps.LatLng(xx1, yy1), // 지도의 중심좌표
        level: 5 // 지도의 확대 레벨
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
var markerPosition1 = new kakao.maps.LatLng(xx1, yy1);
var markerPosition2 = new kakao.maps.LatLng(xx2, yy2);
var markerPosition3 = new kakao.maps.LatLng(xx3, yy3);
var markerPosition4 = new kakao.maps.LatLng(xx4, yy4);
var markerPosition5 = new kakao.maps.LatLng(xx5, yy5);
var markerPosition6 = new kakao.maps.LatLng(xx6, yy6);
var markerPosition7 = new kakao.maps.LatLng(xx7, yy7);
var markerPosition8 = new kakao.maps.LatLng(xx8, yy8);
var markerPosition9 = new kakao.maps.LatLng(xx9, yy9);
var markerPosition10 = new kakao.maps.LatLng(xx10, yy10);

//Marker image
//var imageSrc = "1111.png";
//var imageSize = new kakao.maps.Size(24,35);
//var imageOption = {offset: new kakao.maps.Point(27,69)};
//var markerimage = new kakao.mapsMarkerimage(imageSrc,imageSize,imageOption);
// 마커를 생성합니다
var marker1 = new kakao.maps.Marker({ position: markerPosition1, image : markerImage });
var marker2 = new kakao.maps.Marker({ position: markerPosition2, image : markerImage });
var marker3 = new kakao.maps.Marker({ position: markerPosition3, image : markerImage });
var marker4 = new kakao.maps.Marker({ position: markerPosition4, image : markerImage });
var marker5 = new kakao.maps.Marker({ position: markerPosition5, image : markerImage });
var marker6 = new kakao.maps.Marker({ position: markerPosition6, image : markerImage });
var marker7 = new kakao.maps.Marker({ position: markerPosition7, image : markerImage });
var marker8 = new kakao.maps.Marker({ position: markerPosition8, image : markerImage });
var marker9 = new kakao.maps.Marker({ position: markerPosition9, image : markerImage });
var marker10 = new kakao.maps.Marker({ position: markerPosition10, image : markerImage });

// 마커가 지도 위에 표시되도록 설정합니다
marker1.setMap(map);
marker2.setMap(map);
marker3.setMap(map);
marker4.setMap(map);
marker5.setMap(map);
marker6.setMap(map);
marker7.setMap(map);
marker8.setMap(map);
marker9.setMap(map);
marker10.setMap(map);

// 첫번째 좌표 인포윈도우
var iwContent1 = '<div style="padding:2px;">'+name1+':&nbsp' +t_time1 +'</div>',
  iwPosition1 = new kakao.maps.LatLng(xx1, yy1);
var infowindow1 = new kakao.maps.InfoWindow({ position : iwPosition1, content : iwContent1 });
// 두번째 좌표 인포윈도우
var iwContent2 = '<div style="padding:2px;">'+name2+':&nbsp'+ t_time2 +'</div>',
  iwPosition2 = new kakao.maps.LatLng(xx2,yy2);
var infowindow2 = new kakao.maps.InfoWindow({ position : iwPosition2, content : iwContent2});
// 세번째 좌표 인포 윈도우 
var iwContent3 = '<div style="padding:2px;">'+name3+':&nbsp'+ t_time3 +'</div>',
  iwPosition3 = new kakao.maps.LatLng(xx3, yy3);
var infowindow3 = new kakao.maps.InfoWindow({ position : iwPosition3, content : iwContent3});
// 세번째 좌표 인포 윈도우 
var iwContent4 = '<div style="padding:2px;">'+name4+':&nbsp'+ t_time4 +'</div>',
  iwPosition4 = new kakao.maps.LatLng(xx4, yy4);
var infowindow4 = new kakao.maps.InfoWindow({ position : iwPosition4, content : iwContent4});
// 세번째 좌표 인포 윈도우 
var iwContent5 = '<div style="padding:2px;">'+name5+':&nbsp'+ t_time5 +'</div>',
  iwPosition5 = new kakao.maps.LatLng(xx5, yy5);
var infowindow5 = new kakao.maps.InfoWindow({ position : iwPosition5, content : iwContent5});
// 세번째 좌표 인포 윈도우 
var iwContent6 = '<div style="padding:2px;">'+name6+':&nbsp'+ t_time6 +'</div>',
  iwPosition6 = new kakao.maps.LatLng(xx6, yy6);
var infowindow6 = new kakao.maps.InfoWindow({ position : iwPosition6, content : iwContent6});
// 세번째 좌표 인포 윈도우 
var iwContent7 = '<div style="padding:2px;">'+name7+':&nbsp'+ t_time7 +'</div>',
  iwPosition7 = new kakao.maps.LatLng(xx7, yy7);
var infowindow7 = new kakao.maps.InfoWindow({ position : iwPosition7, content : iwContent7});
// 세번째 좌표 인포 윈도우 
var iwContent8 = '<div style="padding:2px;">'+name8+':&nbsp'+ t_time8 +'</div>',
  iwPosition8 = new kakao.maps.LatLng(xx8, yy8);
var infowindow8 = new kakao.maps.InfoWindow({ position : iwPosition8, content : iwContent8});
// 세번째 좌표 인포 윈도우 
var iwContent9 = '<div style="padding:2px;">'+name9+':&nbsp'+ t_time9 +'</div>',
  iwPosition9 = new kakao.maps.LatLng(xx9, yy9);
var infowindow9 = new kakao.maps.InfoWindow({ position : iwPosition9, content : iwContent9});
// 세번째 좌표 인포 윈도우 
var iwContent10 = '<div style="padding:2px;">'+name10+':&nbsp'+ t_time10 +'</div>',
  iwPosition10 = new kakao.maps.LatLng(xx10, yy10);
var infowindow10 = new kakao.maps.InfoWindow({ position : iwPosition10, content : iwContent10});

// 인포 윈도우 오픈 
infowindow1.open(map, marker1);
infowindow2.open(map, marker2);
infowindow3.open(map, marker3);
infowindow4.open(map, marker4);
infowindow5.open(map, marker5);
infowindow6.open(map, marker6);
infowindow7.open(map, marker7);
infowindow8.open(map, marker8);
infowindow9.open(map, marker9);
infowindow10.open(map, marker10);



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
<aside>
<iframe src ="file_lead.php">
<p>test</p>
</aside>










</body>
 
 </html>

