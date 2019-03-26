<?php

/*
вставка подтверждает, что пользователь не видел сообщений
(обнуляет массив $need_to_check_arr и столбец shown таблицы $tablem)
*/

// get the q parameter from URL  (массив $need_to_check_arr)
$ntca = $_REQUEST["q"];


$username="ali";
$password="";
$database="ill";
$tablem="ill1";
$ind=0;

$conn=mysql_connect(localhost,$username,$password);
$db_selected=mysql_select_db($database) or die( "Unable to select database");
#echo $num;

# обнуление массива $need_to_check_arr
while ($jind<$num)     
{                                                 
if ($e_date <date($current_time))
{
$ntca[$jind]="0";
}
$jind++;
}

#echo "initphp works<br>";

if ($ntca) echo "<br>exists<br>"; else echo "<br>not exists<br>";

echo print_r($ntca, true);          
/*

for ($ind=0;$ind<$num;$ind++)
{                                                    
if ($need_to_check_arr[$ind]==1)
{
$myquery="update $tablem set shown=1 where  id=$ind";
$myresult=mysql_query($myquery) or die('alter error '.mysql_error()) ;
}
  
}


    
if ($myresult)
{echo "true";} 
else
{echo "false";}
mysql_close($conn);


       */
?>