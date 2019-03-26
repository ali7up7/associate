<?

/* не смотреть(старое): 
вставка выводит сообщение, что нужно провериться,
создает массив $need_to_check_arr, указывающий, 
где
 0 означает, что не пришло время
 1 означает, что время пришло и сообщение уже показывалось
 смотреть (новое)
изменяется поле shown таблицы $tablem 
где
 0 означает, что не пришло время
 1 означает, что время пришло и сообщение уже показывалось

*/

$username="ali";
$password="";
$database="ill";
$tablem="ill1";
$conn=mysql_connect(localhost,$username,$password);
$db_selected=mysql_select_db($database) or die( "Unable to select database");

$current_time=date('Y-m-d H:i:s');
$j=0;


echo "Текущее время: ",$current_time,"<br><br>";
#echo print_r($need_to_check_arr,true);
#echo "<br><br>";


#array_push($need_to_check_arr,"la ilaha illAllah");
#echo              $need_to_check_arr[0];

while ($j<$num)     

{
$e_date=mysql_result($result,$j,"enter_date");
$shown=mysql_result($result,$j,"shown");
                                                  
# установить поле shown таблицы $tablem в 1, если время пришло                                                  


#echo '<script> alert('+$e_date+'); </script>';                                         
$srtq='Надо  бы провериться \nДата обследования: ';
$n='\n';
 
if ((!$shown) &&($e_date <date($current_time)))  
{
$id=mysql_result($result,$j,"id");
$surname=mysql_result($result,$j,"surname");
$first=mysql_result($result,$j,"first");
$last=mysql_result($result,$j,"last");
$inn=mysql_result($result,$j,"inn");
$request_text=mysql_result($result,$j,"request_text");                           
echo "<script>alert('$srtq'+'$e_date'+'$n'+ 'Фамилия: '+'$surname'
+'$n'+'Имя: '+'$first'+'$n'+'Отчество '+'$last'+'$n'+'ИНН: '+'$inn'+'$n'
+'Действие: '+'$request_text');</script>";
#echo '<br><br>',"надо провериться","<br><br>";
$myquery="update $tablem set shown=1 where  id=$id";
$myresult=mysql_query($myquery) or die('alter error '.mysql_error()) ;

}

$j++;
}
#echo print_r($need_to_check_arr, true);
#$GLOBALS['p']=$GLOBALS['need_to_check_arr'];
?>

