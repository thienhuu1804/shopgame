<?php
$sl=0;
if(!empty($_SESSION['cart'])){
	foreach ($_SESSION['cart'] as $key => $value) {
	$sl=$sl+$_SESSION['cart'][$key]['sl'];
    }
}
echo '<div class="container-fluid">
		<div class = "jumbotron jumbotron-fluid text-center header">
			<div class="row">
				<div class = "col-sm-4 col-md-4 col-lg-4 logo">
					<img src="img/logo.jpg" class="img-responsive center-block">
				</div>
				<div class = "col-sm-4 col-md-4 col-lg-4">
					<form class="navbar-form navbar-center timkiem" action="" method = "GET">
						<div class="input-group">
                                                    <input type="text" style="display:none" name="page" value="timkiem">
                                                    <input type="text" class="form-control" placeholder="Tìm kiếm..." name="TenSP">
                                                    <div class="input-group-btn">
                                                        <button class="btn btn-default" type="submit">
                                                            <i class="glyphicon glyphicon-search"></i>
                                                        </button>
                                                    </div>
						</div>
					</form>
				</div>';
if(!isset($_SESSION["tendangnhap"])){
    echo			'<div class = "col-sm-3 col-md-3 col-lg-3 ">
					<ul class="nav navbar-nav navbar-left">
						<li><a href="?page=dangki"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
						<li><a href="?page=dangnhap"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
						    <div class = "col-sm-1 col-md-1 col-lg-1">
						<li><a href="?page=giohang"><i class="fa fa-shopping-cart cart"><span class="badge badge-secondary" >'.$sl.'</span></i></a></li>
						</div>
					</ul>
				</div>';
}else{
     echo			"<div class = 'col-sm-3 col-md-3 col-lg-3 '>
					<ul class='nav navbar-nav navbar-left'>
						<li><a href='?page=thongtinkhachhang'><span class='glyphicon glyphicon-user' style='font-size:150%;' ></span><span style='font-size:120%;'>Xin chào ".$_SESSION["tendangnhap"]."</span> </a></li>
						<li><p onclick='dangxuat();'><span class='glyphicon glyphicon-log-in'></span> Đăng xuất</p></li>    
                                                <div class = 'col-sm-1 col-md-1 col-lg-1'>
						<li><a href='?page=giohang'><i class='fa fa-shopping-cart cart'><span class='badge badge-secondary' >$sl</span></i></a></li>
						</div>
					</ul>
				</div>";
}
echo			'</div>
		</div>
	</div>
	<div class="container-fluid">
		<nav class="navbar navbar-inverse">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <!-- Thu các thẻ li vào 1 button -->
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li><a href="?page=home"><span class="glyphicon glyphicon-home"> HOME</span></a></li>
					<li><a href="#">Steam</a></li>
					<li><a href="#">Origin</a></li>
					<li><a href="#">PUBG</a></li>
					<li><a href="#">Steam Wallet</a></li>
					<li><a href="#">Đại lý mua trực tiếp</a></li>
					<li><a href="#">Thông tin</a></li>
				</ul>	
			</div>
		</nav>
	</div>';
if(isset($_GET["logout"])){
    unset($_SESSION["tendangnhap"]);
    echo "<script> window.location.href='index.php';  </script>";
}
?>

