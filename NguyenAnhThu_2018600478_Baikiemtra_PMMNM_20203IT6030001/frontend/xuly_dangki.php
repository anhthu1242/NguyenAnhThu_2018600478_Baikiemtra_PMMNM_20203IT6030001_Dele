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
		require_once("ketnoi.php");
		if (isset($_POST["btn_submit"])) {
  			$username = $_POST["username"];
  			$password = $_POST["pass"];
  			$email = $_POST["email"];
			  if ($username == "" || $password == "" || $email == "") 
			  {
				   echo "bạn vui lòng nhập đầy đủ thông tin";
  			}
			  else
			  {
  					
  					$sql="select * from users where username='$username'";
					$kt=mysqli_query($conn, $sql);

					if(mysqli_num_rows($kt)  > 0){
						echo "Tài khoản đã tồn tại";
					}else{
						
	    				$sql = "INSERT INTO nguoi_dung (username,pass,email) 
                                VALUES ('$username','$password','$email')";
   						mysqli_query($conn,$sql);
				   		echo " bạn đã đăng ký thành công";
					}	
			  }
	}
?>
</body>
</html>