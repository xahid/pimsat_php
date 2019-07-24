<?php 

$array= array('faizan' =>'30' ,'Ishtiaq'=>'24', 'waleed'=>'28', 'Sibtain'=>'24', 'Kashan'=>'21', 'Yasir'=>'25', 'Talha'=>'28', 'Faizan Qamar'=>'29', 'Sehar'=>'18');

//print_r($array);
?>
<table border="1" cellspacing="0">
<tr>
	<th>Name</th>
	<th>Age</th>
</tr>
<?php

foreach ($array as $key => $value) {
?>	
	<tr>
		<td><?php echo $key; ?></td>
		<td><?php echo $value; ?></td>
	</tr>
<?php
}

?>
</table>