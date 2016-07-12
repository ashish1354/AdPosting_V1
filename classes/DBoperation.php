<?php

include("../admin/classes/GetConnection.php");
class DBoperation{
	public $conn;

	function __construct() {
		$op=new Connection();
		$this->conn=$op->getConnection();
	}

    function getSubCategory($stp=0){

		$sql="SELECT s.id id,s.name name,s.slug slug,s.keyy keyy,s.cid cid,c.name cname  FROM sub_category s,category c WHERE s.cid=c.id ;";
		$resultset= $this->conn->query($sql);
		$returndata=array();
		while($data = $resultset->fetch_assoc()) 
		{
				$returndata[]=$data;
		}
		return $returndata;
	}

	function getCategoryName(){
		$sql="SELECT * FROM  category ;";
		$resultset= $this->conn->query($sql);
		$returndata=array();
		while($data = $resultset->fetch_assoc()) 
		{
				$returndata[]=$data;
		}
		return $returndata;
	}

	function searchADByCategory($stp=0,$cid,$search){
		$sql="SELECT a.id adID,a.head adHead, a.content content,a.contact contact, s.name S_Name,s.id S_ID,c.name C_Name ,c.id C_id FROM ad a,sub_category s,category c WHERE a.sid=s.id AND s.cid=c.id AND a.status='1' AND c.id LIKE '%$cid%' AND ( a.head LIKE '%$search%' OR a.content LIKE '%$search%') LIMIT $stp,10";
		$resultset= $this->conn->query($sql);
		$returndata=array();
		while($data = $resultset->fetch_assoc()) 
		{
				$returndata[]=$data;
		}
		return $returndata;

	}

	function __destruct() {
       $this->conn->close();
    }

    function getArray($resultset){
    	$returndata=array();
		while($data = $resultset->fetch_assoc()) 
		{
				$returndata[]=$data;
		}
		return $returndata;
    }

    function getADByID($id){
    	$sql="SELECT a.id ID,a.head HEAD,a.content CONTENT,a.contact CONTACT,s.name C_NAME FROM ad a,sub_category s WHERE a.sid=s.id AND a.status='1' AND a.id=$id";
    
		$resultset= $this->conn->query($sql);
		$returndata=array();
		while($data = $resultset->fetch_assoc()) 
		{
				$returndata[]=$data;
		}
		return $returndata;
    }





    function executeQuery($sql){
    	$this->conn->query($sql);
    }


    //---------------------------------Create New User--------------------------------------
    function createNewUser($name,$email,$pwd){
    	$sql="INSERT INTO user (name,email,pwd) VALUES('$name','$email','$pwd');";
    	if ($this->conn->query($sql) === TRUE) {
		  	return $this->lastInsertedID();
		} 
		else {
		   return 0;
		}
    }

    function lastInsertedID(){	
		$result = $this->conn->query("SELECT LAST_INSERT_ID() ID;");  
		$row = $result->fetch_assoc();
		return $row["ID"];
	}

	//----------------------------------
}

?>