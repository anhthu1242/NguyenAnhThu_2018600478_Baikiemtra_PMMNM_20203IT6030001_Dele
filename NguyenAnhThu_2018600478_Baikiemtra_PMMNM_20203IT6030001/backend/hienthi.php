<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="xoa.php">
    <table>
        <tr>
            <td style="width:20px">ID học sinh</td>
            <td style="width:20px">Tên học sinh</td>
            <td style="width:20px">Email</td>
            <td style="width:20px">ID lớp</td>
            <td style="width:20px">Tên lớp</td>
            <td style="width:20px">ID môn</td>
            <td style="width:20px">Tên môn</td>
            <td style="width:20px">Số tiết</td>
        </tr>
        <tr>
            <td>
                <?php
                    if(isset($_POST['id']))
                    {
                        $id = $_POST['id'];
                        echo $id;
                    }
                    else{
                        echo "";
                    }
                ?>
            </td>
            <td>
            <?php
                    if(isset($_POST['name']))
                    {
                        $name = $_POST['name'];
                        echo $name;
                    }
                    else{
                        echo "";
                    }
                ?>
            </td>
            <td>
            <?php
                    if(isset($_POST['email']))
                    {
                        $email = $_POST['email'];
                        echo $email;
                    }
                    else{
                        echo "";
                    }
                ?> 
            </td>
            <td>
            <?php
                    if(isset($_POST['id_lop']))
                    {
                        $id_lop = $_POST['id_lop'];
                        echo $id_lop;
                    }
                    else{
                        echo "";
                    }
                ?> 
            </td>
            <td>
            <?php
                    if(isset($_POST['name_lop']))
                    {
                        $name_lop = $_POST['name_lop'];
                        echo $name_lop;
                    }
                    else{
                        echo "";
                    }
                ?> 
            </td>
            <td>
            <?php
                    if(isset($_POST['id_mon']))
                    {
                        $id_mon = $_POST['id_mon'];
                        echo $id_mon;
                    }
                    else{
                        echo "";
                    }
                ?> 
            </td>
            <td>
            <?php
                    if(isset($_POST['name_mon']))
                    {
                        $name_mon = $_POST['name_mon'];
                        echo $name_mon;
                    }
                    else{
                        echo "";
                    }
                ?> 
            </td>
            <td>
            <?php
                    if(isset($_POST['so_tiet']))
                    {
                        $so_tiet = $_POST['so_tiet'];
                        echo $so_tiet;
                    }
                    else{
                        echo "";
                    }
                ?> 
            </td>
            <td>
            <input type="submit" name="xoa" value="delete" >
            </td>
        </tr>
        
    </table>
    </form>
</body>
</html>