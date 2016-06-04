<?php
class Person{
	function __construct($name,$sex){
		$this->name=$name;
		$this->sex=$sex;
	}
	function showName(){
		echo $this->name;
	}
	function showSex(){
		echo $this->sex;
	}
}
class Worker extends Person{
	function __construct($name,$sex,$job){
		parent::__construct($name,$sex);
		$this->job=$Job;
	}
	function showJob(){
		echo $this->job;
	}
}
$w1 = new Worker('blue','男','打杂的');
$w1->showName();
$w1->showJob();
?>