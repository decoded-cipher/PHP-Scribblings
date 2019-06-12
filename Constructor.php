<html>
<head>
<title>CONSTRUCTOR</title>
</head>
<body>
<form method="post" >
<br><br>
<input type="submit" name="default" value="check default value">
</form>
</body>
</html>
<?php
if(isset($_POST['default']))
{
class person
{
var $fname;
var $lname;
function __construct($fname,$lname)
{
echo " Initialising the object...<br/>";
$this->fname=$fname;
$this->lname=$lname;
}
function showname()
{
echo "My name is: " . $this->fname . " " . $this->lname . "<br/>";
}
}
$q=new person("john" , "lock");
$q->showname();
}
?>