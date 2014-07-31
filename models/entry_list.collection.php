<?php 

require_once '../libraries/config.class.php';

class Entry_list{

	public $items = array(); //holds content in database
	private $db;
	public $per_page = 7;
	private $count = null;
	private $id = false;

	public function __construct($id = false, $page = 1){
		$this->db = new Database(
			Config::$hostname,
			Config::$username,
			Config::$password,
			Config::$database
			);

		$this->id = $id;

		$this->db
			->select('*')
			->from('tb_posts')
			->where('deleted', '0') //if they are not deleted. Deleted =0
			->limit(($page-1)*$this->per_page, $this->per_page);
		
		if($id){
			$this->db->where('category_id', $id);
		}

		$this->items = $this->db->get();
	}

	public function count_items(){
		if($this->count == null){
			$this->db
				->select('id')
				->from('tb_posts')
				->where('deleted', '0');

			if($this->id){
				$this->db->where('category_id', $this->id);
			}

			$result = $this->db->get();

			$this->count = count($result);
		}else{
			return $this->count;
		}
	}
}

