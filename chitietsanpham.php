<?php
include_once './KetNoiDB/access.php';
function getCTSP(){
    if($_GET["MaSP"])
        $result = getChiTietSanPham($_GET["MaSP"]);
    while ($row = mysqli_fetch_array($result)) {
       echo '<div class="chitietsp">
            <div class="gallery">
                <div>
                    <img class="img-responsive img" src="'.$row["hinhanh"].'">
                    <div class="masp">Mã sản phẩm :'.$row["MaSP"].'</div>
                     <div class="masp">Tên sản phẩm :'.$row["TenSP"].'</div>
                    <div class="mancc">Mã nhà cung cấp :'.$row["MaNCC"].'</div>
                    <div class="theloai">Thể loại :'.$row["TheLoai"].'</div>
                     <div class="cauhinh">Cấu hình :'.$row["CauHinh"].'</div>
                      <div class="theloai">Dung lượng :'.$row["DungLuong"].'</div>
                    <div><button type="button" class="btn btn-outline-success btnthemgiochitiet" onclick=ajax("' . $row["MaSP"] . '");>Thêm vào giỏ<i class="fa fa-shopping-cart"></i></button></div>
                </div>
            </div>
            <div>Mô tả: '.$row["mota"].'</div>
        </div>';
    } 
}
getCTSP();
?>