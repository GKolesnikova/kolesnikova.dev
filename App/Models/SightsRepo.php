<?php

namespace App\Models;

class SightsRepo {
	
	public $db;
	
	public function __construct(\App\DB $db) {
		$this->db = $db;
	}
	
	public function getAllSights() {
		$sgl = 'SELECT * FROM sights';
		return $this->db->query($sgl, [], 'App\Models\Sight');	 
	}
}