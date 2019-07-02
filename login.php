<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<!--<body>-->
<!--<nav class="navbar navbar-default">-->
<!--</nav>-->
<!--	<div>-->
<!--		<div class="row">-->
<!--			<div>-->
<!--				<form action="" method="POST" name="form_register">-->
<!--				<div class="col-md-6" align="left" class="container-fluid" style="background-color: ">-->
<!--					<div class="container-fluid">-->
<!--						<br>-->
<!--						<h2 style="color: brown" style="text-align: left;" style="padding-right:" >Selamat Datang</h2>-->
<!--						<h4> Selamat datang di Sistem Informasi Akademik </h4>-->
<!--						<h4> Silahkan Login untuk menggunakan SISTER. </h4>-->
<!--					<br><br><br><br><br><br><br><br><br><br><br><br><br><br>-->
<!--						<h6 style="background-color: black">_____</h6>-->
<!--					</div>-->
<!--					</div>-->
<!--					<div class="col-md-6" align="center" class="container-fluid" style="background-color: ">-->
<!--					</div>-->
<!--					<div class="col-md-4" class="container-fluid" style="background-color: #085394">-->
<!--						<br><br><br><br><br>-->
<!--						<h3 style="text-align: center; color: white">Masuk</h3>-->
<!--						<form name="form_login" action="act_login.php" method="POST">-->
<!--							<div class="col-sm-10 form-group">-->
<!--								<div class="form-group">-->
<!--										<input class="form-control" type="text" name="username" placeholder="Username" required="required">-->
<!--								</div>-->
<!--								<div class="form-group">-->
<!--										<input class="form-control" type="text" name="password" placeholder="Password" required="required">-->
<!--								</div>-->
<!--								<div style="text-align:right; color: white">-->
<!--										<input type="checkbox" name="check" value="Ingatkan Saya">IngatKan Saya-->
<!--								</div>-->
<!--								<br>-->
<!--								<div>-->
<!--									<input style="background-color: yellow" style="color: black" type="submit" class="btn btn-block" name="btn_masuk" value="Masuk">-->
<!--								</div><br><br><br><br><br>-->
<!--							</div>-->
<!--						</form>-->
<!--					</div>-->
<!--				</form>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</body>-->
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Sign In</h5>
                    <form class="form-signin" method="POST" action="admin/ceklogin.php">
                        <div class="form-label-group">
                            <input type="text" id="username" class="form-control" placeholder="username" name="user" required autofocus>
                            <label for="username">Email address</label>
                        </div>

                        <div class="form-label-group">
                            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
                            <label for="inputPassword">Password</label>
                        </div>
<!--                        <div class="custom-control custom-checkbox mb-3">-->
<!--                            <input type="checkbox" class="custom-control-input" id="customCheck1">-->
<!--                            <label class="custom-control-label" for="customCheck1">Remember password</label>-->

<!--                        </div>-->
                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
<!--                        <hr class="my-4">-->
<!--                        <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>-->
<!--                        <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>-->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>