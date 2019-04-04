<?php
include_once 'config.php';
include_once 'libs/SelectMultiple.php';
include_once 'libs/Table.php';
include_once 'libs/UlOl.php';
include_once 'libs/DlDtDd.php';
include_once 'libs/RadioButton.php';
include_once 'libs/Checkbox.php';

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

$arrDlDtDdRows = array("GIF"=>"Формат графических файлов, широко применяемый при создании сайтов. 
   GIF использует 8-битовый цвет и эффективно сжимает сплошные цветные области, 
   при этом сохраняя детали изображения.","JPEG"=>"Популярный формат графических файлов, широко применямый при создании 
  сайтов и хранения изображений. JPEG поддерживает 24-битовый цвет и сохраняет 
  яркость и оттенки цветов в фотографиях. Данный формат называют сжатием с потерями, 
  поскольку алгоритм JPEG выборочно отвергает данные. Метод сжатия может исказить 
  деталь в рисунке, особенно содержащий текст или изображение с четкими краями. 
  Формат JPEG не поддерживает прозрачность, когда вы сохраняете фотографию в формате 
  JPEG, прозрачные пиксели заполняются определенным цветом");
$dldtddRows = new DlDtDd("dl-global",$arrDlDtDdRows,"dl");
$dl = $dldtddRows->dldtdd();

$arrRadioButttons = array("BMW ", "Mercedes", "Porsche");
$radioButttonsRows = new RadioButton("radio-global",$arrRadioButttons,'radio');
$radioButttons = $radioButttonsRows->radioButton();

$arrCheckbox = array("Volvo", "Opel", "Audi");
$checkboxRows = new Checkbox("checkbox-global",$arrCheckbox,'checkbox');
$checkbox = $checkboxRows->checkbox();


include_once 'templates/index.php';
?>