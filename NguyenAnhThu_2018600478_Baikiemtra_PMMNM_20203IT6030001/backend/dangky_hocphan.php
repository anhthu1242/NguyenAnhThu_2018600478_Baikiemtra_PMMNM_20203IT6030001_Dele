<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="hienthi.php">
    <table>
        <tr>
            <td>ID học sinh</td>
            <td><input type="text" name="id" size="30"></td>
        </tr>
        <tr>
            <td>Tên học sinh </td>
            <td><input type="text" name="name" size="30"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" size="30"></td>
        </tr>
        <tr>
            <td>ID lớp </td>
            <td><input type="text" name="id_lop" size="30"></td>
        </tr>
        <tr>
            <td>Tên lớp</td>
            <td><input type="text" name="name_lop" size="30"></td>
        </tr>
        <tr>
            <td>ID môn</td>
            <td><input type="text" name="id_mon" size="30"></td>
        </tr>
        <tr>
            <td>Tên môn</td>
            <td><input type="text" name="name_mon" size="30"></td>
        </tr>
        <tr>
            <td>Số tiết</td>
            <td><input type="text" name="so_tiet" size="30"></td>
        </tr>
        <tr colspan="2">
            <td ><input type="submit" name="hienthi" value="hiển thị" ></td>
        </tr>
    </table>
    </form>
</body>
</html>