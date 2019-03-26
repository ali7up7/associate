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
$need_to_check_arr=array();

# инициализация $need_to_check_arr 
for  ($z=0;$z<$num;$z++)
{
array_push($need_to_check_arr,"0");
}

echo "Текущее время: ",$current_time,"<br><br>";
#echo print_r($need_to_check_arr,true);
#echo "<br><br>";


#array_push($need_to_check_arr,"la ilaha illAllah");
#echo              $need_to_check_arr[0];

while ($j<$num)     

{
$e_date=mysql_result($result,$j,"enter_date");
echo  $e_date,"<br><br>";
                                                  
if ($e_date <date($current_time))
{
#echo '<br><br>',"надо провериться","<br><br>";
echo "<script>alert('надо бы провериться');</script>";
$need_to_check_arr[$j]="1";

}
$j++;
}
echo print_r($need_to_check_arr, true);
$GLOBALS['p']=$GLOBALS['need_to_check_arr'];
?>

