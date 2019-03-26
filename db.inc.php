<?                            
$username="ali";
$password="";
$database="ill";

$conn=mysql_connect(localhost,$username,$password);
$db_selected=mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM ill1";
$result=mysql_query($query);                              
$num=mysql_numrows($result);

#header('Content-type: text/html; charset=utf-8');


?>                            