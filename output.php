<?
$username="ali";
$password="";
$database="ill";

mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM ill1";
$result=mysql_query($query);

$num=mysql_numrows($result);

mysql_close();

echo "<b><center>Database Output</center></b><br><br>";

$i=0;
while ($i < $num) {

$id=mysql_result($result,$i,"id");
$surname=mysql_result($result,$i,"surname");
$first=mysql_result($result,$i,"first");
$last=mysql_result($result,$i,"last");
$inn=mysql_result($result,$i,"inn");
$enter_date=mysql_result($result,$i,"enter_date");

echo "<b> $id </b><br> $surname <br>$first<br> $last<br> $inn<br> $email<br><hr><br>";

$i++;
}

?>
