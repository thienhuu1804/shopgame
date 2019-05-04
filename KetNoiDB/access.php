<?php

include_once 'connection.php';

function sqlQuery($sql) {
    $con = ketnoidb("localhost", "root", "", "shopgame");
    mysqli_set_charset($con, 'UTF8');
    $result = mysqli_query($con, $sql);
    if ($result) {
        return $result;
    } else {
        echo mysqli_error($con);
        
        return 0;
    }
}

//function addTaiKhoan($tenDangNhap,){
//    
//}

function getAllSanPham() {
    $sql = "SELECT * FROM sanpham";
    return sqlQuery($sql);
}

function getSPTheoTen($TenSP) {
    $sql = "SELECT * FROM sanpham WHERE TenSP LIKE '%" . $TenSP . "%'";
    return sqlQuery($sql);
}

function updateSoLuongSanPham($maSP, $soLuong) {
    $sql = "UPDATE sanpham SET SoLuong='" . $soLuong . "' WHERE MaSP='" . $maSP . "';";
    return sqlQuery($sql);
}

function addSanPham($maSP, $tenSP, $hinhAnh, $soLuong, $gia) {
    $sql = "INSERT INTO sanpham(MaSP,TenSP,mota,hinhanh,DonGia,SoLuong) VALUES ('" . $maSP . "','" . $tenSP . "','" . $hinhAnh . "','" . $soLuong . "','" . $gia . "');";
    return sqlQuery($sql);
}

function getChiTietSanPham($MaSP) {
    $sql = "SELECT * FROM chitietsanpham ctsp,sanpham WHERE ctsp.MaSP = sanpham.MaSP AND ctsp.MaSP = '$MaSP'";
    return sqlQuery($sql);
}

/*
  function getChiTietSanPham ($MaSP)
  {
  $sql = "SELECT sanpham.hinhanh,sanpham.TenSP,ctsp.MaSP,sp.DonGia,ctsp.MaNCC,ctsp.TheLoai,ctsp.mota,ctsp.CauHinh,ctsp.DungLuong FROM chitietsanpham ctsp,sanpham WHERE ctsp.MaSP = sanpham.MaSP AND ctsp.MaSP = '$MaSP'";
  return sqlQuery($sql);
  } */

function getToTal($MaSP) {
    $sql = "SELECT count (MaSP) as ToTal FROM sanpham";
    return sqlQuery($sql);
}

function updateSanPham($maSP, $tenSP, $moTa, $hinhAnh, $soLuong, $gia) {
    $sql = "UPDATE sanpham SET TenSP='" . $tenSP . "',HinhAnh='" . $hinhAnh . "',SoLuong='" . $soLuong . "',DonGia='" . $gia . "' WHERE MaSP='" . $maSP . "';";
}

function addMoTa($masp, $mota) {
    $sql = "UPDATE ChiTietSanPham SET mota='" . $mota . "' WHERE MaSP='" . $masp . "';";
    return sqlQuery($sql);
}
