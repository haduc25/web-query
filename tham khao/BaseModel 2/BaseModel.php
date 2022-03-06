<?php 
/**
 * summary
 */
class BaseModel 
{

    public $connect;

    public function __construct()
    {
        $this->connect = new PDO("mysql:host=localhost; dbname=onl1;charset=utf8", 'root', '');
    }

    public static function all(){
        $model = new static();
        $sql = "select * from $model->tableName";
        $stmt = $model->connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
        return $result;
    }

    public static function find($id){
        $model = new static();
        $sql = "select * from $model->tableName where id = $id";
        $stmt = $model->connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
        // var_dump($result);die;
        if (count($result) > 0) {
            return $result[0];
        } else {
            return null;  
        }
    }

    public static function where($arr = []){
        $model = new static();
        $model->queryBuilder = "select * from $model->tableName where ";
      
        if (count($arr) == 2) {
            $model->queryBuilder .= "$arr[0] = '$arr[1]'";
        }
        if(count($arr) == 3) {
            $model->queryBuilder .= "$arr[0] $arr[1] '$arr[2]'";
        }
        return $model;
    }
    public function andWhere($arr = []){
        $this->queryBuilder .= "and ";
        if (count($arr) == 2) {
            $this->queryBuilder .= "$arr[0] = '$arr[1]'";
        }
        if(count($arr) == 3) {
            $this->queryBuilder .= "$arr[0] $arr[1] '$arr[2]'";
        }
        return $this;
    }
    public function orWhere($arr = []){
        $this->queryBuilder .= "or ";
        if (count($arr) == 2) {
            $this->queryBuilder .= "$arr[0] = '$arr[1]'";
        }
        if(count($arr) == 3) {
            $this->queryBuilder .= "$arr[0] $arr[1] '$arr[2]'";
        }
        return $this;
    }
    public function get(){
        $stmt = $this->connect->prepare($this->queryBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($this));
        return $result;
    }
    public function delete($id){
        $this->queryBuilder = "delete from $this->tableName where id = $this->id";
        $stmt = $this->connect->prepare($this->queryBuilder);
        try{

            $stmt->execute();
            return true;
        }catch(Exception $ex){
            var_dump($ex->getMessage());die;
        }
    }
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

        
        $stmt = $this->connect->prepare($this->queryBuilder);
        // var_dump($stmt);die;
        try{
            $stmt->execute();
            return $this;
        }catch(Exception $ex){
            var_dump($ex->getMessage());
            die;
        }
    }
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

        $stmt = $this->connect->prepare($this->queryBuilder);
        try{

            $stmt->execute();
            $this->id = $this->connect->lastInsertId();
            return $this;
        }catch(Exception $ex){
            var_dump($ex->getMessage());die;
        }
    }
}

 ?>

