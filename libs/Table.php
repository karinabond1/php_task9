<?php

class Table
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

    public function table()
    {
        $str = "<table name='".$this->name."' class='".$this->class."' >";
        foreach($this->rows as $key=>$row){
            $str.="<tr>";
            foreach($row as $key2=>$row2){
                $str.="<td>".$row2."</td>";
            }
            $str.="</tr>";
        }
        $str.="</table>";
        return $str;
    }
}