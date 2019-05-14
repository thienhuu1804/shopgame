<?php
if (!empty($_SESSION["cart"]))
{
	$s="";
	$tong = 0;
	$tongsl = 0;
	$tonggiatien = 0 ;
	foreach ($_SESSION["cart"] as $key => $value) {
	$tongsl = $tongsl + $_SESSION["cart"][$key]["sl"];
        $tong = $_SESSION["cart"][$key]["sl"]*$_SESSION["cart"][$key]["dongia"];
	$tonggiatien = $tonggiatien + $_SESSION["cart"][$key]["sl"]*$_SESSION["cart"][$key]["dongia"];
	$tongtien = number_format($tonggiatien);
	$s=$s.'<tr id="'.$key.'">
		<td><img class="img-responsive" width="150px" height="100px" src="'.$_SESSION["cart"][$key]["hinhanh"].'"></td>
		<td>'.$_SESSION["cart"][$key]["tensp"].'</td>
		<td>'.number_format($_SESSION["cart"][$key]["dongia"]).' vnđ</td>
		<td><input type="button" id="giamsp" class="Giam" name="amountDecrease" value="-" " onclick="giamsanpham(`'.$key.'`)"/>
			<input type="number" id="itemAmount" value="'.$_SESSION["cart"][$key]["sl"].'" onkeyup="nhapsosanpham(`'.$key.'`)" >
			<input type="button" id="tangsp" class="Tang" name="amountIncrease" value="+" " onclick="tangsanpham(`'.$key.'`)"/> <br>
			<td id="tong">'.number_format($tong).' vnđ</td>
			<td><button onclick="xoa(`'.$key.'`);" style="margin-bottom: 10px" type="button" class="btn btn-danger btn-lg btn-sm"><span class="glyphicon glyphicon-trash"></span></button></td>
		</tr>';
	}
	echo '<div class="row">
		<div class="col-md-12">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Sản phẩm</th>
						<th>Tên sản phẩm</th>
						<th>Đơn giá</th>
						<th>Số lượng</th>
						<th>Thành tiền</th>
						<th>Xóa</th>
					</tr>
				</thead>
				<tbody>
					'.$s.'
				</tbody>
			</table>
		</div>
	</div>';
	echo '<table class="table table-hover style="width:30%">
		<div class="row"><div class="col-md-12">
		<tbody>
			
				<th>Tổng sản phẩm : <span id="tongsoluong">'.$tongsl.'</span> </br> Tổng tiền : <span id="tongsotien">'.$tongtien.'  vnđ</span> </br> <button type="button" class="btn btn-success style="width:30%">Thanh toán</button></th>
			
		</tbody>
	</div>
</div>	</table>';
}
else echo '<img class="img-responsive" width="900x" height=500px" src="img/giohangrong.png">
<a href="http://localhost:8080/DoAn/shopgame1/index.php?page=home"><button type="button" class="btn btn-warning">Mua ngay</button></a>';
?>