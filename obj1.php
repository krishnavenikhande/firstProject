<?php
class emp{
	public $name;
	public $age;
	public $sal;
	
	function work(){
		echo $this->name." working in TCS";
	}
}

$obj1=new emp();
$obj1->name='RAM';
$obj1->age=21;
$obj1->sal=12000;
$obj1->work();
print_r($obj1);

?>