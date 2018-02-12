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

	private function get_user_hash($username){

		try {

			$stmt = $this->_db->prepare('SELECT member_id, username, password FROM blog_members WHERE username = :username');
			$stmt->execute(array('username' => $username));

			return $stmt->fetch();

		} catch(PDOException $e) {
			echo '<p class="error">'.$e->getMessage().'</p>';
		}
	}
