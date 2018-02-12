<?php

	private $db;

	public function __construct($db){
		$this->db = $db; 
	}


	public function is_logged_in(){
		if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
			return true;
		}        
	}
