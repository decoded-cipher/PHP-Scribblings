<html>
<head>
<title>SUM OF DIGITS</title>
</head>
<body>
<form method="Post">
ENTER THE NUMBER : <input type ="text" name="number">
<br><br>
<input type="submit" name="submit" value="FIND SUM">
<br></form>
</body>
</html>
<?php
$sum=0;$rem=0;$num=0;
if(isset($_POST['submit']))
{
if(isset($_POST['number']))
{
$num=$_POST['number'];
}
$cpy=$num;
for($i=0;$i<=strlen($num);$i++)
{
$rem=$num%10;
$sum=$sum+$rem;
$num=$num/10;
}
echo " Sum of digits of ". $cpy ." is $sum";
}
?>