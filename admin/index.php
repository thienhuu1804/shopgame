<?php
if (isset($_GET["page"])) {
    $page = $_GET['page'];
} else {
    $page = "";
}
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
        <script type="text/javascript">
        </script>
    </head>

    <body>
        <div class="header">
           <ul>
              <li><a href="#home">Khu quản lý</a></li>
              <li><a href="http://localhost:8080/DoAn/shopgame/admin/index.php">Home</a></li>
              <li><a href="#contact">Tài khoản</a></li>
          </ul>
      </div>
      <div class="container-fluid content">
         <div>
            <div class="col-sm-2 left">
              <ul class="nav nav-pills nav-stacked">
               <a href="?page=them_sanpham.php"> <li>Thêm sản phẩm</li></a>
               <a href="?page=xem_sanpham.php&pages=1"><li>Xem các sản phẩm</li></a>
               <a href="?page=xem_users.php"><li>Xem khách hàng</li></a>
               <a href="?page=index.php?view_orders"><li>Xem đơn đặt hàng</li></a>
               <a href="?page=index.php?view_payments"> <li>Xem đơn đã xử lý</li></a>
               <a href="?page=index.php?view_payments"> <li>Quản lý danh mục</li></a>
           </ul>
       </div>
       <div class="col-sm-9 right">
        <?php

        if (isset($_GET['page'])) {
            if ($page == "them_sanpham.php")
                include "them_sanpham.php";
            if ($page == "xem_sanpham.php")
                include "xem_sanpham.php";
            if ($page == "xem_users.php")
                include "xem_users.php";
            if ($page == "index.php?view_orders")
                include "index.php?view_orders";
            if ($page == "index.php?view_payments")
                include "index.php?view_payments";
            if ($page == "logout.php")
                include "logout.php";
        }
        else {
            include "headeradmin.php";
             include "bieudo.php";
        }
        ?>
    </div>
</div>
</div>

<!--Bottom Footer-->
<div class="bottom section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="copyright">
                    <p>© <span>2018</span> <a href="#" class="transition">KnightRider7660</a> All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Bottom Footer-->
</body>
</html>
<?php } ?>
