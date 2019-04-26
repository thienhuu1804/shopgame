<?php
include_once 'connection.php';
function sqlQuery($sql) {
    $con = ketnoidb("localhost", "root", "", "shopgame");
    mysqli_set_charset($con, 'UTF8');
    $result = mysqli_query($con, $sql);
    if ($result) {
        return $result;
    } else {
        echo 'Du lieu rong';
        return 0;
    }
}
function getAllSanPham()
{
    $sql= "SELECT * FROM sanpham";
    return sqlQuery($sql);
}
function getSPTheoTen ($TenSP)
{
    $sql= "SELECT * FROM sanpham WHERE TenSP = '$TenSP'";
    return sqlQuery ($sql);
}

function getChiTietSanPham ($MaSP)
{
    $sql = "SELECT sanpham.hinhanh,sanpham.TenSP,ctsp.MaSP,ctsp.MaNCC,ctsp.TheLoai,ctsp.mota,ctsp.CauHinh,ctsp.DungLuong FROM chitietsanpham ctsp,sanpham WHERE ctsp.MaSP = sanpham.MaSP AND ctsp.MaSP = '$MaSP'";
    return sqlQuery($sql);
}


function updateSanPham($maSP , $tenSP ,$moTa  , $hinhAnh, $soLuong , $gia){
    $sql= "UPDATE sanpham SET TenSP='".$tenSP."',HinhAnh='".$hinhAnh."',SoLuong='".$soLuong."',DonGia='".$gia."' WHERE MaSP='".$maSP."';";
}
?>