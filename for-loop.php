<form method="post" action="for-loop.php">
	<input type="text" name="number" placeholder="Enter a Number">
	<input type="submit" name="Submit">
</form>
<?php


if(isset($_POST['number'])){

$number=$_POST['number'];

	if(!empty($number)){

		for ($i=1; $i <=10 ; $i++) { 
		
		echo $number .' x '. $i . ' = ' . $number*$i . '<br>';
		}	
	}	

}

?>
