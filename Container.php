<?php

if (isset($_GET["page"])) {
    $page = $_GET['page'];
} else {
    $page = "home";
}
echo '<div class="container">
		<div class="row">
			<div class="col-sm-3 left">
				<li><a href="?page=napthe"><img src="img/anh1.PNG" class="img-responsive center-block" alt="anh1"></a></li>
				<li><a href="?page=lienhe"><img src="img/anh2.PNG" class="img-responsive center-block" alt="anh2"></a></li>
				<li><a href="?page=khachhangvip"><img src="img/anh3.PNG" class="img-responsive center-block" alt="anh3"></a></li>
				<li><a href="https://www.youtube.com/watch?v=lvyPzTh8agI&list=PLlh2tpWKa6tHocKmpqBg_m85mq6P-pqks&index=3"><img src="img/anh4.PNG" class="img-responsive center-block" alt="anh4"></a></li>
			</div>
			<div class="col-sm-9 right">
				<!--Slideshow-->';
if ($page == "home")
    echo '<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<img src="img/slideshow/anh1.jpg" alt="Anh1">
						</div>
						<div class="item">
							<img src="img/slideshow/anh2.jpg" alt="Anh2">
						</div>
						<div class="item">
							<img src="img/slideshow/anh3.jpg" alt="Anh3">
						</div>
					</div>
					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>';
'<!--end slideshow-->
				<nav class="navbar navbar-inverse">					
					<ul class="nav navbar-nav menu">
						<li><a href="?page=noibat">Nổi bật</a></li>
						<li><a href="#">Bán chạy</a></li>
						<li><a href="#">Origin</a></li>
						<li><a href="#">Battle.net</a></li>
						<li><a href="#">Khuyến mãi</a></li>
					</ul>	
				</nav>';

if ($page == "dangki")
    include "dangkitaikhoan.php";
else if ($page == "dangnhap")
    include "dangnhap.php";
else if ($page == "timkiem")
    include 'timkiem.php';
else if ($page == "lienhe")
    include 'lienhe.php';
else if ($page == "giohang")
    include 'addtocart.php';
else if ($page == "product")
    include_once 'chitietsanpham.php';
else if ($page == "khachhangvip")
    include 'khachhangvip.php';
else if ($page == "napthe")
    include 'napthe.php';
else{
    $page == "home";
    showAllSanPham();
}
if (isset($_GET["mota"])) {
    $mota = "";
    addMoTa($_GET["masp"], $mota);
}
