<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Name</title>
</head>

<body>
	<form method="get" action="#">
		<fieldset>
			<legend>NAME</legend>
			<input type="text" name="myname" value="">
			<hr>
			<input type="submit" name="submit" value="Submit">
			<p>

				<?php

				function twoword($name)
				{
					for ($i = 0; $i < strlen($name); $i++) {
						if ($i != strlen($name) - 1 && $name[$i] == " ") {
							return true;
						}
					}
					return false;
				}

				function onlychar($name)
				{
					for ($i = 0; $i < strlen($name); $i++) {
						$c = ord(strtolower($name)[$i]);
						if ($c < 97 || $c > 122) {
							if ($c != 46 && $c != 45 && $c!=32) {
								return false;
							}
						}
					}
					return true;
				}



				if (isset($_REQUEST['submit'])) {
					$name = $_REQUEST['myname'];
					if ($name == "") {
						echo "Name cannot be empty";
						return;
					}

					if (!twoword($name)) {
						echo $name . 'Name should Contain at least two words';
						return;
					}

					if (ord(strtolower($name)) < 97 || ord(strtolower($name)) > 122) {
						echo $name . ' Name must start with a letter';
						return;
					}

					if (!onlychar($name)) {
						echo $name . ' contains invalid character;;;Can use a-z, A-Z,period,dash only.';
						return;
					}

					echo $name . 'Successfylly Submitted';
				}
				?>
				
			</p>
		</fieldset>
	</form>
</body>
</html>