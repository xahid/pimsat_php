<?php 
////file attachment 
include_once("config.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>PIMSAT Portal</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<?php

	if (isset($_POST['submit'])) {

	 	//print_r($_POST);
	 	$user=$_POST['user_name'];
	 	$password=md5($_POST['user_password']);
	 	$enabled=1;

	 	/////1. prepared statement
	 	$stmt=$mysqli->prepare("SELECT id, name FROM admin WHERE name=? AND password=? AND enabled=?");
	 	
	 	///2. varibles bind preventation from SQL Injection
	 	$stmt->bind_param("ssi", $user, $password, $enabled);

	 	///3. Execute the query
	 	$stmt->execute();

	 	///4. store result
	 	$stmt->store_result();

	 	///5. check num of record

	 	$num = $stmt->num_rows();

	 	//echo $num;

	 	if($num>0){

	 		////6. bind variable	
	 		$stmt->bind_result($id, $user_name);

	 		////7. fetch 

	 		$stmt->fetch();


	 		//save Id & name in Session variable (Global)	
	 		$_SESSION['id'] = $id;
	 		$_SESSION['name'] = $user_name;
	 		?>

			<script>window.location='admin-dashboard.php'</script>

			<?php
	 	}else{

	 		?>

	 		<div class="alert alert-danger">Invalid User name or Password</div>


		<?php

	 	}


	 } 


	?>

	<div class="container">
		<h1>Admin Login</h1>
		<form method="post" action="">
			<div class="form-group">
				<label>User Name</label>
				<input type="text" name="user_name" class="form-control">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="user_password" class="form-control">
			</div>

			<div class="form-group">
				<input type="submit" name="submit" value="Login" class="btn btn-success">
			</div>
		</form>
	</div>



</body>
</html>