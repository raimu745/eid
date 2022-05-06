<?php


class test{

	const msg = "going to jaita";

	function hello(){
		echo self::msg;
	}
}

 // echo test::msg;
$obj = new test();
$obj->hello();

?>