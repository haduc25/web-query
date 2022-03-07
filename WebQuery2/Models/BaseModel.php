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
        // var_dump($this->tableName); exit();
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

    //delete
    public function delete($id){
        // var_dump($id); exit();
        // var_dump($this->tableName); exit();
        $this->queryBuilder = "delete from $this->tableName where id = $id";
        // var_dump($queryBuilder); exit();

        $stmt = $this->conn->prepare($this->queryBuilder);
        try{

            $stmt->execute();
            return true;
        }catch(Exception $ex){
            var_dump($ex->getMessage());die;
        }
    }

    //edit
    function update(){
        $this->queryBuilder = "update $this->tableName set ";

        foreach ($this->columns as $col) {
            if($this->{$col} == null){
                continue;
            }
            $this->queryBuilder .= " $col = '" . $this->{$col} . "', ";
        }

        $this->queryBuilder = rtrim($this->queryBuilder, ", ");

        $this->queryBuilder .= " where id = $this->id";

        
        $stmt = $this->conn->prepare($this->queryBuilder);
        // var_dump($stmt);die;
        try{
            $stmt->execute();
            return $this;
        }catch(Exception $ex){
            var_dump($ex->getMessage());
            die;
        }
    }

    //find 
    public static function find($id){
        // echo $id; die;
        $model = new static();
        $sql = "select * from $model->tableName where id = $id";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
        // var_dump($result[0]); die;

        if (count($result) > 0) {
            return $result[0];
        } else {
            return null;  
        }
    }



}

 ?>