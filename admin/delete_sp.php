<?php
include 'C:\xampp\htdocs\shopgame-master\KetNoiDB\access.php';
  $connection=mysqli_connect("localhost", "root", "", "shopgame") or die("can't connect this database");
if (isset($_GET['delete_sp']))
{
	$delete_id = $_GET['delete_sp'];
	$delete_sp=("delete FROM sanpham WHERE MaSP='.$delete_id.'");
$confirm= mysqli_query($connection,$delete_sp);
	if($delete_sp)
	{
		echo "<script>alert('Đã xóa 1 sản phẩm!')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	}
}
?>
	