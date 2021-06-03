<?php include("login.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="login_form.css?ver=<?php echo rand(111,999)?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php if(count($errors)>0){
    echo "<script>$( document ).ready(function() {
            $('#myModal').modal('show')});</script>";
    } ?>
	<!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title text-center">WARNING!</h4>
				</div>
				<div class="modal-body text-center">
					<?php if (count($errors) > 0) : ?>
						<?php foreach ($errors as $error) : ?>
							<p><?php echo $error; ?></p>
						<?php endforeach ?>
					<?php  endif ?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form method="post">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fa fa-home"></i></a>
				<a href="#" class="social"><i class="fa fa-phone"></i></a>
				<a href="#" class="social"><i class="fa fa-envelope"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Username" name="reg_username" id="reg_username" title="Username:&#010;1. Start with alphabet&#013;2. Be of 5 - 15 chars long&#013;3. Not contain any special chars except underscore" />
			<input type="text" placeholder="Email" name="reg_email" id="reg_email" title="Enter a valid Email ID" />
			<input type="password" placeholder="Password" name="reg_password" id="reg_password" title="Password must:&#010;1. be of 8 - 20 chars long&#013;2. Contain atleast 1 number&#013;3. Contain atleast 1 uppercase and lowercase char&#013;4. Contain atleast 1 special char" />
			<button  type="submit" name="reg_user">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form method="post">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fa fa-home"></i></a>
				<a href="#" class="social"><i class="fa fa-phone"></i></a>
				<a href="#" class="social"><i class="fa fa-envelope"></i></a>
			</div>
			<span>or use your account</span>
			<input type="username" placeholder="Username" name="username" id="username" title="Enter your username" />
			<input type="password" placeholder="Password" name="password" id="password" title="Enter your password" />
			<a href="forgothtml.php">Forgot your password?</a>
			<button type="submit" name="log_user">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Hello, Friend!</h1>
				<p>To keep connected with us please register with your personal information</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Welcome Back!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
</body>
<script type="text/javascript">
	const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
</script>
</html>