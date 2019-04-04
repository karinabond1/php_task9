<?php

class UlOl
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

    public function ul()
    {
        $str = "<ul name='".$this->name."' class='".$this->class."' >";
        foreach($this->rows as $key=>$row){
            $str.="<li>".$row."</li>";
        }
        $str.="</ul>";
        return $str;
    }
    public function ol()
    {
        $str = "<ol name='".$this->name."' class='".$this->class."' >";
        foreach($this->rows as $key=>$row){
            $str.="<li>".$row."</li>";
        }
        $str.="</ol>";
        return $str;
    }
}