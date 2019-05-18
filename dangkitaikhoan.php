<?php
echo'
<div class="row">
	<form name="dk" method="GET" action="index.php" class="formdktk" onsubmit="return kiemtra();"  >
		<h2>Đăng ký tài khoản</h2>
                <input name="page" value="dangki" type="hidden" ></inout>
                <div class="form-group">
                        <label>Tên tài khoản</label>
                        <input type="text" class="form-control" placeholder="Tên đăng nhập" required name="account">
                </div>
                <div class="form-group">
			<label>Mật khẩu</label>
			<input type="password" class="form-control" placeholder="Password của bạn" required name="pass">
		</div>
		<div class="form-group">
			<div class="form-row">
				<div class="col">
					<label>Tên</label>
					<input type="text" class="form-control" placeholder="Tên của bạn" required name="lastname">
				</div>
				<div class="col">
					<label>Họ</label>
					<input type="text" class="form-control" placeholder="Họ của bạn" required name="firstname">
				</div>
			</div>
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="text" class="form-control" placeholder="Email của bạn" required name="email">
		</div>
		<div class="form-group">
			<label>Địa chỉ</label>
			<input type="text" class="form-control" placeholder="Địa chỉ của bạn" required name="diachi">
		</div>
		<div class="form-group">
			<label>Giới tính</label>	
					<label class="btn btn-outline-secondary">
						<input type="radio" name="gioi-tinh" value="Nam">Nam
					</label>
					<label class="btn btn-outline-secondary">
						<input type="radio" name="gioi-tinh" value="Nữ">Nữ
					</label>
		</div>
		<div class="form-group">
			<input type="checkbox" required name="">
			<label>Tôi đồng ý điều khoản sử dụng</label>
		</div>
		<div class="form-group">
			<button class="btn btn-success" type="submit">Gửi</button>
		</div>
	</form>	
</div>';
if (isset($_GET["account"]) && isset($_GET["lastname"]) && isset($_GET["firstname"]) && isset($_GET["email"]) && isset($_GET["pass"]) && isset($_GET["diachi"])) {
    $count = 1;
    $dstv = getAllThanhVien();
    while ($row = mysqli_fetch_array($dstv)) {
        $count++;
    }
    $resultTaiKhoan = addTaiKhoan($_GET["account"], $_GET["pass"]);
    if ($resultTaiKhoan) {
        $ho = $_GET["firstname"];
        $ten = $_GET["lastname"];
        $hoten = "$ho $ten";
        $resultThanhVien = addThanhVien("TV$count", $hoten, $_GET["email"], $_GET["diachi"], $_GET["account"]);
        echo $resultThanhVien;
        if ($resultThanhVien) {
            echo "<script> alert('Đăng kí thành công! Đang về trang chủ !'); </script>";
            echo "<script> alert('Đăng nhập thành công'); </script>";
            $_SESSION["tendangnhap"] = $_GET["account"];
            echo "<script> if (typeof (Storage) !== 'undefined') {
                        sessionStorage.setItem('tendangnhap','" . $_SESSION["tendangnhap"] . "');
                        window.location.href='index.php';
                        } </script>";
        } else {
            deleteTaiKhoan($_GET["account"]);
            echo "<script> alert('Lỗi thêm thông tin thành viên, vui lòng thử lại !'); </script>";
        }
    } else {
        echo "<script> alert('Tài khoản đã tồn tại, vui lòng chọn tên khác !'); </script>";
    }
}
else{
//    echo "<script> window.location.href='index.php?page=dangki'; </script>";
////    header("Location: index.php?page=dangki");
}
?>

