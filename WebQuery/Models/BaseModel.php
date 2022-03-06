<?php 

/**
 * 
 */
class BaseModel
{
	public $conn;
	public function __construct()
	{
		$this->conn = new PDO("mysql:host=localhost; dbname=webquery; charset=utf8",'root', '');
	}

	public static function getAll()
	{
		$model = new static();
		$sql = "select * from $model->tableName";
		$stmt = $model->conn->prepare($sql); 		
		//bien $stmt de chay function
		//Câu lệnh prepare là một tính năng được sử dụng để thực thi các câu lệnh SQL giống nhau (hoặc tương tự) lặp đi lặp lại với hiệu quả cao.
		$stmt->execute(); //thuc thi lenh sql
		$rs = $stmt->fetchALl(PDO::FETCH_CLASS, get_class($model));
		return $rs;
	}

	//insert
	   public function insert(){
        $this->queryBuilder = "insert into $this->tableName (";
        foreach ($this->columns as $col) {
            if($this->{$col} == null){
                continue;
            }
            $this->queryBuilder .= "$col, ";
        }
        $this->queryBuilder = rtrim($this->queryBuilder, ", ");
        $this->queryBuilder .= ") values ( ";
        foreach ($this->columns as $col) {
            if($this->{$col} == null){
                continue;
            }
            $this->queryBuilder .= "'" . $this->{$col} ."', ";
        }
        $this->queryBuilder = rtrim($this->queryBuilder, ", ");
        $this->queryBuilder .= ")";

        $stmt = $this->conn->prepare($this->queryBuilder);
        try{

            $stmt->execute();
            $this->id = $this->conn->lastInsertId();
            return $this;
        }catch(Exception $ex){
            var_dump($ex->getMessage());die;
        }
    }



}

 ?>