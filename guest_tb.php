<?php
	$connect = mysqli_connect('localhost', 'root', '');
    $db = mysqli_select_db ($connect, 'shop_db');
	$prevPage = $_SERVER['HTTP_REFERER'];

	$id = $_POST['id'];
	$name = $_POST['name'];
	$nick = $_POST['nick'];
	$pn = $_POST['pn'];
	$sex = $_POST['sex'];
	$addr = $_POST['addr'];
	$birth = $_POST['birth'];
	$guest = "insert into guest (user_name, user_id, user_nick, user_sex, user_pn, user_addr, user_birth)
			values('$name','$id','$nick','$sex','$pn','$addr','$birth')";
			if($connect->query($guest))
			{
			header('location:'.$prevPage);
	        }
			else
			{
			echo 'fail to insert sql';
			header('location:'.$prevPage);
			}
?>