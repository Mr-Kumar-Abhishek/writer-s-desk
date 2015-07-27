<?php
	private $db;
	//database conncetion for all methods in this class
	public function __construct($db) {
		$this->db = $db;
	}
	