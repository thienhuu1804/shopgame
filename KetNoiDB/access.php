<?php

include_once 'connection.php';

function sqlQuery($sql) {
    $con = ketnoidb("localhost", "root", "", "shopgame");
    mysqli_set_charset($con, 'UTF8');
    $result = mysqli_query($con, $sql);
//    mysqli_close($con);
    if ($result) {
        mysqli_close($con);
        return $result;
    } else {
        echo mysqli_error($con);
        mysqli_close($con);
        return 0;
    }
}

function getAllSanPham() {
    $sql = "SELECT * FROM sanpham";
    return sqlQuery($sql);
}

function getAllNcc() {
    $sql = "SELECT * FROM nhacungcap";
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

function getToTal() {
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

function deleteSanPham($masp) {
    $query = "DELETE FROM sanpham WHERE MaSP='$masp';";
    return sqlQuery($query);
}

function getAllThanhVien() {
    $sql = "SELECT * FROM thanhvien";
    return sqlQuery($sql);
}

function getTaiKhoan($tendangnhap){
    $sql= "SELECT FROM taikhoan WHERE TenDangNhap='$tendangnhap';";
    return sqlQuery($sql);
}

function checkTaiKhoan($tendangnhap,$matkhau){
    $sql= "SELECT * FROM taikhoan WHERE TenDangNhap='$tendangnhap' AND MatKhau='$matkhau' ;";
    return sqlQuery($sql);
}

function addTaiKhoan($tendangnhap,$matkhau){
    $sql = "INSERT INTO taikhoan VALUES ('$tendangnhap','$matkhau');";
    return sqlQuery($sql);
}

function deleteTaiKhoan($tendangnhap){
    $sql = "DELETE FROM taikhoan WHERE TenDangNhap='$$tendangnhap'";
    return sqlQuery($sql);
}

function checkAdmin($tendangnhap){
    $sql = "SELECT * FROM quantri WHERE TenDangNhap='$tendangnhap';";
    return sqlQuery($sql);
}

function addThanhVien($matv,$tentv,$gmail,$diachi,$tendangnhap) {
    $sql = "INSERT INTO thanhvien VALUES ('" . $matv . "','" . $tentv . "','" . $gmail . "','" . $diachi . "','" . $tendangnhap . "','0');";
    return sqlQuery($sql);
}

