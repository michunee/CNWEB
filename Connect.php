<html>
    <head>

    </head>

    <body>
        <?php
            $link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL MySQL");
            mysqli_select_db($link,"dulieu1");
            $sql = "select * from table1";
            $result=mysqli_query($link,$sql);
            echo '<table border="1" width="100%">';
            echo '<caption>Du lieu truy xuat tu bang nhan su</caption>';
            echo '<tr><th>Ma so</th><th>Ho ten</th><th>Ngay sinh</th><th>Nghe nghiep</th></tr>';
            while($row=mysqli_fetch_array($result))
            {
                echo '<tr> <td>'.$row['maso'].'</td> <td>'.$row['hoten'].'</td> <td>'.$row['ngaysinh'].'</td> <td>'.$row['nghenghiep'].'</td> </tr>';
            }
            echo '</table>';
            mysqli_free_result($result);
            mysqli_close($link);
        ?>
        
    </body>
</html>