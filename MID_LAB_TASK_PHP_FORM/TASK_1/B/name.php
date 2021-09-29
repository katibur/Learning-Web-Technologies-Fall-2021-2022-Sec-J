<?php 

	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['myname'];
		if($name == ""){
			echo "null value...";
		}else{
			echo $name;
		}	
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Name Field </title>
</head>

<body>	
	<form method="get" action="#">
		<fieldset>
			<legend>NAME</legend>
			<input type="text" name="myname" value=""><br/><br/>
		    <input type="submit" name="submit" value="Submit">
					
		</fieldset>
	</form>
</body>
</html>