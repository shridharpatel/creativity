<!DOCTYPE html>
<html>
<body>
<?php
$x="hiiii sp";
$y='hello pp';

echo $x;
echo"<br>";
echo $y;
echo "<br>";

$z =10;
var_dump($z);
echo "<br>";


$a =10.34;
var_dump($a);
echo "<br>";

$cars=array("volvo","BMW","toyota");
var_dump($cars);
echo "<br>";
$b=5985;
var_dump(is_int($b));
echo "<br>";
$c=59.85;
var_dump(is_int($c));
echo "<br>";
$d=acos(8);
var_dump($d);
echo "<br>";
$f=59.85;
var_dump(is_int($f));
echo "<br>";
$e=5985;
var_dump(is_numeric($e));
echo "<br>";
$g="59.85"+100;
var_dump(is_numeric($g));
echo "<br>";




echo strlen("how are you?");
echo "<br>";



echo str_word_count("what are you dng?");
echo "<br>";



echo strrev("ssp and pp");
echo "<br>";
?>

<?php
//echo strpos("I love php", "I love php too!","php");


$a=3;
$b=2;
$c=$a+$b;
echo "$c";
echo"<br>";

$c=$a**$b;
echo "$c";
echo"<br>";

$d=40;
echo $d;
echo"<br>";
$d +=10;
echo $d;
echo"<br>";
$d-=10;
echo $d;
echo"<br>";
$d*=10;
echo $d;
echo"<br>";

$x=100;
$y="102";
var_dump($x<=>$y);
echo"<br>";

$x=100;
$y="102";
var_dump($x===$y);
echo"<br>";

$x=100;
$y="102";
var_dump($x!=$y);
echo"<br>";

$x=100;
$y="102";
var_dump($x==$y);
echo"<br>";

$x=100;
$y="102";
var_dump($x>=$y);
echo"<br>";

$x=100;
$y="102";
var_dump($x<=$y);
echo"<br>";

$x=10;
echo ++$x;
echo"<br>";

$x=10;
echo --$x;
echo"<br>";

$x=10;
echo $x--;
echo"<br>";

$x=10;
echo -$x;
echo"<br>";
$s="shridhar";
$p="patel";
echo("$s"."$p");
echo"<br>";
$q="pooja";
$r="sangeeta";
echo("$q"."$r");
echo"<br>";
$t=date("H:M:S");
if($t <"12")
{
	echo"Have a good day ";
}

elseif($t>"12" && $t<"16")
{
	echo"have good afternoon";
}
elseif($t>"16" && $t<"23")
{
	echo"have good evening";
}
else
{
	echo"have good night";
}
echo"<br>";
$favcolor="red,blue,green";
switch($favcolor) {
	case"red":
	echo"my fav color is red";
	break;
	case"blue":
	echo"my fav color is blue";
	break;
	case"green":
	echo"my fav color is green";
	break;
	default:
	echo"my fav color neither red,blue,green";
	echo"<br>";
}
echo"<br>";
$x=0;
while($x<=5){
	echo"the number is :$x<br>";
	$x++;
}
  echo"<br>";
$x=0;
do{
	echo"the number is :$x<br>";
	$x++;
}
 while($x<=6);
 echo "<br>";
	
?>	
<?php
 for ($x=0;$x<=10;$x++){
 echo"the number is :$x<br>";
}
?>	
<?php 
 $x=10;
 for($x=1;$x<=5;$x++)
{
	echo"number:$x<br>";
}

 $x=6;
do{
	echo"the number is :$x<br>";
	$x++;
}
 while($x<=10);
 echo "<br>";
 ?>
 
 <?php
 function WriteMsg(){
	 echo"hello  world";
 }
writemsg();
echo"<br>";
function familyName($fname,$year,$place){
	echo"$fname was Born on $year in $place <br>";
}
familyName("shridhar","2000","karnataka");
familyName("pooja","2001","karnataka");
familyName("shree","2000","karnataka");
familyName("poo","2000","karnataka");

?> 
<?php 
//declare (strict_types=1);
function setHeight(int $minheight=220){
	echo"the height is:$minheight<br>";
}
setHeight(350);
setHeight();
setheight(180);
setHeight(100);
?>
 </body>
 </html>


