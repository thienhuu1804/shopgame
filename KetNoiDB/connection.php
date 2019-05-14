<?php
function ketnoidb($sever, $user, $pass, $dbname) {
    $con = mysqli_connect($sever, $user, $pass, $dbname) or die("can't connect this database");
    if (!$con) {
        echo "Khong ket noi duoc co so du lieu!!" . mysqli_error($con);
    } else {
        return $con;
    }
}
?>
