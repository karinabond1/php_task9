<?php
/**
 * Created by PhpStorm.
 * User: karin
 * Date: 04.04.2019
 * Time: 23:00
 */

class Checkbox
{
    private $class;
    private $rows;
    private $name;

    public function __construct($class,$rows,$name)
    {
        $this->class=$class;
        $this->rows=$rows;
        $this->name=$name;
    }

    public function checkbox()
    {
        $str = "<form name=".$this->name." class=".$this->class." >";
        foreach($this->rows as $key=>$row){
            $str.="<p><input type='checkbox'>".$row."</p>";
        }
        $str.="</form>";
        return $str;
    }
}