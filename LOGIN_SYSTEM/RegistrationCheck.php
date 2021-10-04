<html>
<head>
	<title>Registration Page</title>
</head>
<body>
	<form method="get" action="#">
		<fieldset>
			<legend>Name</legend>
			<input type="text" name="myname" value="">
			<hr>
			<legend>Email</legend>
			<input type="text" name="myname" value="">
			<hr>
			<legend>Password</legend>
			<input type="text" name="myname" value="">
			<hr>
			<input type="submit" name="submit" value="Submit">
			<p>

				<?php

				if (isset($_REQUEST['submit'])) {
					$name = $_REQUEST['myname'];
					if ($name == "") {
						echo "Name cannot be empty";
						return;
					}
				}


				?>
				
			</p>
		</fieldset>
	</form>

	<a href="Log In Page.html">Click Here To Log In</a>
	
</body>
</html>