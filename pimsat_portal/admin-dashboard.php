<?php
include_once("config.php");

if($_SESSION['id']==1 AND $_SESSION['name']=='zahid'){


}else{

	?>
	<script type="text/javascript">window.location='http://localhost/pimsat_portal/';</script>
	<?php
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row bg-light">
			<h3>Welcome <?php echo ucfirst($_SESSION['name']); ?>
				<a href="logout.php" class="btn btn-danger">Logout</a>
			</h3>
			
		</div>

		<?php

		if(isset($_POST['btn'])){

			if(empty($_POST['name'])||empty($_POST['reg_no'])||empty($_POST['fname'])||empty($_POST['email'])||empty($_POST['contact'])||empty($_POST['last_qual'])||empty($_POST['password'])){

				echo "Fill the required field";
			}else{

				$name 			= 	$_POST['name'];
				$reg_no 		=	$_POST['reg_no'];
				$fname			=	$_POST['fname'];
				$email			=	$_POST['email'];
				$password 		=	md5($_POST['password']);
				$backup_password=	$_POST['password'];
				$contact 		=	$_POST['contact'];
				$last_qual 		=	$_POST['last_qual']; 	


$query=$mysqli->prepare("INSERT INTO student_profile(reg_no, full_name, father_name, contact, email, password, backup_pass, last_qual) VALUES(?,?,?,?,?,?,?,?)");

$query->bind_param("ssssssss", $reg_no, $name, $fname, $contact, $email, $password, $backup_password, $last_qual);


if($query->execute()){


	echo "Thankyou";
}



			}



		}



		?>


		<h2>Register Student</h2>
		<form action="" method="post">
			<div class="form-group">
				<label>Reg. No</label>
				<input type="text" name="reg_no" class="form-control">
			</div>

			<div class="form-group">
				<label>Full Name</label>
				<input type="text" name="name" class="form-control">
			</div>

			<div class="form-group">
				<label>Father Name</label>
				<input type="text" name="fname" class="form-control">
			</div>

			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control">
			</div>

			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control">
			</div>

			<div class="form-group">
				<label>Contact</label>
				<input type="text" name="contact" class="form-control">
			</div>

			<div class="form-group">
				<label>Last Qualification</label>
				<input type="text" name="last_qual" class="form-control">
			</div>

			<div class="form-group">
				<input type="submit" name="btn" class="btn btn-success">
			</div>


		</form>





	</div>
	
</body>
</html>