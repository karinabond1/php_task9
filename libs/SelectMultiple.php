<?php

class SelectMultiple
{
    private $class;
    private $options;
    private $name;

    public function __construct($class,$options,$name)
    {
        $this->class=$class;
        $this->options=$options;
        $this->name=$name;
    }

    public function selectMultiple()
    {
        $str = "<select name='".$this->name."' class='".$this->class."' multiple>";
        foreach ($this->options as $value=>$option){
            $str.="<option value='".$value."'>".$option."</option>";
        }
        $str.="</select>";
        return $str;
    }
}