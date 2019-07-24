<?php
$students=array('Faizan', 'waleed', 'Ishtiaq', 'Talha', 'Faizan Q', 'Sehar', 'Noman', 'Kashan', 'Taimoor', 'Sibtain');

asort($students);
$i=1;
foreach ($students as $key => $value) {
	
	echo $i++ .'. '. $value.'<br>';


}



?>