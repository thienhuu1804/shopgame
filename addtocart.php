<?php
if (!empty($_SESSION["cart"]))
{
	$s="";
	$tong = 0;
	foreach ($_SESSION["cart"] as $key => $value) {
	$s=$s.'<tr id="'.$key.'">
		<td><img class="img-responsive" width="150px" height="100px" src="'.$_SESSION["cart"][$key]["hinhanh"].'"></td>
		<td>'.$_SESSION["cart"][$key]["tensp"].'</td>
		<td>'.number_format($_SESSION["cart"][$key]["dongia"]).' vnđ</td>
		<td><input type="button" class="Giam" name="amountDecrease" value="-" "/>
			<input type="text" id="itemAmount" value="'.$_SESSION["cart"][$key]["sl"].'" >
			<input type="button" class="Tang" name="amountIncrease" value="+" "/> <br>
			<td>'.number_format($_SESSION["cart"][$key]["sl"]*$_SESSION["cart"][$key]["dongia"]).' vnđ</td>
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

echo "<pre />";
var_dump($_SESSION["cart"]);
}
else echo 'Giỏ hàng rỗng :))';


?>