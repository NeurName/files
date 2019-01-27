<?
require('class.php');
$page = new Page();
$page -> header();
$page -> connect();
$page -> vieworders();
$page -> footer();
?>