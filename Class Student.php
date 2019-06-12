<html>
<head>
<title>STUDENT DETAIL</title>
</head>
<body>
<form name="form" method="get" >
NAME : <input type="text" name="name">
<br><br>
ROLL.NO : <input type="text" name="no">
<br><br>
MARKS OBTAINED: <input type="text" name="mark"> (<i>out of 100</i>)
<br><br>
<input type="submit" name="submit" value="submit">
</form>
<?php
if(isset($_REQUEST['submit']))
{
class details
{
var $name;
var $rno;
var $mark;
function setinfo($name,$rno,$mark)
{
$this->name=$name;
$this->rno=$rno;
$this->mark=$mark;
}
function getinfo()
{
echo "NAME : ". $this->name ."<br/>";
echo "ROLL.NO :" . $this->rno."<br/>";
echo "MARKS :" . $this->mark."<br/>";
}
}
$q=new details;
$name=$_REQUEST['name'];
$rno=$_REQUEST['no'];
$mark=$_REQUEST['mark'];
$q->setinfo($name,$rno,$mark);
$q->getinfo();
}
?>
</body>
</html>