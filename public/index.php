<?php 

// require_once '../libraries/database.class.php';
// require_once '../libraries/model.lib.php';
// require_once '../models/entry_list.collection.php';

// $p = new Entry_list($_GET['category_id']);

// $c = new model('tb_posts');
// $c->load(1);

// $n = $p->count_items();

// include '../views/header.php';
// include '../views/navigation.php';
// include '../views/category.php';
// include '../views/page.php';
// include '../views/footer.php';


require_once '../libraries/database.class.php';
require_once '../libraries/config.class.php';
require_once '../libraries/model.lib.php';
require_once '../libraries/form.lib.php';
require_once '../libraries/hash.lib.php';
require_once '../libraries/login.lib.php';
require_once '../libraries/model.lib.php';

require_once '../models/entry_list.collection.php';
require_once '../models/page_collection.php';


include '../views/header.php';
include '../views/navigation.php';
include '../public/category.php';


if($_GET['category_page_id'] == true){

	include '../views/category_page.php';

}else if($_GET['entry_id'] == true){

	include '../views/entry.php';

}else{

	include '../views/page.php';

}

include '../views/footer.php';