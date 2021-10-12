<?php
include_once 'DbConfig.php';

class Crud extends DbConfig
{
	public function __construct()
	{
		parent::__construct();
	}
	
	
	
		public function getData($query){
		
		$res_query = $this->connection->query($query);
		
		if($res_query == false){
			return false;
		}
		
		$res = array();
		
		while($row = $query->fetch_assoc()){
			$res[] = $row;
		}
		
		return $res;
		
	}
	
		
	public function execute($query) 
	{
		$result = $this->connection->query($query);
		
		if ($result == false) {
			echo 'Error: cannot execute the command';
			return false;
		} else {
			return true;
		}		
	}
	
	public function delete($id, $table) 
	{ 
		$query = "DELETE FROM $table WHERE id = $id";
		
		$result = $this->connection->query($query);
	
		if ($result == false) {
			echo 'Error: cannot delete id ' . $id . ' from table ' . $table;
			return false;
		} else {
			return true;
		}
	}

	public function escape_string($value)
	{
		return $this->connection->real_escape_string($value);
	}
}



?>
