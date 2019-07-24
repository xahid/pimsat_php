<?php
//Arithematic Operator
//(+,-,*,/,%,++,--)
$a=1;
$b=2;

//$b=$b%$a;

echo $b--.'<br>';
echo $b;
echo '<br>';
//Assignment operator
//(=,+=,-=,/=,*=,%=)
$c=5;
$d=$c;
$d+=$c;
echo $d;
echo '<br>';

//Comparision Operator
//(==,===,<=,>=,!=)

if(10!=20){
	echo 'True';
}else{
	echo 'False';
}

//Concatination Operator
//(.)
echo '<br>';
$first_name='zahid';
$last_name='ali';

echo $first_name . ' ' . $last_name;
echo '<br>';
//Logical Operator
//(&& , ||)

if(1==1 || 2==2 || 1==0){
	echo 'True';
}else{
	echo 'False';
}



?>