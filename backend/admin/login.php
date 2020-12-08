<?php
ob_start();
session_start();
include("config.php");
$error_message = '';
if (isset($_POST['form1'])) {

	if (empty($_POST['email']) || empty($_POST['password'])) {
		$error_message = 'Email and/or Password can not be empty<br>';
	} else {

		$statement = $pdo->prepare("SELECT * FROM user WHERE email=? AND status=?");
		$statement->execute(array($_POST['email'], 'Active'));
		$total = $statement->rowCount();
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);
		if ($total == 0) {
			$error_message .= 'Email Address does not match<br>';
		} else {
			foreach ($result as $row) {
				$row_password = $row['password'];
			}

			if ($row_password != md5($_POST['password'])) {
				$error_message .= 'Password does not match<br>';
			} else {

				$_SESSION['user'] = $row;
				header("location: index.php");
			}
		}
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>

	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/datepicker3.css">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/select2.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.css">
	<link rel="stylesheet" href="css/AdminLTE.min.css">
	<link rel="stylesheet" href="css/_all-skins.min.css">

	<link rel="stylesheet" href="style.css">
</head>

<body class="hold-transition login-page sidebar-mini" style="background-color: #fff !important;">
	<div class="login-box" style="width: 40%;">
		<div class="login-logo">
			<img src="https://vasantham.zeroappz.com/images/headerlogo1.png" style="width: 80%;" alt="Vasantham HealthCentre">
		</div>
		<div class="login-box-body" style="
    position: relative;
    margin-bottom: 40px;
    padding: 30px 40px 25px;
    background-color: rgba(0, 0, 0, 0.02);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.10);
">
			<h2 style="    text-align: center;
    position: relative;
    color: #6c757d;
    font-size: 28px;
    font-weight: 600;
    line-height: 1.2em;
    margin-bottom: 25px;">Administration Login</p>

				<?php
				if ((isset($error_message)) && ($error_message != '')) :
					echo '<div class="error">' . $error_message . '</div>';
				endif;
				?>

				<form action="" method="post">
					<div class="form-group has-feedback" style="margin-bottom: 20px;">

						<input class="form-control" style="position: relative;
    display: block;
    width: 100%;
	margin-top: 10%;
    line-height: 28px;
    padding: 10px 20px;
    height: 50px;
    color: #777777;
    font-size: 16px;
    border: 1px solid #dddddd;
    background-color: #ffffff;
    transition: all 300ms ease;" placeholder="Email address" name="email" type="email" autocomplete="off" autofocus>
					</div>
					<div class="form-group has-feedback" style="margin-bottom: 20px;">
						<input style="position: relative;
    display: block;
    width: 100%;
	margin-top: 10%;
    line-height: 28px;
    padding: 10px 20px;
    height: 50px;
    color: #777777;
    font-size: 16px;
    border: 1px solid #dddddd;
    background-color: #ffffff;
    transition: all 300ms ease;" class="form-control" placeholder="Password" name="password" type="password" autocomplete="off" value="">
					</div>
					<div class="row">
						<div class="col-xs-8"></div>
						<div class="col-xs-4">
							<input type="submit" class="btn btn-primary btn-block btn-flat login-button" style="
    font-size: 16px;
    font-weight: 700;
    padding: 10px 36px;
    line-height: 25px;
    text-transform: uppercase;
    width: 100%;" name="form1" value="Log In">
						</div>
					</div>
				</form>
		</div>
	</div>
	</div>
	</div>

	<script src="js/jquery-2.2.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/select2.full.min.js"></script>
	<script src="js/jquery.inputmask.js"></script>
	<script src="js/jquery.inputmask.date.extensions.js"></script>
	<script src="js/jquery.inputmask.extensions.js"></script>
	<script src="js/moment.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/icheck.min.js"></script>
	<script src="js/fastclick.js"></script>
	<script src="js/jquery.sparkline.min.js"></script>
	<script src="js/jquery.slimscroll.min.js"></script>
	<script src="js/app.min.js"></script>
	<script src="js/demo.js"></script>

</body>

</html>