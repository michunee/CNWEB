<?php
    $manv=$_REQUEST['IDNV'];
    $link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL MySQL");
    mysqli_select_db($link,"dulieu1");
    $sql = "delete from nhanvien where IDNV = '$manv'";
    $result=mysqli_query($link,$sql);
    header("Location:XoaNhanVien.php");
?>