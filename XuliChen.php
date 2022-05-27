<?php
    $manv=$_REQUEST['txtIDNV'];
    $hoten=$_REQUEST['txtHoten'];
    $mapb=$_REQUEST['txtIDPB'];
    $diachi=$_REQUEST['txtDiachi'];
    $link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL MySQL");
    mysqli_select_db($link,"dulieu1");
    $listid=mysqli_query($link,"select IDNV from nhanvien");
    while($row=mysqli_fetch_array($listid))
    {
        if($manv == $row[0])
        {
            header("Location:Chen.php");
            exit();
        }
    }
    if($manv=="" || $hoten=="" || $diachi=="") { header("Location:Chen.php");}
    else{
        $sql = "insert into nhanvien (IDNV, Hoten, IDPB, Diachi) values ('$manv','$hoten','$mapb','$diachi')";
        $result=mysqli_query($link,$sql);
        header("Location:XemthongtinNV.php");
    }
?>