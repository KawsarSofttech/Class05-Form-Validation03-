<!DOCTYPE html>
<html>
<head>
	<title>Sign up form</title>
</head>
<body>
	<!-- form[method(get&post) && action] -->
	<?php

		if(isset($_POST["submit"])){
			$pass = $_POST["password"];
			if(strlen($pass) < 6){
				echo "Password should be of minimum 06 characters";
			}else{
				echo "Signed Up";
				header("location: profile.php");
			}
		}
			
		
	?>
	<form method="POST" action="">
		<input type="text" name="username" placeholder="Username"><br>
		<input type="password" name ="password" placeholder="Pssword"><br>
		<input type="submit" name="submit" value="Sign Up">
	</form>
		


</body>
</html>