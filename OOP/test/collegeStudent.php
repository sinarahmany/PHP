<?php
require_once('student.php');
class CollegeStudent extends Student{
 	private $CollegeName;
 	public function setCollegeName($CollegeName){
 		$this->CollegeName = $CollegeName;
 	}
 	public function getCollegeName(){
 		return $this->CollegeName ;
 	}

 	public function __construct($name,$lastname,$CollegeName){
 		parent::__construct($name,$lastname);
 		$this->CollegeName = $CollegeName;
 	}
}
