<!DOCTYPE html>
<html>
<head>

    <title>Shop game</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/formdangnhap.css">
    <link rel="stylesheet" type="text/css" href="css/dangkytaikhoan.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/cart.css">
    <script type="text/javascript" src="javascript/js.js"></script>
    <script type="text/javascript" src="javascript/giohang.js"></script>
    <style type="text/css">
    input[type=number]::-webkit-inner-spin-button, 
    input[type=number]::-webkit-outer-spin-button { 
      -webkit-appearance: none; 
      margin: 0; 
  }
</style>
<?php
session_start();
if (isset($_GET['page'])) {
    if ($_GET['page'] == 'giohang' || $_GET['page'] == 'product') {
        echo' <script type="text/javascript">
        $(function(){
            $(`#myCarousel`).hide();
            $(`#navbar2`).hide();
            });
            </script>';
        }
    }
    ?>
    <style type="text/css">
    table{
        color: #337ab7;
    }
    th,td{
        text-align: center;
    }
    #itemAmount {
        text-align: center;
        max-width: 40px;
        padding: 5px;
        border-radius: 5px;
        border: none;
    }

    .Tang {
        /*padding: 10px;*/
        border-radius: 50%;
        border: none;
        width: 30px;
        height: 30px;
        line-height: 30px;
        font-weight: bold;
        font-size: 20px;
        color: #555;
    }

    .Tang:hover {
        background-color: #21a521;
        color: #fff;
    }
    .Giam {
        /*padding: 10px;*/
        border-radius: 50%;
        border: none;
        width: 30px;
        height: 30px;
        line-height: 30px;
        font-weight: bold;
        font-size: 20px;
        color: #555;
    }
    .Giam:hover {
        background-color: red;
        color: #fff;
    }
</style>
</head>
<body>
    <?php
    include 'KetNoiDB/access.php';

    function showAllSanPham() {
        $rowsPerPage = 8;
        $pageNum = 1;
        if(isset($_GET['page'])){
          $pageNum = $_GET['page'];
      }
      $offset = ($pageNum - 1) * $rowsPerPage;
      $sql = "SELECT * FROM sanpham LIMIT $offset, $rowsPerPage";
      $result = getAllSanPhamPhanTrang($sql);
      while ($row = mysqli_fetch_array($result)){
          echo'   <div class="responsive">
          <a href ="index.php?page=product&MaSP=' . $row["MaSP"] . '">
          <div class="gallery">
          <div>
          <img class="img-responsive img" src="' . $row["hinhanh"] . '">
          <div class="title">' . $row["TenSP"] . '</div>
          <div class="price">Giá : ' . $row["DonGia"] . ' vnđ</div>
          <div class="amount">Số lượng : ' . $row["SoLuong"] . '</div></a>
          <input type="hidden" name="masp" value="' . $row["MaSP"] . '">
          <div><button type="button" class="btn btn-outline-success btnthemgio" onclick=ajax("' . $row["MaSP"] . '");>Thêm vào giỏ<i class="fa fa-shopping-cart"></i></button></div>
          </div>
          </div>
          </div>';
      }
      $sql   = "SELECT COUNT(*) AS numrows FROM sanpham";
      $result = getAllSanPhamPhanTrang($sql);
      $row     = mysqli_fetch_array($result);
      $numrows = $row['numrows'];
      $maxPage = ceil($numrows/$rowsPerPage);
      $self = "pagingbooks.php";
      $nav  = '';
      for($page = 1; $page <= $maxPage; $page++)
      {
       if ($page == $pageNum)
       {
      $nav .= " $page "; // khong can tao link cho trang hien hanh
  }
  else
  {
      $nav .= " <a href=\"?page=$page\">$page</a> ";
  }
}
        // tao lien ket den trang truoc & trang sau, trang dau, trang cuoi
if ($pageNum > 1)
{
 $page  = $pageNum - 1;
 $prev  = " <a href=\"?page=$page\">[Trang trước]</a> ";

 $first = " <a href=\"?page=1\">[Trang đầu]</a> ";
}
else
{
           $prev  = '&nbsp;'; // dang o trang 1, khong can in lien ket trang truoc
           $first = '&nbsp;'; // va lien ket trang dau
       }
       if ($pageNum < $maxPage)
       {
         $page = $pageNum + 1;
         $next = " <a href=\"?page=$page\">[Trang kế]</a> ";
         $last = " <a href=\"?page=$maxPage\">[Trang cuối]</a> ";
     }
     else
     {
           $next = '&nbsp;'; // dang o trang cuoi, khong can in lien ket trang ke
           $last = '&nbsp;'; // va lien ket trang cuoi
       }

        // hien thi cac link lien ket trang
       echo "<center>". $first . $prev . $nav . $next . $last . "</center>";
   }

   include_once 'Header.php';
   include_once 'Container.php';
   include_once 'Footer.php';
   ?>
</body>
</html>