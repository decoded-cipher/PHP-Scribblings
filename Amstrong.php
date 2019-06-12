<html>
<head>
<title>SUM OF DIGITS</title>
</head>
<body>
<form method="Post">
ENTER THE NUMBER : <input type ="text" name="number">
<br><br>
<input type="submit" name="submit" value="CHECK">
<br></form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
function armstrongCheck($number)
{
$sum=0;$rem=0;
$num=$number;
$cpy=$num;
while($num!=0)
{
$rem=$num%10;
$sum=$sum+($rem*$rem*$rem);
$num=$num/10;
}
if($number==$sum)
echo $number." is an Armstrong number";
else
echo $number." is not an Armstrong number";
}
$number=$_POST['number'];
armstrongCheck($number);
}
?>