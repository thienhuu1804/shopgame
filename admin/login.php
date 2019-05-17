<?php
session_start();
?>
<!DOCTYPE>
<html>
<head>
    <title>ADMIN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="login_style.css" media="all" />
</head>
<body>
    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
                <div class="login">
                    <!--<h2 style="color:white; text-align:center;"><?php echo @$_GET['not_admin']; ?></h2>-->

                    <?php echo @$_GET['logged_out']; ?></h2>
                    <div class="d-flex justify-content-center">
                        <div class="brand_logo_container">
                            <img src="img/user.jpg" class="brand_logo" alt="Logo">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center form_container">
                        <form  method="post" action="login.php">
                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" name="admin" class="form-control input_user" placeholder="Tài khoản Admin" required="required" />
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                 <input type="password" name="password" placeholder="Mật khẩu" class="form-control input_pass" required="required" />
                            </div>
                                
                               
                                <button type="submit" class="btn btn-primary btn-block btn-large" name="login">Đăng Nhập</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>
    <?php
    include '../KetNoiDB/access.php';
    if (isset($_POST['login'])) {
        $connection;
        $connection = mysqli_connect("localhost", "root", "", "shopgame") or die("can't connect this database");
        $admin = $_POST['admin'];
        $pass = $_POST['password'];

        $sel_user = "select * from quantri where TenDangNhap='" . $admin . "'";
        $run_user = mysqli_query($connection, $sel_user);

        if ($resultAcc = mysqli_fetch_array($run_user)) {
            $checkAcc = mysqli_query($connection, "SELECT * FROM taikhoan where TenDangNhap='" . $resultAcc["TenDangNhap"] . "'");
            if($resultPass = mysqli_fetch_array($checkAcc)){
                if($pass == $resultPass["MatKhau"])
                 $_SESSION['tendangnhap'] = $admin; 
         }
         echo "<script>window.open('index.php','_self')</script>";
         echo "<script>alert('dang nhap thanh cong!')</script>";
     } else {
        echo "<script>alert('Sai tên admin hoặc mật khẩu!')</script>";
    }
}
?>		  

