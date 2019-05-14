<?php
$page = "";
if(isset($_GET["page"])){
    $page=$_GET["page"];
}else
    $page="index";
if($page=="index")
    header("Location: index.php");
if($page=="themsp"){
    if(isset($_GET["img"])){
        $img = $_GET["img"];
        header("Location: them_sanpham.php?img=$img");
    }else {
        header("Location: them_sanpham.php?succ=true");
    }
        
}
    

