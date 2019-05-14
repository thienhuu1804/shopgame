<?php
/* if(!isset($_SESSION['tendangnhap'])){

  echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
  }
  else { */
?>
<script>
    function confirmDelete(id) {
        var conf = confirm('Bạn có chắc muốn xóa SP này?');
        if (conf){
            url = "xem_sanpham.php?delete_sp=" + id;
            window.location.href = decodeURIComponent(url);
        }
    }

</script>
<table width="795" align="center" bgcolor="pink">


    <tr align="center">
        <td colspan="6"><h2>Các Sản Phẩm</h2></td>
    </tr>

    <tr align="center" bgcolor="skyblue">
        <th>STT</th>
        <th>ID</th>
        <th>Tên</th>
        <th>Hình</th>
        <th>Giá</th>
        <th> So Luong</th>
        <th>Chỉnh Sửa</th>
        <th>Xóa SP</th>
    </tr>
    <?php
    include '../KetNoiDB/access.php';
    if (isset($_GET["delete_sp"])) {
        $masp =$_GET["delete_sp"];
        $result = deleteSanPham($masp);
        if ($result) {
            echo "<script>alert('Đã xóa sản phẩm $masp')</script>";
            echo "<script>window.open('them_sanpham.php','_self')</script>";
        }
    }
    $confirm = getAllSanPham();
    $i = 0;
    while ($row_pro = mysqli_fetch_array($confirm)) {
        $pro_id = $row_pro['MaSP'];
        $pro_title = $row_pro['TenSP'];
        $pro_image = $row_pro['hinhanh'];
        $pro_price = $row_pro['DonGia'];
        $pro_quantity = $row_pro['SoLuong'];
        $i++;
        ?>
        <tr align="center">
            <td><?php echo $i; ?> </td>
            <td style="font-weight: bold;"><?php echo $pro_id ?></td> 
            <td><?php echo $pro_title; ?></td>
            <th><img src="../<?php echo $pro_image; ?>" width="90" height="110"/></td>
            <td><?php echo $pro_price; ?> đ</td>
            <td><?php echo $pro_quantity; ?></td>
            <td><button><a href="index.php?edit_pro=<?php echo $pro_id; ?>">SỬA</a></button></td> 
            <td><button onClick="confirmDelete('<?php echo $pro_id; ?>')">XÓA</button></td>
        </tr>
    <?php } ?>
</table>
