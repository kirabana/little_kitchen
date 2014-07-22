<?php 

require_once '../libraries/config.class.php';

class Subject{

	#Property ===============================================!

	public $id 			= 0;
	public $name 		= '';
	public $deleted 	= 0;
	private $db 		= null;

	#MAGIC METHODS ===============================================!

	function __construct($id = 0){
		$this->db = new Database(
			Config::$hostname,
			Config::$username,
			Config::$password,
			Config::$database
			);

		if($id){
			$result = $this->db
			->select('id, name, deleted')
			->from('tb_categories')
			->where('id', $id)
			->get_one();

			$this->id = $result['id'];
			$this->name = $result['name'];
			$this->deleted = $result['deleted'];
		}
	}

	#NORMAL METHODS ===============================================!

	public function save(){
		#if this is is 0 then no subject has been alrady loaded
		if($this->id == 0 && $this->name != ''){
			$this->db
				->set(array(
					'name'		=> $this->name,
					'deleted'	=> $this->deleted
				))
			->insert('tb_categories');
		}else{
			$this->db
				->set(array(
					'name'		=> $this->name,
					'deleted'	=> $this->deleted
					))
				->where('id', $this->id)
				->update('tb_categories');
		}
	}

	public function delete(){
		$this->deleted = 1;
		$this->save();
	}

}