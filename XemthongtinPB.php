<?php
    $link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL MySQL");
    mysqli_select_db($link,"dulieu1");
    $sql = "select * from phongban";
    $result=mysqli_query($link,$sql);
    echo '<table border="1" width="100%">';
    echo '<caption>Du lieu bang Phong ban</caption>';
    echo '<tr><th>IDPB</th><th>Ten PB</th><th>Mo ta</th><th>Xem nhan vien</th></tr>';
    while($row=mysqli_fetch_array($result))
    {
        echo '<tr> <td>'.$row['IDPB'].'</td> <td>'.$row['TenPB'].'</td> <td>'.$row['Mota'].'</td><td align = "center"><a href="XemthongtinNVPB.php?IDPB='.$row['IDPB'].'">xxx</a></td></tr>';
    }
    echo '</table>';
    mysqli_free_result($result);
    mysqli_close($link);
?>
