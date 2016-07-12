<?php

class Connection{
	public $conn;

	public function getConnection() {
		$connpro=explode(",", $this->getConnectionString());
		$this->conn= new mysqli($connpro[0],$connpro[1],$connpro[2],"thebigads");		
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
		else
		{	
			return $this->conn;
		}
		
	}

	function getConnectionString(){
		$myfile = fopen("../config/DBproperty", "r") or die("Unable to open file!");
		$constr= fgets($myfile);
		fclose($myfile);
		return $constr;
	}
}

?>