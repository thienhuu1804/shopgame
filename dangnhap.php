<?php

echo '<h2>Đăng nhập tài khoản</h2>
<form method="" action="" name="formdangnhap" class="formdn" >
    <input type="hidden" name="page" value="dangnhap"></input>
  <div class="imgcontainer">
    <img src="img/user.jpg" alt="Avatar" class="avatar">
  </div>

    <label for="uname"><b>Tên đăng nhập</b></label>
    <input type="text" placeholder="Tên đăng nhập..." name="uname" required>

    <label for="psw"><b>Mật khẩu</b></label>
    <input type="password" placeholder="Mật khẩu..." name="psw" required>
        
    <button type="submit">Đăng nhập</button>
</form>
';
if (isset($_GET["uname"]) && isset($_GET["psw"])) {
    $resultTaiKhoan = checkTaiKhoan($_GET["uname"], $_GET["psw"]);
    if ($row = mysqli_fetch_array($resultTaiKhoan)) {
        echo "<script> alert('Đăng nhập thành công'); </script>";
        $_SESSION["tendangnhap"] = $row["TenDangNhap"];
        $resultAdmin = checkAdmin($row["TenDangNhap"]);
        if (mysqli_fetch_array($resultAdmin)) {
            echo "<script> if (typeof (Storage) !== 'undefined') {
                        sessionStorage.setItem('tendangnhap','" . $_SESSION["tendangnhap"] . "');
                        window.location.href='admin/index.php';
                        } </script>";
        } else {
            echo "<script> if (typeof (Storage) !== 'undefined') {
                        sessionStorage.setItem('tendangnhap','" . $_SESSION["tendangnhap"] . "');
                        window.location.href='index.php';
                        } </script>";
        }
    } else {
        echo "<script> alert('Thông tin đăng nhập không chính xác'); </script>";
        echo "<script> document.forms['formdangnhap']['uname'].value ='" . $_GET["uname"] . "'; </script>";
        echo "<script> document.forms['formdangnhap']['psw'].value ='" . $_GET["psw"] . "'; </script>";
    }
}
?>