<?

$username="ali";
$password="";
$database="ill";
$tablem="ill1";
$ind=0;

$conn=mysql_connect(localhost,$username,$password);
$db_selected=mysql_select_db($database) or die( "Unable to select database");
#echo $num;

for ($ind=0;$ind<$num;$ind++)
{                                                    
$myquery="update $tablem set shown=0 where  id=$ind";
$myresult=mysql_query($myquery) or die('alter error '.mysql_error()) ;
}


    
if ($myresult)
{echo "true";} 
else
{echo "false";}
mysql_close($conn);


?>