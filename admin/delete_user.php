<?php
 include '../KetNoiDB/access.php';
  $connection=mysqli_connect("localhost", "root", "", "shopgame") or die("can't connect this database");
 if(isset($_GET['delete_user']))
{
	$delete_id = $_GET['delete_user'];
	$delete_user= ("delete FROM thanhvien WHERE MaTV='$delete_id'");
	$confirm= mysqli_query($connection,$delete_user);
	
	if($delete_user){
	
	echo "<script>alert('Đã xóa tài khoản người dùng!')</script>";
	/*echo "<script>window.open('index.php','_self')</script>";*/
	echo "<script>window.open('xem_users.php','_self')</script>";
	}
	
}
?>
	
	