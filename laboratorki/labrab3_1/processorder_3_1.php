<?
require('class.php');
$page = new Page();
&page -> header();
$page -> connect();
$page -> processororder($tireqty, $oilqty, $fio, $address);
$page -> footer();
?>