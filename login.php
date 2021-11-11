<!DOCTYPE html>
<html lang="en">
	<?php
include 'header.php';
?>
<body style="background-color: black;">
	<?php
include 'nav.php';
?>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">
			Are you an Admin?<br>Login here to add new devices!
		</h3>
		<hr style="border-top: 1px dotted #ccc;" />
		<div class="col-md-6">
			<form action="" method="POST">
				<div class="form-group">
					<label>Username</label> <input type="text" name="username"
						class="form-control" required="required" />
				</div>
				<div class="form-group">
					<label>Password</label> <input type="password" name="password"
						class="form-control" required="required" />
				</div>

				<div align="center">
					<button name="login" class="btn btn-primary">
						<span class="glyphicon glyphicon-log-in"></span> Login
					</button>
				</div>

			</form>
			<br />
			<?php include 'login_results.php'?>
		</div>
		<div class="col-md-3">
			<h6>Default username: admin</h6>
			<h6>Default password: admin</h6>
		</div>
	</div>
	
<?php
include 'footer.php';
?>


</body>
</html>