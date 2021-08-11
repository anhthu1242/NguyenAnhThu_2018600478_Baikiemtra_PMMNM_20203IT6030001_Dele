<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        header('Content-Type: text/html; charset=UTF-8');
        if (isset($_POST['dangnhap']))
        {
            include('ketnoi.php');
            $username = addslashes($_POST['username']);
            $password = addslashes($_POST['password']);
            if (!$username || !$password) 
            {
                echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
                exit;
            }
            $password = md5($password);
            $query = "SELECT username, pass FROM nguoi_dung WHERE username='$username'";

            $result = mysqli_query($connect, $query) or die( mysqli_error($connect));

            if (!$result) 
            {
                echo "Tên đăng nhập hoặc mật khẩu không đúng!";
            } 
            else 
            {
                echo "Đăng nhập thành công!";
            }
            $row = mysqli_fetch_array($result);
            
        
            $_SESSION['username'] = $username;
            echo "Xin chào <b>" .$username . "</b>. Bạn đã đăng nhập thành công. <a href='NguyenAnhThu_2018600478_Baikiemtra_PMMNM_20203IT6030001/backend/dangky_hocphan.php'>vào</a>";
            die();
            $connect->close();
        }
    ?>
</body>
</html>