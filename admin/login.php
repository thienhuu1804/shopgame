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
include 'C:\xampp\htdocs\shopgame-master\KetNoiDB\access.php';
if(isset($_POST['login']))
{
	global $connection;
	  $admin =  $_POST['admin'];
      $pass =  $_POST['password'];
	
    $sel_user = "select * from quantri where tendangnhap='$admin' AND pass='$pass'";
 $connection=mysqli_connect("localhost", "root", "", "shopgame") or die("can't connect this database");
    $run_user = mysqli_query($connection, $sel_user);

    $check_user = mysqli_num_rows($run_user);

    if($check_user==1){

    $_SESSION['tendangnhap']=$admin;

    echo "<script>window.open('index.php','_self')</script>";
	echo "<script>alert('dang nhap thanh cong!')</script>";

    }
    else {

    echo "<script>alert('Sai tên admin hoặc mật khẩu!')</script>";

    }


    }




  
?>		  
	  
