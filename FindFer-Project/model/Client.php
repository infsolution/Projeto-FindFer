<?php

include 'User.php';

Class Client implements User{
	private $name;
	private $location;
	private $marketers;
	function __construct($name) {
            $this->name=$name;
        }


        public function registerUser() {
		return $this->name;
	}
	
	public function requestRelationship() {
		return NULL;
	}
}
?>
