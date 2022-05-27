<?php
    $selectkey=$_REQUEST['selectkey'];
    $txtthongtin=$_REQUEST['txtthongtin'];
    if($selectkey=="" || $txtthongtin=="") { header("Location:Timkiem.php");}
    else{
    $link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL MySQL");
    mysqli_select_db($link,"dulieu1");
    $result = mysqli_query($link,"select * from nhanvien where $selectkey like '%".$txtthongtin."%'");
    if(mysqli_num_rows($result)==0) header("Location:Timkiem.php");
    else {
    echo '<table border="1" width="100%">';
    echo '<caption>Du lieu bang Nhan vien</caption>';
    echo '<tr><th>IDNV</th><th>Ho ten</th><th>IDPB</th><th>Dia chi</th></tr>';
    while($row=mysqli_fetch_array($result))
    {
        echo '<tr> <td>'.$row['IDNV'].'</td> <td>'.$row['Hoten'].'</td> <td>'.$row['IDPB'].'</td> <td>'.$row['Diachi'].'</td> </tr>';
    }
    echo '</table>';}
    mysqli_free_result($result);
    mysqli_close($link);}
?>