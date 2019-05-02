<?php
session_start();
include_once 'KetNoiDB/access.php';
	if(isset($_GET['masp'])){//Kiểm tra sản phẩm có tồn tại hay không
		$result = getChiTietSanPham($_GET['masp']);
		$row = mysqli_fetch_array($result);
		//var_dump($row);
		if(!$row){
			echo "Không tồn tại sản phẩm!!!Đang trở lại trang chủ!!!";
			header('Refresh: 3;URL=../index.php');
		}
		else{
			$masp=$_GET['masp'];
			if(!empty($_SESSION["cart"])){
				$cart=$_SESSION["cart"];
				if(array_key_exists($masp,$cart)){
					$cart[$masp] = array(
						"sl"=>(int)$cart[$masp]['sl']+1,
						"tensp"=>$row['TenSP'],
						"hinhanh"=>$row['hinhanh'],
						"dongia"=>$row['DonGia']	
					);
				}
				else{
					$cart[$masp] = array(
						"sl"=>1,
						"tensp"=>$row['TenSP'],
						"hinhanh"=>$row['hinhanh'],
						"dongia"=>$row['DonGia']
					);	
				}
			}
			else{
				//Lần đầu mua hàng
				$cart[$masp] = array(
					"sl"=>1,
					"tensp"=>$row['TenSP'],
					"hinhanh"=>$row['hinhanh'],
					"dongia"=>$row['DonGia']
				);	
			}
			$_SESSION["cart"]=$cart;
		}	
	}
	$soluong=0;
	foreach ($_SESSION["cart"] as $key => $value) {
		$soluong=$soluong+$_SESSION["cart"][$key]['sl'];
	}
	$arr=[
		'masp'=>$masp,
		'sl'=>$_SESSION["cart"][$masp]['sl'],
		'tongsl'=>$soluong,
		'thanhtien'=>$_SESSION["cart"][$masp]['sl']*$_SESSION["cart"][$masp]['dongia']
	];
	echo json_encode($arr);
	?>