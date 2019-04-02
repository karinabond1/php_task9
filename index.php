<?php
include_once 'config.php';
include_once 'libs/SelectMultiple.php';
include_once 'libs/Table.php';


$arrSelectOptions = array("volvo"=>"Volvo", "opel"=>"Opel", "audi"=>"Audi");
$selectMult = new SelectMultiple("select-multiple", $arrSelectOptions,"select");
$select = $selectMult->selectMultiple();

include_once 'templates/index.php';
?>