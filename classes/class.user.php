<?php
	private $db;
	//database conncetion for all methods in this class
	public function __construct($db) {
		$this->db = $db;
	}
	//checking if the user is signed in or not
	public function is_signed_in() {
		if(isset($_SESSION['signedin']) && $_SESSION['signedin'] == true) return true;
	}
	//encryption for passwords
	public function encrypting($value) {
		return $hash = crypt($value, 'muhuhahaha'.substr(str_replace('+', '.', base64_encode(sha1(microtime(true), true))), 0, 22));
	}
	//verifying encryption
	private function verify_encryption($passwd, $hash){
		return $hash == crypt($passwd, $hash); //returning boolean
	}
	// getting hashed passwd by passing uname to db
	private function get_uhash($uname){
		try {
			$cm = $this->db->prepare('SELECT passwd FROM mem WHERE uname = :uname');
			$cm->execute(array('uname' => $uname));
			$row=$cm->fetch();
			return $row['passwd'];
		}catch(PDOException $e){
			echo '<p class="error">'.$e->getMessage().'</p>';
		}
	}
		}
	}