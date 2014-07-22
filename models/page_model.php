<?php 

require_once '../libraries/config.class.php';

class Page{

	#Property ===============================================!

	public $id = 0;
	public $title = '';
	public $image = '';
	public $description = '';
	public $ingredients = '';
	public $method = '';
	public $category_id = '';
	public $deleted = 0;
	private $db = null;

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
			->select('id, title, image, description, ingredients, method, category_id')
			->from('tb_posts')
			->where('id', $id)
			->get_one();

			$this->id = $result['id'];
			$this->title = $result['title'];
			$this->image = $result['image'];
			$this->description= $result['description'];
			$this->ingredients= $result['ingredients'];
			$this->method= $result['method'];
			$this->category_id = $result['category_id'];
		}
	}

	#NORMAL METHODS ===============================================!

		public function save(){
			#if this is is 0 then no subject has been alrady loaded
			if($this->id == 0 && $this->title != '' && $this->description != ''	&& $this->ingredients != ''	&& $this->method != ''){
				$this->db
					->set(array(
						'title'			=> $this->title,
						'image'			=> $this->image,
						'description'	=> $this->description,
						'ingredients'	=> $this->ingredients,
						'method'		=> $this->method,
						'category_id'	=> $this->category_id,
						'deleted'		=> $this->deleted
					))
				->insert('tb_posts');
			}else{
				$this->db
					->set(array(
						'title'			=> $this->title,
						'image'			=> $this->image,
						'description'	=> $this->description,
						'ingredients'	=> $this->ingredients,
						'method'		=> $this->method,
						'category_id'	=> $this->category_id,
						'deleted'		=> $this->deleted
						))
					->where('id', $this->id)
					->update('tb_posts');
			}
		}

		public function delete(){
			$this->deleted = 1;
			$this->save();
		}

}