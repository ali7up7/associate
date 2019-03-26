<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<title>CRM система</title>


<style type="text/css">
 h1 { 
    font-size: 120%; 
    font-family: Verdana, Arial, Helvetica, sans-serif; 
    color: #333366;
   }

</style>      


<link rel="stylesheet" href="popup.css">



<script type="text/javascript" src="popup.js">
</script>

<script type="text/javascript" src="popup_event.js">
</script>


<script type="text/javascript"  type="text/javascript" src="init.js">
</script>




</head>

<body >



<h1>Лечение сподвижников</h1>
<!--a href="second.html">Перейти на вторую страницу!</a-->
       
<table width="100%"" border="1" cellspacing="2" cellpadding="2">
<tr>
<th width="14%"><font face="Arial, Helvetica, sans-serif">id</font></th>
<th width="14%"><font face="Arial, Helvetica, sans-serif">Фамилия</font></th>
<th width="14%"><font face="Arial, Helvetica, sans-serif">Имя</font></th>
<th width="14%"><font face="Arial, Helvetica, sans-serif">Отчество</font></th>
<th width="14%"><font face="Arial, Helvetica, sans-serif">ИНН</font></th>
<th width="14%"><font face="Arial, Helvetica, sans-serif">Дата обследования</font></th>
<th width="14%"><font face="Arial, Helvetica, sans-serif">Текст заявки</font></th>
</tr>
</table>

       
<form >


<?
include("db.inc.php");
mysql_close($conn);
              
$i=0;
$enter_date_array=array("k");
while ($i < $num) {

$id=mysql_result($result,$i,"id");
$surname=mysql_result($result,$i,"surname");
$first=mysql_result($result,$i,"first");
$last=mysql_result($result,$i,"last");
$inn=mysql_result($result,$i,"inn");
$enter_date=mysql_result($result,$i,"enter_date");
$request_text=mysql_result($result,$i,"request_text");                           
#echo "<b>$id</b> <br>$surname<br>$first<br>$last<br>$inn<br>$enter_date<br><hr><br>";
$i++;


echo '<table width="100%" border="1" cellspacing="2" cellpadding="2">
<tr>                                                  
<td width="14%"><font face="Arial, Helvetica, sans-serif"> ' ,$id,'</font></td>', 
'<td width="14%"><font face="Arial, Helvetica, sans-serif">', $surname,'</font></td>
<td width="14%"><font face="Arial, Helvetica, sans-serif">', $first,'</font></td>
<td width="14%"><font face="Arial, Helvetica, sans-serif">', $last,'</font></td>
<td width="14%"><font face="Arial, Helvetica, sans-serif">', $inn,'</font></td>
<td width="14%"><font face="Arial, Helvetica, sans-serif">', $enter_date,'</font></td>
<td width="14%"><font face="Arial, Helvetica, sans-serif">', $request_text,'</font></td>
</tr>
</table>';
}

if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}





/*echo "<!-- popup on event -->

 <div class='popup' onclick='x=popitup_event(",$num,")'>     popuponevent  
  <span class='popuptext' id='myPopupOnEvent'> here we are </span>
 </div> 
";
*/


include("joke.php");

#echo print_r($need_to_check_arr, true);                                

?>


<!--    pop-up  
 <div class="popup" onclick="popitup()">Click me!
  <span class="popuptext" id="myPopup">Popup text...</span>
</div>
--> 

<button type="button" onclick="init(123)" > Подтвердить, что не видел сообщения
</button>
 
<!-- 
<input type="text"  id="12" name="name" value="<?php echo $num;?>" />

<!-- пороверка отправки переменной html в php 
<p1 id="p1id"> </p1> 
<button onclick='f(23452346)'> отправить переменную html  в php </button>
<scrip
function f(q){
document.getElementById('p1id').innerHTML=q;
}
</script>

-- пороверка отправки переменной html в php (конец) -->

<!--
 <p>Suggestions: <span id="txtHint"></span></p>
-->

 
</form>
                  
</body>
</html>