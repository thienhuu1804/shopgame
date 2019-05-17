<?php
session_start();
?>
<!DOCTYPE>
<html>
<head>
    <title>ADMIN</title>
    <link rel="stylesheet" href="login_style.css" media="all" />

</head>
<body background="abstract-1522884_1280.jpg">
    <div class="login">
        <!--<h2 style="color:white; text-align:center;"><?php echo @$_GET['not_admin']; ?></h2>-->

        <h2 style="color:white; text-align:center;"><?php echo @$_GET['logged_out']; ?></h2>
        <h1>Đăng Nhập Admin</h1>
        <form method="post" action="login.php">
            <input type="text" name="admin" placeholder="Tài khoản Admin" required="required" />
            <input type="password" name="password" placeholder="Mật khẩu" required="required" />
            <button type="submit" class="btn btn-primary btn-block btn-large" name="login">Đăng Nhập</button>
        </form>
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

