<?php
 include 'C:\xampp\htdocs\shopgame-master\KetNoiDB\access.php';
  $connection=mysqli_connect("localhost", "root", "", "shopgame") or die("can't connect this database");
  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea'});
</script>
<title>Inserting Product</title>
</head>

<body bgcolor="#18DFED">
<form action="" method="get/post" enctype="multipart/form-data"> 
		
		<table align="center" width="795" border="2" bgcolor="#187eae">
			
			<tr align="center">
				<td colspan="7"><h2>THÊM SẢN PHẨM</h2></td>
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
				<td align="right"><b>Mô tả:</b></td>
				<td><textarea name="product_desc" cols="20" rows="10"></textarea></td>
			</tr>
			

			
			<tr align="center">
				<td colspan="7"><input type="submit" name="insert_post" value="Thêm SP"/></td>
			</tr>
		
		</table>
	
	
	</form>
    <?php
	if(isset($_POST['insert_post'])){
		$product_title= $_POST['product_title'];
		$product_price = $_POST['product_price'];
		$product_desc = $_POST['product_desc'];
		$product_quantity = $_POST['product_quantity'];
		$product_image= $_FILES['product_image']['name'];
		$product_image_tmp= $_FILES['product_image']['tmp_name'];
		$upload_dir= '../img/sanpham';
		move_uploaded_file($product_image_tmp,"$upload_dir/$product_image");
		$insert_product = " insert into sanpham ( TenSp, hinhanh, dongia,soluong,MoTa	) values (".$product_title.",".$product_image.", ".$product_price.",".$product_quantity.", ".$product_desc.")";
		
		 $insert_pro = mysqli_query($connection, $insert_product);
		 echo $insert_pro;
		 
		 if($insert_pro){
		 echo "<script>alert('Thêm thành công!')</script>";
		 echo "<script>window.open('index.php?insert_product','_self')</script>";
			}
	}
		
	?>
</body>
</html>