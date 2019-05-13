<?php
session_start();
if(!isset($_SESSION['tendangnhap'])){

	echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}
else {

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Admin Panel</title>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="index.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800,800i,900,900i&amp;subset=vietnamese" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="main_wrapper">


        <div id="header"></div>

        <div id="right">
        <h2 style="text-align:center;">CHỨC NĂNG ADMIN</h2>

            <a href="them_sanpham.php"><button type="button" class="btn btn-success">Thêm Sản Phẩm</button></a>
            <a href="xem_sanpham.php"><button type="button" class="btn btn-success">Xem Các Sản Phẩm</button></a>
            <a href="xem_users.php"><button type="button" class="btn btn-success">Xem Khách Hàng</button></a>
            <a href="index.php?view_orders"><button type="button" class="btn btn-success">Xem Đơn Đặt Hàng</button></a>
            <a href="index.php?view_payments"><button type="button" class="btn btn-success">Các Đơn Đã Xử Lý</button></a>
            <a href="logout.php"><button type="button" class="btn btn-danger">Đăng Xuất</button></a>

        </div>
        

        <div id="left">
        <h2 style="color:red; text-align:center;"><?php echo @$_GET['logged_in']; ?></h2>
        <?php
		if(isset($_GET['them_sanpham'])){
			include("them_sanpham.php");
		}
		if(isset($_GET['xem_users'])){
			include("xem_users.php");
		}
		
		?>
        </div>
        </div>
 


</body>
</html>
<?php } ?>