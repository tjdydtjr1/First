<?php
    $id = $_GET["id"];

    $pass = $_POST["pass"];
    $name = $_POST["name"];
    $email1  = $_POST["email1"];
    $email2  = $_POST["email2"];
    $hash = password_hash($pass, PASSWORD_BCRYPT);
    $email = $email1."@".$email2;
          
    $con = mysqli_connect("localhost", "test2", "1234", "member");
    $sql = "update members set pass='$hash', name='$name' , email='$email'";
    $sql .= " where id='$id'";
    mysqli_query($con, $sql);

    mysqli_close($con);     

    echo "
	      <script>
	          location.href = 'index.php';
	      </script>
	  ";
?>

   
