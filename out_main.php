<?
/*setlocale (LC_CTYPE, "ru_RU.UTF-8"); 
  */
$username="ali";
$password="";
$database="ill";

$conn=mysql_connect(localhost,$username,$password);
$db=@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM ill1";
$result=mysql_query($query);

$num=@mysql_numrows($result);

header('Content-type: text/html; charset=utf-8');

mysql_close();

echo "<b><center>Database Output</center></b><br><br>";
/*
echo 'Первоначальная кодировка: ' .  mysql_client_encoding($conn) . "\n";

if (!mysql_set_charset('utf8', $conn)) {
    echo "Ошибка: не удается установить кодировку.\n";
    exit;
}

echo 'Ваша текущая кодировка: ' .  mysql_client_encoding($conn);


*/
$i=0;

while ($i < $num) {

$id=mysql_result($result,$i,"id");
$surname=mysql_result($result,$i,"surname");
$first=mysql_result($result,$i,"first");
$lst=mysql_result($result,$i,"last");
$inn=mysql_result($result,$i,"inn");
$enter_date=mysql_result($result,$i,"enter_date");

echo "<b>$id $surname</b><br> $first<br>$last<br>: $inn<br>$enter_date<br><hr><br>кер";
echo "setgh"; 
$i++;
}

?>
