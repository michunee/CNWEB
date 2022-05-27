<?php
    $link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL MySQL");
    mysqli_select_db($link,"dulieu1");
    if(count($_POST['IDNV'])>0)
    {
        foreach($_POST['IDNV'] as $manv)
        {
            $result=mysqli_query($link,"delete from nhanvien where IDNV = '$manv'");
        }
        header("Location:Xoatatca.php");
    }
    else
    {
        header("Location:Xoatatca.php");
    }
    mysqli_free_result($result);
    mysqli_close($link);
?>