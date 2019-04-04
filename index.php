<?php
include_once 'config.php';
include_once 'libs/SelectMultiple.php';
include_once 'libs/Table.php';
include_once 'libs/UlOl.php';

$arrSelectOptions = array("volvo"=>"Volvo", "opel"=>"Opel", "audi"=>"Audi");
$selectMult = new SelectMultiple("select-multiple", $arrSelectOptions,"select");
$select = $selectMult->selectMultiple();


$arrTableRow1 = array("Volvo", "Opel", "Audi");
$arrTableRow2 = array("BMW ", "Mercedes", "Porsche");
$arrTableRows = array($arrTableRow1,$arrTableRow2);
$tableRows = new Table("table-check", $arrTableRows,"table");
$table = $tableRows->table();

$arrUlRows = array("Volvo", "Opel", "Audi");
$ulRows = new UlOl("ul-global", $arrUlRows,"ul");
$ul = $ulRows->ul();
$ol = $ulRows->ol();


include_once 'templates/index.php';
?>