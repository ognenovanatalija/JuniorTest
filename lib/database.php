<?php
class Database
{
	//class Attributes
	private $db_servername = "localhost";
	private $db_username   = "root";
	private $db_password   = "";
	private $db_name	   = "juniortest";
	private $conn		   = null;


	//class methods
	public function __construct(){
		
		try
		{
			$this->conn = new PDO("mysql:host=$this->db_servername;dbname=$this->db_name", $this->db_username, $this->db_password);

  // set the PDO error mode to exception
  $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";
		}catch(PDOException $e) {
			echo "Connection failed: " . $e->getMessage();
		}
	}


    
	public function insertRow($table_name,$columns,$columns_value){
	 $sql = "INSERT INTO $table_name ($columns) VALUES ($columns_value)";
	  // use exec() because no results are returned
	  $stmt=$this->conn->prepare($sql);
	  $stmt->execute();
	}

	public function deleteRow($table_name,$pk_name,$pk_value){

		    //delete from administrators where admin_id=4 (ime na primary key pk_name = na konkretnata vrednost pk_value)
		$sql="DELETE FROM $table_name     WHERE $pk_name=$pk_value";
		$stmt=$this->conn->prepare($sql);
		$stmt->execute();
	}

	public function selectRow($table_name){
		$sql="SELECT * FROM $table_name";
		$stmt=$this->conn->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}
	
	public function updateRow($table_name,$columns,$pk_name,$pk_value){
		$sql = "UPDATE $table_name SET $columns WHERE $pk_name=$pk_value";
			
		// Prepare statement
		$stmt = $this->conn->prepare($sql);
				
		// execute the query
		$stmt->execute();
	}



public function callStoredProcedureWithParams($StoredProcedure,$column_value){

	//call stored procedure from database
	//call   _insertProduct('weightParam','sizeParam','hwlParam');
	$sql=" CALL ".$StoredProcedure." (".$column_value.")";
	$con=$this->conn;   
	$stmt=$con->prepare($sql);
	$stmt->execute();
}
}



?>