<?php
//01
echo "01)";
$length = 8;
$width = 5;
$rec_area = $length*$width;
$rec_perimeter = 2*($length+$width);
echo "The area of a Rectangle = {$rec_area} and perimeter {$rec_perimeter}<br>";

//02
echo "02)";
$vat_per = 15;
$amount = 100;
$VAT = $amount*($vat_per/100);
echo "VAT= {$VAT}<br>";

//03
echo "03)";
$number = 5;
if (10%2==0) {
 	echo "Tne {$number} is EVEN";
}
else{
	echo "Tne {$number} is ODD";
} 
echo "<br>";

//04
echo "04)";
$number = array(1,10,50,90,711,5,26,5,60,89,4);
$l_num=0;
for ($i=0; $i < count($number); $i++) { 
	if ($l_num<$number[$i]) {
		$l_num = $number[$i];
	}
}
echo "The largest number of this array is {$l_num}<br>";

//05
echo "05)";
for ($i=10; $i <= 100; $i++) { 
	if ($i%2!=0) {
		echo "{$i},";
	}
}
echo "<br>";

//06
echo "06)";
$number = array(1,10,50,90,711,5,26,5,60,89,4);
$search = 21;
$flag = false;
for ($i=0; $i <count($number) ; $i++) { 
	if ($number[$i]==$search) {
		$flag = true;
		break;
	}
}
if ($flag) {
	echo "{$search} is found!";	
}
else{
	echo "{$search} is not found!";
}
echo "<br>";

//07
echo "07)<br>";
echo "----------------------<br>";
//for '*' output
for ($i=1; $i <=3 ; $i++) {	
	for ($j=0; $j <$i ; $j++) {
		echo "*";
	}
	echo "<br>";
}
echo "----------------------<br>";
//for '123' output
for ($i=3; $i >=1 ; $i--) {
	
	for ($j=1; $j <=$i ; $j++) {
		echo $j;
	}
	echo "<br>";
}	
echo "----------------------<br>";
//for 'ABC' output
$alphas = range('A', 'Z');
$count=0;
for ($i=0; $i <3 ; $i++) {	
	for ($j=0; $j <=$i ; $j++) {
		echo $alphas[$count];
		$count++;
	}
	echo "<br>";
}
echo "----------------------<br>";

//08
echo "08)<br>";
$arr[0][0]=1;
$arr[1][0]=1;
$arr[2][0]=1;

$arr[0][1]=2;
$arr[1][1]=2;
$arr[2][1]='D';

$arr[0][2]=3;
$arr[1][2]='B';
$arr[2][2]='E';

$arr[0][3]='A';
$arr[1][3]='C';
$arr[2][3]='F';
// echo "----------------------<br>";
// for ($r=0; $r < 3 ; $r++) { 
// 	for ($c=0; $c <4 ; $c++) { 
// 		echo $arr[$r][$c];
// 	}
// 	echo "<br>";
// }
echo "----------------------<br>";
for ($r=0; $r < 3 ; $r++) { 
	for ($c=0; $c <4 ; $c++) {
		if (is_int($arr[$r][$c])) {
		 	echo $arr[$r][$c];
		}		
	}
	echo "<br>";
}
echo "----------------------<br>";
for ($r=0; $r < 3 ; $r++) { 
	for ($c=0; $c <4 ; $c++) {
		if (!is_int($arr[$r][$c])) {
		 	echo $arr[$r][$c];
		}		
	}
	echo "<br>";
}
?>