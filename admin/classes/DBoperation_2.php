<?php

include("GetConnection.php");
class DBoperation_2{
	public $conn;

	function __construct() {
		$op=new Connection();
		$this->conn=$op->getConnection();
	}

	function addNewSubscription($days,$add,$prise,$status){
		$sql = "INSERT INTO subscr (day,ads,prise,status) VALUES($days,$add,$prise,'$status');";
		$this->conn->query($sql);
	}

    function getSubscription($stp=0,$name=""){
		$sql="SELECT * FROM  subscr WHERE day LIKE '%$name%' OR ads LIKE '%$name%' OR prise LIKE '%$name%' LIMIT $stp , 10";
		$resultset= $this->conn->query($sql);
		$returndata=array();
		while($data = $resultset->fetch_assoc()) 
		{
				$returndata[]=$data;
		}
		return $returndata;
	}

	function getSubscriptionByID($id){
		$sql="SELECT * FROM  subscr WHERE  id=$id";
		$resultset= $this->conn->query($sql);
		$returndata=array();
		while($data = $resultset->fetch_assoc()) 
		{
				$returndata[]=$data;
		}
		return $returndata;
	}

	function editSubscription($id,$days,$ads,$prise,$status){
		$sql = "UPDATE subscr SET day=$days, ads=$ads, prise=$prise,status='$status' WHERE id=$id;";
		$this->conn->query($sql);
	}

	function __destruct() {
       $this->conn->close();
    }

}

?>