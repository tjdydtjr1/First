<?php
	session_start();
	if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
	else $userid = "";
	if (isset($_SESSION["username"])) $username = $_SESSION["username"];
        else $userid = "";
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GMANH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-white bg-white fixed-top" id="mainNav">
        <div class="container px-10">
            <a class="navbar-brand" style="position: absolute;">
	    <a class="btn btn-secondary;" style="width: 200px; height: 80px; font-size: 30px;" href="index.php">GMANH</a></a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="navbar-collapse collapse" id="navbarResponsive" style="">
                <ul class="navbar-nav ms-auto ">

			<?php
				if (!$userid) {
			?>
					<li class="nav-item"><a class="btn btn-outline-primary" href="member_form.php">회원가입</a></li>&nbsp;
					<li class="nav-item"><a class="btn btn-outline-primary" href="login_form.php">로그인</a></li>&nbsp;
					<li class="nav-item"><a class="btn btn-outline-primary" href="map.php">KaKaoMap</a></li>
			<?php
				} else {
//					$logged = $username."님&nbsp;&nbsp;&nbsp;";
			?>
					<?php $logged = $username; ?>
<!--					<li><?=$logged?> </li> -->
					<li class="nav-item"><a class="btn btn-outline-success" href="member_modify_form.php"><?=$logged?>님 반가워요</a></li>&nbsp;
					<li class="nav-item"><a class="btn btn-outline-primary" href="logout.php">로그아웃</a></li>&nbsp;
					<li class="nav-item"><a class="btn btn-outline-primary" href="map.php">KaKaoMap</a></li>
			<?php
				}
			?>
                </ul>
            </div>
        </div>
    </nav>



</body>
</html>
