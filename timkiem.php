<?php
	include 'access.php';
	$TenSP = " ";
	if (isset($_GET['TenSP']))
    $result = getSPTheoTen($TenSP);
    if ($result)
    while ($row = mysqli_fetch_array($result)) {
        echo "<div class='responsive'>
            <div class='gallery'>
                <div>
                    <img class='img-responsive img' src=".$row["hinhanh"].">
                    <div class='title'>".$row["TenSP"]."</div>
                    <div class='price'>"."Giá : ".$row["DonGia"]." vnđ"."</div>
                    <div class='amount'>"."Số lượng : ".$row["SoLuong"]."</div>
                    <div><button type='button' class='btn btn-outline-success btnthemgio'>Thêm vào giỏ<i class='fa fa-shopping-cart'></i></button></div>
                </div>
            </div>
        </div>";
	    }
?>