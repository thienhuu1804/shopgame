<?php

echo '<div class="container">
		<div class="row">
			<div class="col-sm-3 left">
				<li><img src="img/anh1.PNG" class="img-responsive center-block" alt="anh1"></li>
				<li><img src="img/anh2.PNG" class="img-responsive center-block" alt="anh2"></li>
				<li><img src="img/anh3.PNG" class="img-responsive center-block" alt="anh3"></li>
				<li><img src="img/anh4.PNG" class="img-responsive center-block" alt="anh4"></li>
			</div>
			<div class="col-sm-9 right">
				<!--Slideshow-->
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
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
				</div> <!--end slideshow-->
				<nav class="navbar navbar-inverse">					
					<ul class="nav navbar-nav menu">
						<li><a href="?page=noibat">Nổi bật</a></li>
						<li><a href="#">Bán chạy</a></li>
						<li><a href="#">Origin</a></li>
						<li><a href="#">Battle.net</a></li>
						<li><a href="#">Khuyến mãi</a></li>
					</ul>	
				</nav>';
if (isset($_GET["page"])) {
    $page = $_GET['page'];
    if ($page == "dangki")
        include "dangkitaikhoan.php";
    if ($_GET["lastname"] && $_GET["firstname"] && $_GET["email"] && $_GET["pass"] && $_GET["diachi"] && $_GET["gioi-tinh"]) {

        header("Location: index.php?page=home");
    }
    if ($page == "dangnhap")
        include "dangnhap.php";
    if ($page == "timkiem")
        include 'timkiem.php';
    if ($page == "khachhangvip")
        include 'khachhangvip.php';
    if ($page == "lienhe")
        include 'lienhe.php';
    if ($page == "giohang")
        include 'addtocart.php';
    if ($page == "product")
        include_once 'chitietsanpham.php';
    else if ($page == "home") {
        showAllSanPham();
    }
} else {
    $page = "";
    showAllSanPham();
}
