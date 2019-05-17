<?php 
session_start();
$masp = $_GET['masp'];
$soluonghientai = $_SESSION['cart'][$masp]['sl'] ;
$tien = $_SESSION["cart"][$masp]["sl"]*$_SESSION["cart"][$masp]["dongia"];
if (isset($_GET['soluong'])){
	$_SESSION['cart'][$masp]['sl']= $_GET['soluong'];
	$soluonghientai= $_SESSION['cart'][$masp]['sl'];
}
if ($_GET['xoa']==1) {
	unset($_SESSION['cart'][$_GET['masp']]);
	$soluonghientai = 0 ;
}
$soluong=0;
$tonggiatien = 0 ;
foreach ($_SESSION["cart"] as $key => $value) {
	$soluong=$soluong+$_SESSION["cart"][$key]['sl'];
	$tonggiatien = $tonggiatien + $_SESSION["cart"][$key]["sl"]*$_SESSION["cart"][$key]["dongia"];
}
$arr=[
	'tongsl'=>$soluong,
	'tongtien'=> $tonggiatien,
	'masp' => $masp,
	'soluonghientai' => $soluonghientai,
	'tien'=> $tien
];
echo json_encode($arr);
?>