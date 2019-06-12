<html>
<head>
<title>AREA</title>
</head>

<form method="post" name="shapes">
<b>TO FIND THE AREA OF CIRCLE AND CYLINDER</b>
<br><br>
<fieldset>
<legend>CIRCLE</legend>
Enter the radius : <input type="text" name="radius">
<br><br>
</fieldset>

<fieldset>
<legend>CYLINDER</legend>
Enter the hight : <input type="text" name="hight">
<br>
</fieldset>
<br><br>
<input type="submit" name="submit" value="FIND"><br/>
</form>
</body>
</html>


<?php
if(isset($_REQUEST['submit']))
{
class circle
{
var $radi;
var $areai;
function cirarea($radi)
{
$this->radi=$radi;
$this->area=3.14*$radi*$radi;
echo " Area of Circle is : ". $this->area . "<br/>";
}
}

class cylinder extends circle
{
var $hight;
var $area;
function cylarea($radi,$hight)
{
$this->hight=$hight;
$this->area=(2*3.14*$radi*$hight)+(2*3.14*$radi*$radi);
echo "Area of cylinder is :" . $this->area. "<br/>";
}
}
$c=new cylinder;
$r=$_REQUEST['radius'];
$h=$_REQUEST['hight'];
$c->cirarea($r);
$c->cylarea($r,$h);
}
?>