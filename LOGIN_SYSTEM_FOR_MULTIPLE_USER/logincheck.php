<?php
	session_start();
	function correction($username,$password){
		$users=$_SESSION['users'];
		$totalusers=count('users');
		for($i=0;$i<$totalusers;$i++){
			if ($users[$i]['username']==$username && $users[$i]['password']==$password) {
				return true;
			}
		}
		return false;
	}

	

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username != ""){
			if($password != ""){
							
				if(correction($username,$password)){
					$_SESSION['flag'] = "true";
					header('location: home.php');
				}else{
					echo "invalid username/password";
				}
			}else{
				echo "Invalid password...";
			}
		}else{
			echo "Invalid username...";
		}
	}
?>