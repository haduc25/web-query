<?php 

require_once 'BaseModel.php';

/**
 * 
 */
class Products extends BaseModel
{
		public $tableName = 'products';
        public $columns = ['name','price','supplier','stock'];
}

 ?>