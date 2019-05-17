<table class="table table-hover tableqluser">
	<thead>
		<tr>
			<th style="text-align:center">STT</th>
			<th style="text-align:center"> Mã Thành Viên </th>
			<th style="text-align:center">Tên</th>
			<th style="text-align:center">Email</th>
			<th style="text-align:center">Địa chỉ</th>
			<th style="text-align:center">Xóa tài khoản</th>
		</tr>
	</thead>
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

