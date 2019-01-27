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

echo "<br> Не могу выбрать базу данных<br>";

exit();

}

else

{

echo "<br> Выбор базы данных прошел успешно <br>";

}
$query_1="select zakaz.id, zakaz.fio, zakaz.adress, zakaz.data, tovar.id, tovar.tiregty, tovar.oilgty, tovar.sparkgty FROM zakaz, tovar where  zakaz.id=tovar.id order by zakaz.data";
$result_1=mysql_query ($query_1);

ob_start();
?>
<table border=1 color=black width=100% height=100%>
<tr>
<td><b>№</b></td><td><b>ФИО</b></td><td><b>Адрес</b></td><td><b>Дата заказа</b></td><td><b>покрышки</b></td><td><b>масла</b></td><td><b>свечи</b></td>
<?
echo &data;
//$data=mysql_fetch_array($result_1)
//print_r($data);

while ($row_1=mysql_fetch_array ($result_1)) {

$id=$row_1["id"];

$fio=$row_1["fio"];

$adress=$row_1["adress"];

$data=$row_1["data"];

$tireqty=$row_1["tiregty"];

$oilqty=$row_1["oilgty"];

$sparkqty=$row_1["sparkgty"];

?><tr>
<td> <? echo $id ?> </td><td> <? echo $fio ?> </td><td> <? echo $adress ?> </td><td> <? echo $data ?> </td><td> <? echo $tireqty ?> </td><td> <? echo $oilqty ?> </td><td> <? echo $sparkqty ?> </td>
</tr>
<?
}
?> </table> 
<?
$data = ob_get_contents()
ob_end_clean();
print_r($data2);
return array($data, $data2);
}
}
























