<?php
include '../KetNoiDB/access.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            tinymce.init({selector: 'textarea'});
        </script>
        <title>Inserting Product</title>
    </head>
    <?php
    $soNcc = 0;
    while ($row = mysqli_fetch_array(getAllNcc())) {
        $soNcc++;
    }
    echo '<script language="javascript">';
    echo "function checkNcc(){var x = document.getElementById('mancc'); if(x.value >$soNcc ) x.value= $soNcc;}";
    echo '</script>';
    ?>
    <body bgcolor="#18DFED">
        <form action="insert_product.php" method="post" enctype="multipart/form-data"> 

            <table align="center" width="795" border="2" bgcolor="#187eae">

                <tr align="center">
                    <td colspan="7"><h2>THÊM SẢN PHẨM</h2></td>
                </tr>
                <tr>
                    <td align="right"><b>Tên SP:</b></td>
                    <td><input type="text" name="product_title" size="60" required/></td>
                </tr>
                <tr>
                    <td align="right"><b>Hình SP:</b></td>
                    <td><input type="file" accept="image/*" name="product_image" /></td>
                </tr>

                <tr>
                    <td align="right"><b>Giá tiền:</b></td>
                    <td><input type="number" name="product_price" required/></td>
                </tr>

                <tr>
                    <td align="right"><b>Số lượng:</b></td>
                    <td><input type="number" name="product_quantity" required/></td>
                </tr>
                <tr>
                    <td align="right"><b>Ma Nha Cung Cap: ncc</b></td>
                    <td><input type="number" onkeyup="checkNcc();" name="producer_id" id="mancc" required/></td>
                </tr>
                <tr>
                    <td align="right"><b>The Loai:</b></td>
                    <td><textarea name="product_cat" cols="20" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td align="right"><b>Mô tả:</b></td>
                    <td><textarea name="product_details" cols="20" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td align="right"><b>Cau Hinh:</b></td>
                    <td><textarea name="product_req" cols="20" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td align="right"><b>Dung Luong:</b></td>
                    <td><textarea name="product_cap" cols="20" rows="10"></textarea></td>
                </tr>
                <tr align="center">
                    <td colspan="7"><input type="submit" name="insert_post" value="Thêm SP"/></td>
                </tr>

            </table>


        </form>
        <?php
        if (isset($_GET["img"])) {
            $img = $_GET["img"];
            echo "<script language='javascript'>";
            echo "console.log( '$img existed !!!');";
            echo "alert( '$img existed !!!');";
            echo "</script>";
        } else if (isset($_GET["succ"])) {
            if ($_GET["succ"] == "true")
                echo "alert( them thanh cong !!!)";
        }

        function checkIMG($product_image) {
            echo '<script language="javascript"> console.log("checkIMG");</script>';
            $product_image_tmp = $product_image;
            if (file_exists("../img/sanpham/$product_image")) {
                echo '<script language="javascript">';
                echo 'confirm("file name existed !!!")';
                echo '</script>';
                header("Location: redirect.php?page=themsp&img=$product_image");
            } else {
                move_uploaded_file($product_image_tmp, "../img/sanpham/$product_image");
            }
        }

        if (isset($_POST["insert_post"])) {
            $mancc = $_POST['producer_id'];     //them ma nha cung cap
            $theloai = $_POST['product_cat'];  //them the loai
            $mota = $_POST['product_details']; //them ma mo ta
            $cauhinh = $_POST['product_req']; //them cau hinh
            $dungluong = $_POST['product_cap']; // them dung luong
            $product_title = $_POST['product_title'];
            $product_price = $_POST['product_price'];
            $product_desc = $_POST['product_desc'];
            $product_quantity = $_POST['product_quantity'];
            $upload_dir = '../img/sanpham';
            $product_image = $_FILES['product_image']['name'];
            $product_image_tmp = $product_image;
            checkIMG($product_image);
            $maSPMoi = 1;
            while ($row = mysqli_fetch_array(getAllSanPham())) {
                $maSPMoi++;
            }
            $maSP = "SP$maSPMoi";
            $insert_product = " insert into sanpham ( MaSP,TenSp, hinhanh, dongia,soluong) values ('" . $maSP . "','" . $product_title . "','" . $product_image . "',' " . $product_price . "','" . $product_quantity . "');";
            $insert_product += "INSERT INTO chitietsanpham (MaSP,MaNCC,TheLoai,mota,CauHinh,DungLuong) VALUES (" . $maSP . "," . $mancc . "," . $theloai . "," . $mota . "," . $cauhinh . "," . $dungluong . ");";
            $insert_pro = mysqli_query($con, $insert_product);
//            echo $insert_pro;

            if ($insert_pro) {
                echo "<script>alert('Thêm thành công!')</script>";
                echo "<script>window.open('index.php?insert_product','_self')</script>";
            }
        }
        ?>
    </body>
</html>