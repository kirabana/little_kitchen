<?php 
require_once '../models/category_collection.php';
 
$categories = new Category_collection();

include '../views/category.php';