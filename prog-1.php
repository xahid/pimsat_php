<pre>
<?php
$db_name='zahid';
$db_pass='12345';
	if(isset($_POST['btn'])){
	//print_r($_POST);
	echo "User Name :  " .  $_POST['user_name'];
	echo '<br>';
	echo 'User Password : '.$_POST['user_pass'];
		if(empty($_POST['user_name']) || empty($_POST['user_pass']) ){

		echo 'Fill the required Fields';
			}else{

				if($_POST['user_name']==$db_name && $_POST['user_pass']==$db_pass){


				echo '<h2>Welcome '. $_POST['user_name'].'</h2>';
				
				}else{
					echo 'Invalid User Name or password';
				}

				}	


	}else{

			echo 'Fill the Form';
		}

?>
</pre>
<form method="post" action="">
	<table>
		<tr>
			<td>User Name</td>
			<td><input type="text" name="user_name" placeholder="User Name"></td>
		</tr>

		<tr>
			<td>Password</td>
			<td><input type="Password" name="user_pass"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="btn" value="Login"></td>
		</tr>
	</table>
</form>