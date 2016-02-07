<?php

/*-------------------------------------------------------+
| Content Management System
| http://www.phphelptutorials.com/
+--------------------------------------------------------+
| Author: David Carr  Email: dave@daveismyname.co.uk
+--------------------------------------------------------+*/

require('../includes/config.php');
if(logged_in()) {header('Location: '.DIRADMIN);}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title><?php echo SITETITLE;?></title>
	<link rel="stylesheet" href="<?php echo DIR;?>cms/style/login.css" type="text/css" />

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="lwidth">
		<div class="page-wrap">
			<div class="content">

				<?php
				if($_POST['submit']) {
					login($_POST['username'], $_POST['password']);
				}
				?>

				<div id="login" class="col-lg-12">
					<p><?php echo messages();?></p>
					<form method="post" action="">
						<p><label><strong>Username</strong><input type="text" name="username" /></label></p>
						<p><label><strong>Password</strong><input type="password" name="password" /></label></p>
						<p><br /><input type="submit" name="submit" class="button" value="login" /></p>
					</form>
				</div>

			</div>
			<div class="clear"></div>
		</div>
		<div class="footer">&copy;
		<?php /* echo SITETITLE.' '. date('Y'); */?> 
		</div>

		<!-- jQuery Version 1.11.0 -->
		<script type="text/javascript" src="js/jquery-1.11.0.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script type="text/javascript" src="js/bootstrap.min.js"></script>

	</div>
</body>
</html>
