<html>
<head>
<title>PHP FIBONACCI SCRIPT</title>
</head>
<body>
<form method="Post">
ENTER THE LIMIT : <input type ="text" name="limit">
<br><br>
<input type="submit" name="submit" value="PRINT FIBONACCI SERIES">
<br></form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$limit=0;
if(isset($_POST['limit']))
$limit=$_POST['limit'];
$first=0;
$second=1;
$next=0;
echo $first." ";
echo $second." ";
while($limit>2)
{
$next=$first+$second;
echo $next." ";
$first=$second;
$second=$next;
$limit--;
}
}
?>