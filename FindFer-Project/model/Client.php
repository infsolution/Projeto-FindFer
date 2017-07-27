<?php

require_once 'User.php';

Class Client implements User{
        private $idClient;
        private $name;
        private $qualification;
        private $coordinates;
        private $account;
        private $marketers;
        private $media;
	function __construct($name, $coordinates) {
            $this->name=$name;
            $this->coordinates = $coordinates;
        }


        public function registerUser() {
		return $this->name;
	}
	
	public function requestRelationship() {
		return NULL;
	}

    public function changeAccount() {
        
    }

}
?>
