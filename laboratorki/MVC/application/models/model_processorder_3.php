<?php
class model_vieworders_3 extends model
{
public function get_data()
{
 $tireqty = $_POST['tireqty'];

  $oilqty = $_POST['oilqty'];

  $sparkqty = $_POST['sparkqty'];

  $address = $_POST['address'];

  $DOCUMENT_ROOT = $HTTP_SERVER_VARS['DOCUMENT_ROOT'];
  
  

$hostname="localhost";

$user="root";

$password="";

$db="lab_3";


if(!$link = mysql_connect($hostname, $user, $password))

{

//echo "<br> Не могу соединиться с сервером базы данных <br>";

exit();

}

echo "<br> Cоедининение с сервером базы данных прошло успешно <br>";

if (!mysql_select_db($db, $link))

{ 

//echo "<br> Не могу выбрать базу данных<br>";

exit();

}

else

{

echo "<br> Выбор базы данных прошел успешно <br>";

}
}
}
/*


$query_1="select zakaz.id, zakaz.fio, zakaz.adress, zakaz.data, tovar.id, tovar.tiregty, tovar.oilgty, tovar.sparkgty FROM zakaz, tovar where  zakaz.id=tovar.id order by zakaz.data";
$result_1=mysql_query ($query_1);


