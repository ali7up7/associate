<?

/*
вставка подтверждает, что пользователь не видел сообщений
(обнуляет [массив $need_to_check_arr - старое, не смотреть]
 столбец shown таблицы $tablem)
*/

// get the s parameter from URL  

$s = $_REQUEST["s"];

#echo "initphpworks";

#echo $s;
$username="ali";
$password="";
$database="ill";
$tablem="ill1";
$ind=0;
$intvar=12345;

$conn=mysql_connect(localhost,$username,$password);
$db_selected=mysql_select_db($database) or die( "Unable to select database");
$query="select * from ill1";
$result=mysql_query($query);
$num=mysql_numrows($result);
#if ($num) echo $num; else echo "no num";
#echo $num;
$j=0;
while ($j<$num)     

{                                       

#echo '<br><br>',"надо провериться","<br><br>";
$myquery="update $tablem set shown=0 where  id=$j";
$myresult=mysql_query($myquery) or die('alter error '.mysql_error()) ;


$j++;
}

/*
echo '
<script>
var window.vfrominitphp= "13452345" ;
</script>';
echo '<script src="init.js"></script>';
*/

?>