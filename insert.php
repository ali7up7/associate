<?
$username="ali";
$password="";
$database="ill";

$first=$_POST['id'];
$last=$_POST['surname'];
$phone=$_POST['first'];
$mobile=$_POST['last'];
$fax=$_POST['inn'];
$email=$_POST['enter_date'];

mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");

#$query = "INSERT INTO ill1 VALUES ('$d','$surname','$first','$last','$inn','$enter_date')";
$query = "INSERT INTO ill1 VALUES ('1','surname','first','last','100','2.2.2000')";

mysql_query($query);

mysql_close();
?>