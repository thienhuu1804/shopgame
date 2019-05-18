<?php
if (isset($_GET["page"])) {
    $page = $_GET['page'];
} else {
    $page = "";
}
session_start();
if (!isset($_SESSION['tendangnhap'])) {
    echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
} else {
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
        $(document).ready(function () {
            $('#example').DataTable;
        });
                                        </script>
                                        </head>

                                        <body>
                                            <div class = "jumbotron jumbotron-fluid header">
                                                <h3>Admin</h3>
                                            </div>
                                            <div class="container-fluid content">
                                                <div>
                                                    <div class="col-sm-3 left">
                                                        <ul class="nav nav-pills nav-stacked">
                                                            <a href="?page=them_sanpham.php"> <li>Thêm sản phẩm</li></a>
                                                            <a href="?page=xem_sanpham.php&pages=1"><li>Xem các sản phẩm</li></a>
                                                            <a href="?page=xem_users.php"><li>Xem khách hàng</li></a>
                                                            <a href="?page=index.php?view_orders"><li>Xem đơn đặt hàng</li></a>
                                                            <a href="?page=index.php?view_payments"> <li>Xem các đơn đã xử lý</li></a>
                                                            <a onclick="dangxuat();"> <li>Đăng xuất</li></a>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-9 right">
                                                        <?php
                                                        if (isset($_GET['page'])) {
                                                            $page = $_GET['page'];
                                                            if ($page == "them_sanpham.php")
                                                                include "them_sanpham.php";
                                                            else if ($page == "xem_sanpham.php")
                                                                include "xem_sanpham.php";
                                                            else if ($page == "xem_users.php")
                                                                include "xem_users.php";
//                                                            else if ($page == "view_orders")
//                                                                include "index.php?view_orders";
//                                                            else if ($page == "view_payments")
//                                                                include "index.php?view_payments";
                                                            else if ($page == "sua_sanpham.php")
                                                                include "sua_sanpham.php";
                                                            if (isset($_GET["logout"])) {
                                                                unset($_SESSION["tendangnhap"]);
                                                                echo "<script> window.location.href='index.php';  </script>";
                                                            }
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class = "footer">
                                                <h3>@Shop game rẻ nhất Việt Nam</h3>
                                            </div>
                                            <script>
                                                function dangxuat() {
                                                    if (typeof (Storage) !== 'undefined') {
                                                        //                                                        console.log(sessionStorage.getItem('tendangnhap'));
                                                        sessionStorage.removeItem('tendangnhap');
                                                        sessionStorage.clear();
                                                        window.location.href = "index.php?logout=true";
                                                    }
                                                }
                                            </script>
                                        </body>
                                        </html>
                                    <?php } ?>
