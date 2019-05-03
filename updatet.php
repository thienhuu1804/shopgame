<?php 
	session_start();
	unset($_SESSION['cart'][$_GET['masp']]);
	$soluong=0;
	foreach ($_SESSION["cart"] as $key => $value) {
		$soluong=$soluong+$_SESSION["cart"][$key]['sl'];
	}
	echo $soluong;
 ?>