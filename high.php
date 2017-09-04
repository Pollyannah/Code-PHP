<!DOCTYPE html>
<html>
<head>
	<title>php</title>
</head>
<body>
<?php


echo "what a time to be alive ;)";
echo "<br>";
echo "we could be heroes.";
echo "<br>";

$age=145;
$txt="Today is a Tuesday.";
echo "<br>";

echo "This is a good day.".$txt;
echo "<br>";
echo $age;
echo $txt;
echo "<br>";

$x = 5;
$y = 4;
echo $x + $y;
// substraction, division, multiplication, modulus[gves you a remainder when dividing]
echo "<br>";

$txt1="Tomorrow is Wednesday.";
$txt2="We are learning php.";
echo "<br>";
echo $txt. " " .$txt2. " " .$txt1; "<br>"; //concatenationisforlinkingstrings
echo "<br>";
echo "$txt $txt2 $txt1";
echo "<br>";
echo "<br>";
$a=45;
$b=15;
echo $a / $b;
echo "<br>";

$a=45;
$b=13;
echo $a % $b;
echo "<br>";
echo "<br>";

if ($age>18) {
	echo "You can attend the Tech talk.<br>";
}
if ($age<16) {
   echo "Please stay ay home.<br>";
} else {
	echo "Ahoy mate :) <br>";
}
echo "<br>";
echo "<br>";


//A= 70-100;
//B= 60-69;
//C= 50-59;
//D= 40-49;
$score=-79;
if ($score>=70) {
	echo "Grade A<br>";
}
elseif ($score>=60 && $score<70) {
	echo "Grade B<br>";
}
elseif ($score>=50 && $score<60) {
	echo "Grade C<br>";
}
elseif ($score>=40 && $score<50) {
	echo "Grade D<br>";
}
elseif ($score>=0 && $score<40) {
	echo "Grade E<br>";
}
else{
	echo "invalid entry";
}
echo "<br>";
echo "<br>";
//swych:p
 $zodiacsign=4;
  switch ($zodiacsign) {
 	case '1':
 	echo "Aries";
 	break;
 	case '2':
 	echo "Capricorn";
 	break;
 	case '3':
 	echo "Pisces";
 	break;
 	case '4':
 	echo "Libra";
 	break;
 	default:
 		"Extra-terrestrial";
 	break;
 }
echo "<br>";
echo "<br>";
echo "<br>";

$x = -10; //initializing
  
while($x <= 10) {
   echo "The number is: $x <br>";
   $x++; }
echo "<br>";
echo "<br>";
echo "<br>";

$x = -2;
$count = 0;
while ($x < 10) {
	$x = $x + 2;
   $count++;
   echo "This is an even number: $x. <br><br>" ; }

echo "<br>";
echo "<br>";
$date=35;
do {
	echo "Today is date: $date. <br><br>";
} while ($date <= 10);

echo "<br>";
for ($time=0; $time <12 ; $time++) {                       //declare variable, condition,
	echo "It's about that time: $time a.m <br>";
}

echo "<br>";
//23,67,-75?>
<h3>Numeric Array</h3>
<?php
// First method to create a numeric array
$numbers = array(2, 7, 12, 56, 98, 645, 843);

foreach ($numbers as $value) {
	echo "value is $value <br><br>";
	echo "The item at the position is ". $numbers[0];
}
//2nd method to create an array
$names[5]="Polly";
$names[1]="Anna";
$names[2]="Joan";
$names[3]="Mwihaki";
foreach ($names as $key) {
	echo "value is $key <br><br>";
	echo "bae is " . $names[3];
}
echo '<br>';
echo "<h2>Associative Arrays</h2>";
//1st method
$salaries= array("Aizen"=> 1000000, "Polly"=> 1000000, "Cire"=>900000);
echo "Salary of Aizen is ".$salaries["Aizen"];
echo "<br>";
echo "Salary of Polly is ".$salaries["Polly"];



?>
</body>
</html>