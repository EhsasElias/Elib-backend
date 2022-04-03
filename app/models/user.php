<?php
namespace coding\app\models;

class User extends Model{
    public static $tableName="users";

    function select(){
        $this->id=1;
        
    }
    function __construct()
    {
        
    }
    function __set($name, $value)
    {
        $this->$name=$value;  
         
    }
    function __get($name)
    {
        return $this->$name;
    }
    function save(){
        $value=[];
        $columns=[];
   
        foreach(get_object_vars($this) as $key=>$propery){
            if($propery != self::$tableName)
            $values[]=$propery;
            $columns[]=$key;
        }
        $values=implode(", ",$values);
        $columns=implode(", ",$columns);
      $sql_query = "insert into ".self::$tableName." (".$columns." ) values (".$values.")";
      echo $sql_query;
    }
}
?>