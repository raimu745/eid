<?php

interface class1{
  public function test();
}

interface class2{
  public function test();
}

class demo implements class1,class2{
    public function test(){
    	echo "interface class";
    }
}

$obj = new demo();
$obj->test();

?>