<?php
    $id   = $_POST["id"];
    $pass = $_POST["pass"];
    $name = $_POST["name"];
    $email1  = $_POST["email1"];
    $email2  = $_POST["email2"];

    $email = $email1."@".$email2;
    $regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

//
    $hash = password_hash($pass, PASSWORD_BCRYPT);
//

    $con = mysqli_connect("localhost", "test2", "1234", "member");
//  
    // 아래 코드에 대한 쿼리 
    $check = "select id from members where id='$id'";
    // DB에 저장된 ID와 입력한 ID와 같은지 확인
    $check2 = mysqli_query($con, $check);
    // 만약 ID가 같은 행이 있다면 check3으로 리턴
    $check3 = mysqli_num_rows($check2);

    if($check3){
	echo " <script> alert('ID중복으로 인해 회원가입 실패');
			location.href = 'member_form.php';
	       </script>";
        
	}
    else{
	$sql = "insert into members(id, pass, name, email, regist_day, level, point) ";
	$sql .= "values('$id', '$hash', '$name', '$email', '$regist_day', 9, 0)";

	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
    mysqli_close($con);
        }
 
   echo "
	      <script>
	         alert('회원가입이 성공하였습니다.'); 
		 location.href = 'index.php';
	      </script>
	  ";
?>

   
