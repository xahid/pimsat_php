<?php 
$students=array('Faizan', 'waleed', 'Ishtiaq', 'Talha', 'Faizan Q', 'Sehar', 'Noman', 'Kashan', 'Taimoor', 'Sibtain');

//print_r($students);
//echo $students[0];

$count = count($students);

$i=0;

$j=1;

//echo strtoupper($students[0]);
//echo '<br>';
while ( $i< $count) {

	echo "$j. " . ucfirst($students[$i]).'<br>';

	$i++;
	$j++;
}


?>