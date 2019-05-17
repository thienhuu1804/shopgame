<script>
  function confirmDelete(id) {
    var conf = confirm('Bạn có chắc muốn xóa SP này?');
    if (conf){
      url = "xem_sanpham.php?delete_sp=" + id;
      window.location.href = decodeURIComponent(url);
    }
  }

</script>
<table class="table table-hover tableqluser">
  <thead>
    <tr>
      <th style="text-align:center">STT</th>
      <th style="text-align:center"> Mã sản phẩm </th>
      <th style="text-align:center"> Tên </th>
      <th style="text-align:center">Hình ảnh</th>
      <th style="text-align:center">Giá</th>
      <th style="text-align:center">Số lượng</th>
      <th style="text-align:center">Chỉnh sửa</th>
      <th style="text-align:center">Xóa sản phẩm</th>
    </tr>
  </thead>
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
  ?>
  <?php
  $rowsPerPage = 6;
  $pageNum = 1;
  if(isset($_GET['pages'])){
    $pageNum = $_GET['pages'];
  }
  $offset = ($pageNum - 1) * $rowsPerPage;
  $sql = "SELECT * FROM sanpham" . " LIMIT $offset, $rowsPerPage";
  $result = getAllSanPhamPhanTrang($sql);
  $confirm = getAllSanPham();
  $i = $offset + 1;
  while ($row_pro = mysqli_fetch_array($result)) {
    $pro_id = $row_pro['MaSP'];
    $pro_title = $row_pro['TenSP'];
    $pro_image = $row_pro['hinhanh'];
    $pro_price = $row_pro['DonGia'];
    $pro_quantity = $row_pro['SoLuong'];
    echo '<tr align="center">
    <td>'.$i.'</td>
    <td style="font-weight: bold;">'.$pro_id.'</td> 
    <td>'.$pro_title.'</td>
    <th><img src="../'.$pro_image.'" width="90" height="110"/></td>
    <td>'.$pro_price.' vnđ</td>
    <td>'.$pro_quantity.'</td>
    <td><button type="button" class="btn btn-info"><a href="index.php?edit_pro='.$pro_id.'">Sửa</a></button></td>
    <td><button type="button" class="btn btn-danger" onClick="confirmDelete(`'.$pro_id.'`)">Xóa</button></td>
    </tr>';
    $i++;
  }

  $sql   = "SELECT COUNT(*) AS numrows FROM sanpham";
  $result = getAllSanPhamPhanTrang($sql);
  $row     = mysqli_fetch_array($result);
  $numrows = $row['numrows'];
  $maxPage = ceil($numrows/$rowsPerPage);
  $nav  = '';
  for($page = 1; $page <= $maxPage; $page++)
  {
   if ($page == $pageNum)
   {
      $nav .= "<a href=\"#\" style=\"color:red;\">$page</a>"; // khong can tao link cho trang hien hanh
    }
    else
    {
      $nav .= " <a href=\"#\" onclick=\"phantrangajax($page)\">$page</a>";
    }
  }
        // tao lien ket den trang truoc & trang sau, trang dau, trang cuoi
  if ($pageNum > 1)
  {
   $page  = $pageNum - 1;
   $prev  = " <a href=\"#\" onclick=\"phantrangajax($page)\">[Trang trước]</a> ";

   $first = " <a href=\"#\" onclick=\"phantrangajax(1)\">[Trang đầu]</a> ";
 }
 else
 {
           $prev  = '&nbsp;'; // dang o trang 1, khong can in lien ket trang truoc
           $first = '&nbsp;'; // va lien ket trang dau
         }
         if ($pageNum < $maxPage)

         {
           $page = $pageNum + 1;
           $next = " <a href=\"#\" onclick=\"phantrangajax($page)\">[Trang kế]</a> ";
           $last = " <a href=\"#\" onclick=\"phantrangajax($maxPage)\">[Trang cuối]</a> ";
         }
         else
         {
           $next = '&nbsp;'; // dang o trang cuoi, khong can in lien ket trang ke
           $last = '&nbsp;'; // va lien ket trang cuoi
         }

        // hien thi cac link lien ket trang

         ?>
         
       </table>
       <script type="text/javascript">
        function phantrangajax(trang) {
          $.ajax({
            type:"GET",
            url:"xem_sanpham.php",
            data: {"pages":trang}
          }).done(function(data){
            $(".right").html(data);
          })
        }
      </script>
    </table>
    <center><ul class="pagination paging">
      <li class="page-item"><?php echo $first ?></li>
      <li class="page-item"><?php echo $prev ?></li>
      <li class="page-item"><?php echo $nav ?></li>
      <li class="page-item"><?php echo $next ?></li>
      <li class="page-item"><?php echo $last ?></li>
    </ul></center>
  