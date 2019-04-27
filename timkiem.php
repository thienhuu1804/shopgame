<?php

include_once 'KetNoiDB/access.php';
$TenSP = "";
if (isset($_GET['TenSP']))
    $result = getSPTheoTen($_GET['TenSP']);
if ($result) {
    while ($row = mysqli_fetch_array($result)) {
        echo "<div class='responsive'>
            <a href = 'index.php?page=product&MaSP=".$row['MaSP']."'>
            <div class='gallery'>
                <div>
                    <img class='img-responsive img' src=".$row["hinhanh"].">
                    <div class='title'>".$row["TenSP"]."</div>
                    <div class='price'>"."Giá : ".$row["DonGia"]." vnđ"."</div>
                    <div class='amount'>"."Số lượng : ".$row["SoLuong"]."</div></a>
                    <div><button type='button' class='btn btn-outline-success btnthemgio'>Thêm vào giỏ<i class='fa fa-shopping-cart'></i></button></div>
                </div>
            </div>
        </div>";
    }
    echo "<script>window.onload = function() {document.getElementsByClassName('gallery')[0].scrollIntoView({ block: 'start',  behavior: 'smooth' });}</script>";
}
?>