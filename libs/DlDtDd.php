<?php

class DlDtDd
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

    public function dldtdd()
    {
        $str = "<dl name=".$this->name." class=".$this->class." >";
        foreach($this->rows as $key=>$row){
            $str.="<dt>".$key."</dt><dd>".$row."</dd>";
        }
        $str.="</dl>";
        return $str;
    }

}