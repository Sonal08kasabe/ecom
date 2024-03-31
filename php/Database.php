<?php 
class Database{

public $hostname="localhost";
public $username="host";
public $password="";
public $db="ecom";
private $mysqli="";
public $message = array(); 
private $result = array();


function __construct($hostname,$username,$password,$db){

    $this->connect= new mysqli($this->$hostname,$this->$username,$this->$password,$this->$db);

    if(!$this->connect){
       die ("could not connect to database".$this->$db);
    }

}
public function insert(){
   
   // $sql="INSERT INTO users "
}

public function select($tableName){

    $sql="SELECT * from $tableName";
    $exe= mysqli_query($this->connect,$sql);
    
    //$this->result=$exe->fetch_all(MYSQLI_ASSOC);

    print_r($this->result);

    if ($exe->num_rows > 0) {
        array_push($this->message, 1);
    } else {
        array_push($this->message , 0);
    }

   return $this->message;
}
}

 
$db = new database();



?>

