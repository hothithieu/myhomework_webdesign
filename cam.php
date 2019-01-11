<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng ký</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../img/logo/logo-1.png" />
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<!-- Phan code back - end -->
<?php
include("connect.php");

?>
<?php
if (isset($_POST['register'])) {
	# code...
			$Name = $_POST['fullname'];
			$userName = $_POST['username'];
			$Email = $_POST['email'];
			$Pass = $_POST['pass'];
			

			if ($Name=='') {
				echo "<script>alert('please enter the name')</script>";
				exit();
				# code...
			}

			if ($userName=='') {
				echo "<script>alert('please enter the name')</script>";
				exit();
				# code...
			}
			if ($Email=='') {
				echo "<script>alert('please enter the Email')</script>";
				exit();
				# code...
			}
			
			
			if ($Pass=='') {
				echo "<script>alert('please enter the Pass')</script>";
				exit();
				# code...
			}
			

			// Kiem tra email trung nhau

			$duplicate=mysqli_query($link,"select user_email from users where user_email ='$Email'");
			if (mysqli_num_rows($duplicate)>0)
			{
			echo " Tài khoản email đã tồn tại. Xin mời tạo mời đăng kí email mới";
			}
			else{
			
			$sql = "INSERT INTO users (user_full, user_name, user_email,user_pass)
		    VALUES ('$Name','$userName','$Email','$Pass')";

		    if ($link->query($sql) === TRUE) {
		        echo "Thêm dữ liệu thành công";
		    } else {
		        echo "Error: " . $sql . "<br>" .$link->error;
		    }
			
			}
	

}
 $link->close();
?>


	
<!--End -->

<body style="background-color: #999999;">

	<div class="limiter">
		<div class="container-login100" >
		<!---	<div class="container-login100" style="background-image: url('../images/index_hero_opacity.jpg');">
			<div class="login100-more" style="background-image: url('../images/index_hero.jpg');"></div> -->
			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" method="POST" >
					<span class="login100-form-title p-b-59">
                    <a href="../homePage.php"><img src="../img/logo/logo.png" alt="logo"></a>
					</span>

					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Full name</span>
						<input class="input100" type="text" name="fullname" placeholder="Nguyễn Văn A">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">User name</span>
						<input class="input100" type="text" name="username" placeholder="a.nguyen">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="nguyenvana@gmail.com">
						<span class="focus-input100"></span>
					</div>

					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Mật Khẩu</span>
						<input class="input100" type="password" name="pass" placeholder="*************" id="password">
						<span class="focus-input100"></span>
					</div>

					
					<!-- check passs-->
					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">

								<span class="txt1">
									Tôi đồng ý với
									<a href="../serviceConditions.html" class="txt2 hov1">
										Điều khoản của người dùng
									</a>
								</span>
							</label>
						</div>


					</div>

					<input type="submit" name="register" placeholder="Đăng kí">Đăng kí</input>

					
						<a href="login.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Đăng nhập
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>
</body>
</html>