<?php 

require_once 'BaseModel.php';

/**
 * 
 */
class Posts extends BaseModel
{
		public $tableName = 'posts';
        public $columns = ['title','description','author','createby'];
}

 ?>