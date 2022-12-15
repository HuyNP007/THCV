<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Tên đăng nhập</label>
     	<input type="text" name="tendangnhap" placeholder="User Name"><br>

     	<label>Mật khẩu</label>
     	<input type="matkhau" name="matkhau" placeholder="Password"><br>

     	<button type="submit">Đăng nhập</button>
     </form>
</body>
</html>