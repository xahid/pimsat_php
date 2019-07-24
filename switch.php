<?php

date_default_timezone_set('Europe/London');


$day=date('D');

switch ($day) {
	case 'Mon':
		echo "Today is Monday";
		break;
	case 'Tues':
		echo "Today is Tuesday";
		break;	
	case 'Wed':
		echo "Today is Wednesday";
		break;	
	case 'Thu':
		echo "Today is Thursday";
		break;	
	case 'Fri':
		echo "Today is Friday";
		break;	
	case 'Sat':
		echo "Today is Saturday";
		break;	
	case 'Sun':
		echo "Today is Sunday";
		break;	
	default:
		echo 'Not a day';
		break;
}




?>
