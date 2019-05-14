<table width="795" align="center" bgcolor="pink"> 

	
	<tr align="center">
		<td colspan="6"><h2>TÀI KHOẢN NGƯỜI DÙNG</h2></td>
	</tr>
	
	<tr align="center">
		<th>STT</th>
		<th>Tên tài khoản</th>
        <th> Mã Thành Viên </th>
        <th>Tên</th>
		<th>Email</th>
        <th>Địa chỉ</th>
		<th>Xóa tài khoản</th>
	</tr>
<?php
include '../KetNoiDB/access.php';
$connection=mysqli_connect("localhost", "root", "", "shopgame") or die("can't connect this database");
  mysqli_set_charset($connection, 'UTF8');
$get_c =  "SELECT * from thanhvien";
$confirm= mysqli_query($connection,$get_c);
	
	$i = 0;
	while($row_c= mysqli_fetch_array($confirm)){
		$c_id = $row_c['MaTV'];
		$c_loginname= $row_c['TenDangNhap'];
		$c_name = $row_c['TenTV'] ;
		$c_email = $row_c['Gmail'];
		$c_add= $row_c['DiaChi'];
		$i++;
		
?>
<tr align="center">
		<td><?php echo $i;?></td>
       	<td><?php echo $c_loginname;?></td>
         <th><?php echo $c_id; ?></th>
        <td><?php echo $c_name;?></td>
		<td><?php echo $c_email;?></td>
        <td><?php echo $c_add;?></td>
        <th><a onClick="javascript:confirmationDelete($(this));return false;" href="delete_user.php?delete_user=<?php echo $c_id;?>"> Xóa Tài Khoản</a></th>
        </tr>
    <script>
    function confirmationDelete(anchor)
{
    var conf = confirm('Bạn có chắc muốn xóa tài khoản này?');
    if(conf)
        window.location=anchor.attr("href");
}

    </script>
	<?php } ?>
    </table>
    
