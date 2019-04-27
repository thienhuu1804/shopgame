<?php
echo'
<table id="cart" class="table table-hover table-condensed"> 
	<thead> 
		<tr> 
			<th style="width:50%">Tên sản phẩm</th> 
			<th style="width:10%">Giá</th> 
			<th style="width:10%">Số lượng</th> 
			<th style="width:20%" class="text-center">Thành tiền</th> 
			<th style="width:10%"> </th> 
		</tr> 
	</thead> 
	<tbody><tr>  
		<td data-th="Product"> 
			<div class="row"> 
				<div class="col-sm-2 hidden-xs"><img src="img/sanpham/lqmb.jpg" alt="Sản phẩm 1" class="img-responsive" width="100px" height="100px">
				</div> 
				<div class="col-sm-10"> 
					<h4 class="nomargin">Sản phẩm 1</h4> 
					<p>Mô tả của sản phẩm 1</p> 
				</div> 
			</div> 
		</td> 
		
		<td data-th="Price">200.000 đ</td> 
		<td data-th="Quantity"><input class="form-control text-center" value="1" type="number">
		</td> 
		<td data-th="Subtotal" class="text-center">200.000 đ</td> 
		<td class="actions" data-th="">
			<button class="btn btn-info btn-sm">Sửa</button> 
			<button class="btn btn-danger btn-sm">Xóa</button>
		</td> 
	</tr> 
	<tr> 
		<td data-th="Product"> 
			<div class="row"> 
				<div class="col-sm-2 hidden-xs"><img src="img/sanpham/army.png" alt="Sản phẩm 1" class="img-responsive" width="100px" height="100px">
				</div> 
				<div class="col-sm-10"> 
					<h4 class="nomargin">Sản phẩm 2</h4> 
					<p>Mô tả của sản phẩm 2</p> 
				</div> 
			</div> 
		</td> 
		<td data-th="Price">300.000 đ</td> 
		<td data-th="Quantity"><input class="form-control text-center" value="1" type="number">
		</td> 
		<td data-th="Subtotal" class="text-center">300.000 đ</td> 
		<td class="actions" data-th="">
			<button class="btn btn-info btn-sm">Sửa</button> 
			<button class="btn btn-danger btn-sm">Xóa</button>
		</td> 
	</tr> 
</tbody><tfoot> 
	<tr class="visible-xs"> 
		<td class="text-center"><strong>Tổng 200.000 đ</strong>
		</td> 
	</tr> 
	<tr> 
		<td><a href="###"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
		</td> 
		<td colspan="2" class="hidden-xs"> </td> 
		<td class="hidden-xs text-center"><strong>Tổng tiền 500.000 đ</strong>
		</td> 
		<td><a href="####" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
		</td> 
	</tr> 
</tfoot> 
</table>
';
?>