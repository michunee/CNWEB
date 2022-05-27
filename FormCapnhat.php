<!DOCTYPE html>
<?php
    $mapb=$_REQUEST['IDPB'];
    $link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL MySQL");
    mysqli_select_db($link,"dulieu1");
    $sql = "select * from phongban where IDPB = '$mapb'";
    $result=mysqli_query($link,$sql);
    $row=mysqli_fetch_array($result);
?>
<html>
    <head>        
        
    </head>

    <body bgcolor=#99ff99>
       <form name="formCapnhat" method="post" action="Xulicapnhat.php">
           <table width = '100%' border = '0'>
                <tr>
                    <td>Ma phong ban</td>
                    <td><input type="text" size = '20' name='txtMaPB' value ='<?php echo $row['IDPB'];?> ' readonly></td>
               </tr>
               <tr>
                    <td>Ten phong ban</td>
                    <td><input type="text" size = '20' name='txtPhongban' value ='<?php echo $row['TenPB'];?>'></td>
               </tr>
               <tr>
                    <td>Mo ta</td>
                    <td><input type="text" size = '20' name='txtMota' value ='<?php echo $row['Mota'];?>'></td>
               </tr>
               <tr align='center'>
                    <td colspan='2'><input type="submit" value='OK'><input type="reset" value='Reset'></td>
               </tr>

           </table>
       </form>
    </body>
</html>