<?php
//crtl+alt+c to open page in chrome 
class Student{

	public static $instanceCount =0 ;


	private $name;
	private $lastname;
	//getters and setters
	public function setName($name){
		$this->name = $name;
	}
	public function getName(){
		return $this->name ;
	}

	public function setLastName($lastname){
		$this->lastname = $lastname;
	}
	public function getLastName(){
		return $this->lastname ;
	}
	public function greeting(){
		//if we don`t say this it will not work same as java
		echo "$this->name  $this->lastname </br>";
	}

	//constructor
	public function __construct($name,$lastname){
		//we use self instead of this for static objects
		self::$instanceCount +=1;
		$this->name = $name;
		$this->lastname = $lastname;
	}
	//destructor
	public function __destruct(){
		echo "<div> $this->name is dead,RIP </div>";
	}
}
