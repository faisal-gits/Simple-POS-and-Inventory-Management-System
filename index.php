<?php
include 'connect.php';
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<html>

<head>
	<title>
	Simple POS and Inventory Management (EDUCATION PURPOSE ONLY) 
	</title>
	<link rel="shortcut icon" href="main/images/icon.png">

	<link href="main/css/bootstrap.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="main/css/DT_bootstrap.css">

	<link rel="stylesheet" href="main/css/font-awesome.min.css">
	<style type="text/css">
		body {
			padding-top: 60px;
			padding-bottom: 40px;
			background: #e9ecef;
		}

		.sidebar-nav {
			padding: 9px 0;
		}

		i {
			color: white;
		}
	</style>
	<link href="main/css/bootstrap-responsive.css" rel="stylesheet">

	<link href="style.css" media="screen" rel="stylesheet" type="text/css" />
</head>

<body>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span4">
			</div>

		</div>

		<div id="login" class="login">
			<?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
	foreach($_SESSION['ERRMSG_ARR'] as $msg) {
		echo '<div style="color: red; text-align: center;">',$msg,'</div><br>'; 
	}
	unset($_SESSION['ERRMSG_ARR']);
}
?>

			<form action="login.php" method="post">

				<font style=" font:bold 20px 'Aleo'; color:#000;">
					<center>Simple POS and Inventory Management <br> (EDUCATION PURPOSE ONLY) <br> LOGIN </center>
				</font>
				<br>


				<div class="input-prepend">
					<span style="height:30px; width:25px;" class="add-on"><i class="icon-user icon-2x"></i></span><input
						style="height:40px; width: 90%;" type="text" name="username" Placeholder="Username"
						required /><br>
				</div>
				<div class="input-prepend">
					<span style="height:30px; width:25px;" class="add-on"><i class="icon-lock icon-2x"></i></span><input
						type="password" style="height:40px; width: 90%;" name="password" Placeholder="Password"
						required /><br>
				</div>
				<div class="qwe">
					<button class="btn btn-large btn-primary btn-block pull-right" href="dashboard.html"
						type="submit">Login</button>
				</div>
			</form>
		</div>
	</div>
	</div>
	</div>
	<center style="font-size: 12px;">Design And Develop By <a style="color: black;" href="https://github.com/faisal-gits"><b>Faisal Ahmed</b></a> </center>
</body>

</html>