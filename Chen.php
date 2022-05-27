<!DOCTYPE html>
<?php
?>
<html>
    <head>        
        
    </head>

    <body bgcolor=#99ff99>
       <form name="formChen" method="post" action="XuliChen.php">
           <table width = '100%' border = '0'>
               <caption>Them nhan vien vao bang</caption>
                <tr>
                    <td>IDNV</td>
                    <td><input type="text" size = '20' name='txtIDNV' value =''></td>
               </tr>
               <tr>
                    <td>Ho ten</td>
                    <td><input type="text" size = '20' name='txtHoten' value =''></td>
               </tr>
               <tr>
                    <td>IDPB</td>
                    <td>
                        <select name="txtIDPB" id="">
                            <option>PB1</option>
                            <option>PB2</option>
                            <option>PB3</option>
                        </select>
                    </td>
               </tr>
               <tr>
                    <td>Dia Chi</td>
                    <td><input type="text" size = '20' name='txtDiachi' value =''></td>
               </tr>
               <tr align='center'>
                    <td colspan='2'><input type="submit" value='OK'><input type="reset" value='Reset'></td>
               </tr>

           </table>
       </form>
    </body>
</html>