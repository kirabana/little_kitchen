<?php 

require_once '../libraries/config.class.php';
require_once '../libraries/database.class.php';

class Page_collection{
	public $items = array(); //sets the $items here as an empty array
	private $db;

	public function __construct($id){
		$this->db = new Database(
			Config::$hostname,
			Config::$username,
			Config::$password,
			Config::$database
			);

		$this->items = $this ->db
		->select('*')
		->from('tb_posts')
		->where('deleted', '0')
		->get();
	}
}