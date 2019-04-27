-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 23, 2019 lúc 06:49 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopgame`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MaHD` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MaSP` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TenSP` text COLLATE utf8_unicode_ci NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`MaHD`, `MaSP`, `TenSP`, `SoLuong`, `DonGia`) VALUES
('HD01', 'SP01', 'Liên Minh Huyền Thoại', 5, 500000),
('HD02', 'SP02', 'FreeFire', 3, 150000),
('HD03', 'SP03', 'Liên Quân Mobie', 4, 400000),
('HD04', 'SP04', 'PUBG', 6, 240000),
('HD05', 'SP05', 'Avatar', 25, 250000),
('HD06', 'SP06', 'Army', 6, 300000),
('HD07', 'SP07', 'Đột kích', 21, 630000),
('HD08', 'SP08', 'Hay Day', 4, 100000),
('HD09', 'SP09', 'Vương Giả Vinh Diệu', 4, 800000),
('HD10', 'SP10', 'FiFa Online', 3, 300000),
('HD11', 'SP11', 'Alien Shooter', 3, 120000),
('HD12', 'SP12', 'Dota', 10, 1000000),
('HD13', 'SP13', 'Búp Bê Thay Đồ', 3, 390000),
('HD14', 'SP14', 'Pikachu', 2, 100000),
('HD15', 'SP15', 'Đào Vàng', 3, 60000),
('HD16', 'SP16', '7 Viên Ngọc Rồng', 4, 400000),
('HD17', 'SP17', 'Ai là triệu phú', 4, 300000),
('HD18', 'SP18', 'Lái máy bay', 3, 90000),
('HD19', 'SP19', 'Đua mô tô', 5, 500000),
('HD20', 'SP20', 'Ngôi Sao Thời Trang', 1, 500000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietphieunhap`
--

CREATE TABLE `chitietphieunhap` (
  `MaPN` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MaSP` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `SoLuong` int(10) UNSIGNED NOT NULL,
  `DonGia` float UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietphieunhap`
--

INSERT INTO `chitietphieunhap` (`MaPN`, `MaSP`, `SoLuong`, `DonGia`) VALUES
('PN01', 'SP01', 3, 200000),
('PN02', 'SP02', 3, 600000),
('PN03', 'SP03', 5, 400000),
('PN04', 'SP04', 3, 120000),
('PN05', 'SP05', 23, 230000),
('PN06', 'SP06', 6, 300000),
('PN07', 'SP07', 30, 900000),
('PN08', 'SP08', 20, 500000),
('PN09', 'SP09', 5, 1000000),
('PN10', 'SP10', 6, 600000),
('PN11', 'SP11', 15, 600000),
('PN12', 'SP12', 50, 2000000),
('PN13', 'SP13', 5, 650000),
('PN14', 'SP14', 4, 200000),
('PN15', 'SP15', 5, 100000),
('PN16', 'SP16', 7, 700000),
('PN17', 'SP17', 10, 600000),
('PN18', 'SP18', 5, 150000),
('PN19', 'SP19', 8, 800000),
('PN20', 'SP20', 2, 1000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietsanpham`
--

CREATE TABLE `chitietsanpham` (
  `MaSP` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MaNCC` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TheLoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  `CauHinh` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `DungLuong` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietsanpham`
--

INSERT INTO `chitietsanpham` (`MaSP`, `MaNCC`, `TheLoai`, `mota`, `CauHinh`, `DungLuong`) VALUES
('SP01', 'NCC01', 'Game đồng đội', '', 'Cao', '4GB'),
('SP02', 'NCC01', 'Game sinh tồn', '', 'Vừa', '500MB'),
('SP03', 'NCC01', 'Game đồng đội', '', 'Cao', '800MB'),
('SP04', 'NCC01', 'Game sinh tồn', '', 'Cao', '2GB'),
('SP05', 'NCC04', 'Game nông trại', '', 'Thấp', '500KB'),
('SP06', 'NCC04', 'Game bắn súng', '', 'Thấp', '700KB'),
('SP07', 'NCC04', 'Game bắn súng', '', 'Cao', '2GB'),
('SP08', 'NCC04', 'Game nông trại', '', 'Vừa', '1GB'),
('SP09', 'NCC02', 'Game đồng đội', '', 'Cao', '2GB'),
('SP10', 'NCC02', 'Game thể thao', '', 'Cao', '3GB'),
('SP11', 'NCC03', 'Game bắn súng', '', 'Cao', '2GB'),
('SP12', 'NCC03', 'Game chiến thuật', '', 'Cao', '2GB'),
('SP13', 'NCC03', 'Game thiếu nhi', '', 'Vừa', '1GB'),
('SP14', 'NCC03', 'Game thiếu nhi', '', 'Vừa', '300MB'),
('SP15', 'NCC03', 'Game vui', '', 'Vừa', '300MB'),
('SP16', 'NCC02', 'Game vui', '', 'Vừa', '500MB'),
('SP17', 'NCC02', 'Game vui', '', 'Vừa', '600MB'),
('SP18', 'NCC03', 'Game vui', '', 'Thấp', '100MB'),
('SP19', 'NCC03', 'Game vui', '', 'Vừa', '2GB'),
('SP20', 'NCC04', 'Game thiếu nhi', '', 'Thấp', '1GB');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MaAD` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MaTV` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `NgayLap` date NOT NULL,
  `GioLap` time NOT NULL,
  `TongTien` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `MaAD`, `MaTV`, `NgayLap`, `GioLap`, `TongTien`) VALUES
('HD01', 'AD01', 'TV01', '2019-04-02', '09:00:00', 500000),
('HD02', 'AD02', 'TV02', '2019-04-02', '08:30:00', 150000),
('HD03', 'AD03', 'TV03', '2019-04-05', '11:00:00', 400000),
('HD04', 'AD03', 'TV04', '2019-04-04', '13:00:00', 240000),
('HD05', 'AD02', 'TV05', '2019-04-05', '08:00:00', 250000),
('HD06', 'AD01', 'TV06', '2019-04-05', '16:00:00', 300000),
('HD07', 'AD03', 'TV07', '2019-04-05', '08:00:00', 630000),
('HD08', 'AD02', 'TV08', '2019-04-05', '08:30:00', 100000),
('HD09', 'AD01', 'TV09', '2019-04-07', '08:30:00', 800000),
('HD10', 'AD02', 'TV10', '2019-04-09', '08:30:00', 300000),
('HD11', 'AD03', 'TV11', '2019-04-14', '14:00:00', 120000),
('HD12', 'AD01', 'TV12', '2019-04-07', '15:00:00', 1000000),
('HD13', 'AD02', 'TV13', '0000-00-00', '00:00:00', 390000),
('HD14', 'AD01', 'TV14', '2019-04-08', '09:00:00', 100000),
('HD15', 'AD02', 'TV15', '2019-04-10', '15:00:00', 60000),
('HD16', 'AD03', 'TV16', '2019-04-15', '10:00:00', 500000),
('HD17', 'AD01', 'TV01', '2019-04-18', '09:00:00', 300000),
('HD18', 'AD03', 'TV02', '2019-04-15', '15:00:00', 90000),
('HD19', 'AD01', 'TV03', '2019-04-16', '14:00:00', 500000),
('HD20', 'AD01', 'TV05', '2019-04-22', '09:00:00', 500000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `MaNCC` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TenNCC` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`MaNCC`, `TenNCC`, `DiaChi`, `SDT`) VALUES
('NCC01', 'Garena', 'Quận 1-TPHCM', '0123456789'),
('NCC02', 'TiMi', 'Ba Đình - Hà Nội', '0398888888'),
('NCC03', 'Rockstar North', 'Quận 9 - TP HCM', '0396543210'),
('NCC04', 'Gamemb', 'Quận 2 - TPHCM', '0395555555');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieunhap`
--

CREATE TABLE `phieunhap` (
  `MaPN` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MaNCC` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MaAD` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `NgayNhap` date NOT NULL,
  `GioNhap` time NOT NULL,
  `TongTien` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phieunhap`
--

INSERT INTO `phieunhap` (`MaPN`, `MaNCC`, `MaAD`, `NgayNhap`, `GioNhap`, `TongTien`) VALUES
('PN01', 'NCC01', 'AD01', '2019-04-01', '07:00:00', 600000),
('PN02', 'NCC01', 'AD02', '2019-04-02', '08:00:00', 200000),
('PN03', 'NCC01', 'AD03', '2019-04-03', '14:00:00', 320000),
('PN04', 'NCC04', 'AD03', '2019-04-04', '12:00:00', 120000),
('PN05', 'NCC04', 'AD02', '2019-04-04', '11:00:00', 230000),
('PN06', 'NCC04', 'AD01', '2019-04-05', '09:00:00', 600000),
('PN07', 'NCC04', 'AD03', '2019-04-06', '11:00:00', 900000),
('PN08', 'NCC04', 'AD02', '2019-04-05', '14:00:00', 500000),
('PN09', 'NCC02', 'AD01', '2019-04-06', '09:30:00', 1000000),
('PN10', 'NCC02', 'AD02', '2019-04-07', '10:00:00', 600000),
('PN11', 'NCC03', 'AD03', '2019-04-13', '15:00:00', 600000),
('PN12', 'NCC03', 'AD01', '2019-04-07', '15:00:00', 2000000),
('PN13', 'NCC03', 'AD02', '2019-04-08', '09:00:00', 650000),
('PN14', 'NCC03', 'AD01', '2019-04-08', '07:00:00', 200000),
('PN15', 'NCC03', 'AD02', '2019-04-09', '10:00:00', 100000),
('PN16', 'NCC02', 'AD03', '2019-04-15', '08:30:00', 700000),
('PN17', 'NCC02', 'AD01', '2019-04-18', '15:00:00', 600000),
('PN18', 'NCC03', 'AD03', '2019-04-17', '14:00:00', 150000),
('PN19', 'NCC03', 'AD01', '2019-04-16', '10:00:00', 800000),
('PN20', 'NCC04', 'AD01', '2019-04-17', '10:00:00', 1000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quantri`
--

CREATE TABLE `quantri` (
  `MaAD` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TenAD` text COLLATE utf8_unicode_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `DiaChi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quantri`
--

INSERT INTO `quantri` (`MaAD`, `TenAD`, `NgaySinh`, `DiaChi`, `SDT`) VALUES
('AD01', 'Trịnh Đức Hiếu', '1999-11-12', 'Thanh Chương-Nghệ An', '0368117453'),
('AD02', 'Nguyễn Thiên Hữu', '1999-03-09', 'Tân Bình - TPHCM', '0985232654'),
('AD03', 'Đỗ Phát Sơn Huy', '1999-05-20', 'Bình Thạnh - TPHCM', '0965422211');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TenSP` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DonGia` float NOT NULL,
  `SoLuong` int(10) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `hinhanh`, `DonGia`, `SoLuong`) VALUES
('SP01', 'Liên Minh Huyền Thoại', 'img/sanpham/lmht.jpg\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 500000, 5),
('SP02', 'FreeFire', 'img/sanpham/freefire.jpg\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 250000, 5),
('SP03', 'Liên Quân Mobie ', 'img/sanpham/lqmb.jpg\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 800000, 8),
('SP04', 'PUBG', 'img/sanpham/pubg.jpg', 400000, 10),
('SP05', 'Avatar', 'img/sanpham/avatar.jpg', 700000, 70),
('SP06', 'Army', 'img/sanpham/army.png', 600000, 12),
('SP07', 'Đột kích', 'img/sanpham/dotkick.jpg', 900000, 30),
('SP08', 'Hay Day', 'img/sanpham/hayday.jpg', 500000, 20),
('SP09', 'Vương Giả Vinh Diệu', 'img/sanpham/vgvd.jpg', 1000000, 5),
('SP10', 'FiFa Online', 'img/sanpham/ffol.jpg', 600000, 6),
('SP11', 'Alien Shooter', 'img/sanpham/alien.jpg', 600000, 15),
('SP12', 'Dota', 'img/sanpham/dota.jpg', 2000000, 50),
('SP13', 'Búp Bê Thay Đồ', 'img/sanpham/bbtd.png', 650000, 5),
('SP14', 'Pikachu', 'img/sanpham/pikachu.jpg', 200000, 4),
('SP15', 'Đào Vàng', 'img/sanpham/daovang.jpg', 100000, 5),
('SP16', '7 Viên Ngọc Rồng', 'img/sanpham/ngocrong.jpg', 700000, 7),
('SP17', 'Ai là triệu phú', 'img/sanpham/trieuphu.jpg', 600000, 10),
('SP18', 'Lái Máy Bay', 'img/sanpham/maybay.jpg', 150000, 5),
('SP19', 'Đua mô tô', 'img/sanpham/moto.jpg', 800000, 8),
('SP20', 'Ngôi Sao Thời Trang', 'img/sanpham/nstt.jpg', 10000000, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `MaTV` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `TenTV` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Gmail` text COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`MaTV`, `TenTV`, `Gmail`, `DiaChi`) VALUES
('TV01', 'Nguyễn Thành Nam', 'nam@gmail.com', 'Quận 5 - TPHCM'),
('TV02', 'Khá Bảnh', 'banh@gmail.com', 'Gò Vấp - Hà Nội'),
('TV03', 'Triệu Vân', 'van@gmail.com', 'Đức Trọng - Lâm Đồng'),
('TV04', 'Tôn Hành Giả', 'gia@gmail.com', ' Nam Đàn - Nghệ An'),
('TV05', 'Trư Bát Giới', 'heo@gmail.com', 'Tây Tạng - Trung Hoa'),
('TV06', 'Sa Tăng', 'sa@gmail.com', 'Thủ Dầu Một - TP HCM'),
('TV07', 'Lữ Bố', 'lubo@gmail.com', 'Đô Lương - Nghệ An'),
('TV08', 'Triệu Tử Long', 'long@gmail.com', 'Tam Kì - Quảng Nam'),
('TV09', 'Nguyễn Thiên Hào', 'thienhao@gmail.com', 'Gò Vấp - TP HCM'),
('TV10', 'Nguyễn Tiến Đạt', 'dat@gmail.com', 'Quận 2 - TP HCM'),
('TV11', 'Nguyên Tiến Đồng', 'dong@gmail.com', 'Long Khánh - Đồng Nai'),
('TV12', 'Bao Thanh Thiên', 'thien@gmail.com', 'Đồng Hới - Quảng Bình'),
('TV13', 'Dương Quá', 'qua@gmail.com', 'Long Thành - Đồng Nai'),
('TV14', 'Nguyễn Ngọc Nhi', 'nhi@gmail.com', 'Quận 5 - TP HCM'),
('TV15', 'Nguyễn Ngọc Khuê', 'khue@gmail.com', 'Lagi - Bình Thuận'),
('TV16', 'Cô Cô', 'coco@gmail.com', 'Trường Sa - Khánh Hòa');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD KEY `MaSP` (`MaSP`) USING BTREE,
  ADD KEY `MaHD` (`MaHD`) USING BTREE;

--
-- Chỉ mục cho bảng `chitietphieunhap`
--
ALTER TABLE `chitietphieunhap`
  ADD KEY `MaSP` (`MaSP`),
  ADD KEY `MaPN` (`MaPN`);

--
-- Chỉ mục cho bảng `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  ADD KEY `MaNCC` (`MaNCC`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `MaNV` (`MaAD`),
  ADD KEY `MaKH` (`MaTV`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`MaNCC`);

--
-- Chỉ mục cho bảng `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD PRIMARY KEY (`MaPN`),
  ADD KEY `MaNCC` (`MaNCC`),
  ADD KEY `MaNV` (`MaAD`);

--
-- Chỉ mục cho bảng `quantri`
--
ALTER TABLE `quantri`
  ADD PRIMARY KEY (`MaAD`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`);

--
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`MaTV`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`) ON UPDATE CASCADE,
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chitietphieunhap`
--
ALTER TABLE `chitietphieunhap`
  ADD CONSTRAINT `chitietphieunhap_ibfk_2` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietphieunhap_ibfk_3` FOREIGN KEY (`MaPN`) REFERENCES `phieunhap` (`MaPN`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  ADD CONSTRAINT `chitietsanpham_ibfk_1` FOREIGN KEY (`MaNCC`) REFERENCES `nhacungcap` (`MaNCC`),
  ADD CONSTRAINT `chitietsanpham_ibfk_2` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MaTV`) REFERENCES `thanhvien` (`MaTV`) ON UPDATE CASCADE,
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`MaAD`) REFERENCES `quantri` (`MaAD`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD CONSTRAINT `phieunhap_ibfk_1` FOREIGN KEY (`MaNCC`) REFERENCES `nhacungcap` (`MaNCC`) ON UPDATE CASCADE,
  ADD CONSTRAINT `phieunhap_ibfk_2` FOREIGN KEY (`MaAD`) REFERENCES `quantri` (`MaAD`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
