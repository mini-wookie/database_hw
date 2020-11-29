<?php
$connect = mysqli_connect('localhost', 'root', '');
    $db = mysqli_select_db ($connect, 'shop_db');
	$prevPage = $_SERVER['HTTP_REFERER'];
	$item_cost = $_POST['item_cost'];
	
	$item = "insert into guest (user_purch)
			values('$item_cost')";
			if($connect->query($item))
			{
			header('location:'.$prevPage);
	        }
			else
			{
			echo 'fail to insert sql';
			header('location:'.$prevPage);
			}
?>