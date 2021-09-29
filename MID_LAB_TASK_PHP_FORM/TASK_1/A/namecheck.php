<?php 

	
	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['myname'];
		if($name == ""){
			echo "Null";
		}else{
			echo $name;
		}	
	}else{
		echo "invalid request";
	}
	
?>