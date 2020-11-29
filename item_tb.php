<?php
$connect = mysqli_connect('localhost', 'root', '');
    $db = mysqli_select_db ($connect, 'shop_db');
	$prevPage = $_SERVER['HTTP_REFERER'];
	$item_code = $_POST['item_code'];
	$item_name = $_POST['item_name'];
	$item_cost = $_POST['item_cost'];
	$item_quantity = $_POST['item_quantity'];
	$item = "insert into item (item_code, item_name, item_cost, item_quantity)
			values('$item_code', '$item_name','$item_cost','$item_quantity')";
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