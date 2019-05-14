<?php

 include_once '../KetNoiDB/access.php'; 
  $connection=mysqli_connect("localhost", "root", "", "shopgame") or die("can't connect this database");
?>
<html>
	<head>
		<title>Inserting Product</title> 
		
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea'});
</script>
	</head>
	
<body bgcolor="skyblue">


	<form action="insert_product.php" method="post" enctype="multipart/form-data"> 
		
		<table align="center" width="795" border="2" bgcolor="#187eae">
			
			<tr align="center">
				<td colspan="7"><h2>THÊM SẢN PHẨM</h2></td>
			</tr>
            <tr>
				<td align="right"><b>Ma SP:</b></td>
				<td><textarea name="product_desc" cols="20" rows="10"></textarea></td>
			</tr>
			
			
			<tr>
				<td align="right"><b>Tên SP:</b></td>
				<td><input type="text" name="product_title" size="60" required/></td>
			</tr>
			
		
			

			
			<tr>
				<td align="right"><b>Hình SP:</b></td>
				<td><input type="file" accept="image/*" name="product_image" /></td>
			</tr>
			
			<tr>
				<td align="right"><b>Giá tiền:</b></td>
				<td><input type="number" name="product_price" required/></td>
			</tr>
           
            <tr>
				<td align="right"><b>Số lượng:</b></td>
				<td><input type="number" name="product_quantity" required/></td>
			</tr>
            <tr>
				<td align="right"><b>Ma Nha Cung Cap:</b></td>
				<td><input type="text" name="product_brand" required/></td>
			</tr>
            <tr>
				<td align="right"><b>The Loai:</b></td>
				<td><textarea name="product_desc" cols="20" rows="10"></textarea></td>
			</tr>
			
			
			<tr>
				<td align="right"><b>Mô tả:</b></td>
				<td><textarea name="product_desc" cols="20" rows="10"></textarea></td>
			</tr>
            <tr>
				<td align="right"><b>Cau Hinh:</b></td>
				<td><textarea name="product_desc" cols="20" rows="10"></textarea></td>
			</tr>
            <tr>
				<td align="right"><b>Dung Luong:</b></td>
				<td><textarea name="product_desc" cols="20" rows="10"></textarea></td>
			</tr>
			<tr align="center">
				<td colspan="7"><input type="submit" name="insert_post" value="Thêm SP"/></td>
			</tr>
		
		</table>
	
	
	</form>


</body> 
</html>
<?php 

	if(isset($_POST['insert_post'])){
		$product_id= $_POST['product_id'];
		$product_title= $_POST['product_title'];
		$product_price = $_POST['product_price'];
		$product_quantity = $_POST['product_quantity'];
		$product_desc = $_POST['product_desc'];
		$product_NCC = $_POST['product_NCC'];
		$product_theloai = $_POST['product_theloai'];
		$product_cauhinh = $_POST['product_cauhinh'];
		$product_dungluong = $_POST['product_dungluong'];
		$product_image= $_FILES['product_image']['name'];
		$product_image_tmp= $_FILES['product_image']['tmp_name'];
		$upload_dir= '../img/sanpham';
		move_uploaded_file($product_image_tmp,"$upload_dir/$product_image");
		$insert_product = " insert into sanpham ( TenSp, hinhanh, dongia,soluong) values (".$product_title.",".$product_image.", ".$product_price.",".$product_quantity." )";
		$insert_product += " insert into chitietsanpham( MaSP, MaNCC,TheLoai,mota,CauHinh,DungLuong) Values(".$maSP.",".$mancc.",".$theloai.",".$mota.",".$cauhinh.",".$dungluong.")";
		
		$insert_pro = mysqli_query($con, $insert_product);
//		 echo $insert_pro;
		 
		if($insert_pro){
		echo "<script>alert('sua thành công!')</script>";
		echo "<script>window.open('index.php?insert_product','_self')</script>";
		}else{
                    echo $insert_pro;
                }
	}
		






?>


