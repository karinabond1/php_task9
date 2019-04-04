<?php
/**
 * Created by PhpStorm.
 * User: karin
 * Date: 04.04.2019
 * Time: 22:52
 */

class RadioButton
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

    public function radioButton()
    {
        $str = "<form name=".$this->name." class=".$this->class." >";
        foreach($this->rows as $key=>$row){
            $str.="<p><input type='radio'>".$row."</p>";
        }
        $str.="</form>";
        return $str;
    }
}