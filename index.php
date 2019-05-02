<!DOCTYPE html>
<html>
    <head>
        <title>Shop game</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/formdangnhap.css">
        <link rel="stylesheet" type="text/css" href="css/dangkytaikhoan.css">
        <link rel="stylesheet" type="text/css" href="css/home.css">
        <link rel="stylesheet" type="text/css" href="css/cart.css">
        <script src="js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="javascript/js.js"></script>
    </head>
    <body>
        <?php
        include 'KetNoiDB/access.php';

        function showAllSanPham() {
            $result = getAllSanPham();
            while ($row = mysqli_fetch_array($result)) {
                $MaSP = $row['MaSP'];

                echo "<div class='responsive'>
            <a href = 'index.php?page=product&MaSP=" . $row['MaSP'] . "'>
            <div class='gallery'>
                <div>
                    <img class='img-responsive img' src=" . $row["hinhanh"] . ">
                    <div class='title'>" . $row["TenSP"] . "</div>
                    <div class='price'>" . "Giá : " . $row["DonGia"] . " vnđ" . "</div>
                    <div class='amount'>" . "Số lượng : " . $row["SoLuong"] . "</div></a>
                    <div><button type='button' class='btn btn-outline-success btnthemgio'>Thêm vào giỏ<i class='fa fa-shopping-cart'></i></button></div>
                </div>
            </div>
        </div>";
            }
        }

        include_once 'Header.php';
        include_once 'Container.php';
        include_once 'Footer.php';
        ?>
    </body>
</html>