<?php
    $link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL MySQL");
    mysqli_select_db($link,"dulieu1");
    $sql = "select * from nhanvien";
    $result=mysqli_query($link,$sql);
    echo '<form action="XuliXoatatca.php" method="post">';
    echo '<table border="1" width="100%">';
    echo '<caption>Du lieu bang Nhan vien</caption>';
    echo '<tr><th>IDNV</th><th>Ho ten</th><th>IDPB</th><th>Dia chi</th><th>Xoa nhan vien</th></tr>';
    while($row=mysqli_fetch_array($result))
    {
        echo '<tr> <td>'.$row['IDNV'].'</td> <td>'.$row['Hoten'].'</td> <td>'.$row['IDPB'].'</td> <td>'.$row['Diachi'].'</td><td><input type="checkbox" name="IDNV[]" value="'.$row['IDNV'].'"></td> </tr>';
    }
    echo '<tr><td colspan="5"><button type="submit" style="float:right;">Xoa tat ca</button></td></tr>';
    echo '</table>';
    echo '</form>';
    mysqli_free_result($result);
    mysqli_close($link);
?>