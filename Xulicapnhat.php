<?php
    $mapb=$_REQUEST['txtMaPB'];
    $txtPhongban=$_REQUEST['txtPhongban'];
    $txtMota=$_REQUEST['txtMota'];
    $link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL MySQL");
    mysqli_select_db($link,"dulieu1");
    $sql = "update phongban set Mota = '$txtMota', TenPB = '$txtPhongban' where IDPB = '$mapb'";
    $result=mysqli_query($link,$sql);
    header("Location:Capnhat.php");
?>