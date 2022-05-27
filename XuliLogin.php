<?php
    $txtUsername=$_REQUEST['txtUsername'];
    $txtPassword=$_REQUEST['txtPassword'];
    if($txtUsername=="" || $txtPassword=="") { header("Location:Login.php");}
    else{
        $link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL MySQL");
        mysqli_select_db($link,"dulieu1");
        $sql = "select * from admin where username='$txtUsername' and password='$txtPassword'";
        $result=mysqli_query($link,$sql);
        if(mysqli_num_rows($result)==0) header("Location:Login.php");
        else {
            header("Location:Capnhat.php");
        mysqli_free_result($result);
        mysqli_close($link);
        }
    }
?>