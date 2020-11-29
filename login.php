<?php	
  
	$conn = new mysqli("localhost","root","","shop_db");
	if($_POST["user_id"] == ""){
		echo '<script> alert("아이디 입력하세요"); history.back(); </script>';
	}else{

	$sql = "select * from guest where user_id='".$_POST['user_id']."'";
	$result = mysqli_query( $conn, $sql);

	if($result!="")
	{
		session_start();
		$_SESSION['user_id'] = $id["user_id"];

		echo "<script>alert('로그인되었습니다.'); location.href='/pjh/check_item.php';</script>";
	}else{ 
		echo "<script>alert('아이디 확인하세요.'); history.back();</script>";
	}
    }
?>