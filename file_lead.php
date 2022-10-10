<html>
<head>
<meta charset="utf-8">
<title>GPS Location</title>
<meta http-equiv="refresh" content="5">
</head>
<body>
<?php
// 비어 있는 라인이나 개행처리 되지 않은 값을 반환받습니다.
	$arr = file('ut/list.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

	foreach($arr as $img_name){
 }


echo "<img src='/ut/{$img_name}'style='width:100%;,height:100%;'>";
 ?>
</body>
</html>
