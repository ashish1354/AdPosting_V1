<?php

include("GetConnection.php");
class DBoperation{
	public $conn;

	function __construct() {
		$op=new Connection();
		$this->conn=$op->getConnection();
	}

	function addNewCategory($name,$slug,$key){
		$sql = "INSERT INTO category (name,slug,keyy) VALUES ('$name','$slug','$key')";
		echo $sql;
		if ($this->conn->query($sql) === TRUE) {
		  	return $this->lastInsertedID();
		} 
		else {
		   return 0;
		}
	}

	function editCategory($id,$name,$slug,$key){
		$sql = "UPDATE category SET name='$name', slug='$slug', keyy='$key' WHERE id=$id";
		$this->conn->query($sql);
	}
	function addNewSubCategory($cid,$name,$slug,$key){
		$sql = "INSERT INTO sub_category (cid,name,slug,keyy) VALUES ($cid,'$name','$slug','$key')";
		$this->conn->query($sql);
	}

	function editSubCategory($id,$cid,$name,$slug,$key){
		$sql = "UPDATE sub_category SET cid=$cid ,name='$name', slug='$slug', keyy='$key' WHERE id=$id";
		$this->conn->query($sql);
	}

	function getCategory($stp=0,$name=""){
		$sql="SELECT * FROM  category WHERE name LIKE '%$name%' LIMIT $stp , 10";
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

	function getSubCategory($stp=0,$name="",$cid=""){

		$sql="SELECT s.id id,s.name name,s.slug slug,s.keyy keyy,s.cid cid,c.name cname  FROM sub_category s,category c WHERE s.cid=c.id and s.keyy LIKE '%$name%' and s.cid LIKE '%$cid%' LIMIT $stp,10;";
		$resultset= $this->conn->query($sql);
		$returndata=array();
		while($data = $resultset->fetch_assoc()) 
		{
				$returndata[]=$data;
		}
		return $returndata;
	}

	function getSubCategoryDetails($id){
		$sql="SELECT * FROM  sub_category WHERE id=$id ;";
		$resultset= $this->conn->query($sql);
		$returndata=array();
		while($data = $resultset->fetch_assoc()) 
		{
				$returndata[]=$data;
		}
		return $returndata;
	}

	function getALLSubCategoryDetails(){
		$sql="SELECT * FROM  sub_category ;";
		$resultset= $this->conn->query($sql);
		$returndata=array();
		while($data = $resultset->fetch_assoc()) 
		{
				$returndata[]=$data;
		}
		return $returndata;
	}

	function getSubCategoryDetailsByCAtegory($cid=""){
		$sql="SELECT * FROM  sub_category WHERE cid=$cid ;";
		$resultset= $this->conn->query($sql);
		$returndata=array();
		while($data = $resultset->fetch_assoc()) 
		{
				$returndata[]=$data;
		}
		return $returndata;
	}

	function getCategoryDetails($id){
		$sql="SELECT * FROM  category WHERE id=$id ;";
		$resultset= $this->conn->query($sql);
		$returndata=array();
		while($data = $resultset->fetch_assoc()) 
		{
				$returndata[]=$data;
		}
		return $returndata;
	}

	function deleteCategory($id){
		$sql="DELETE FROM category WHERE id=$id";
		$this->conn->query($sql);
	}

	function deleteSubCategory($id){
		$sql="DELETE FROM sub_category WHERE id=$id";
		$this->conn->query($sql);
	}

	function lastInsertedID(){	
		$result = $this->conn->query("SELECT LAST_INSERT_ID() ID;");  
		$row = $result->fetch_assoc();
		return $row["ID"];
	}
//-------------------------------------------------------------------------------------------------
//------------------------------AD Management------------------------------------------------------

	function addNewAD($sid,$head,$content,$contact){
		$sql = "INSERT INTO ad (sid,head,content,contact) VALUES ($sid,'$head','$content','$contact')";
		if ($this->conn->query($sql) === TRUE) {
		  	return $this->lastInsertedID();
		} 
		else {
		   return 0;
		}
	}

	function getADWithCondition($stp=0,$cid="",$sid="",$head=""){
		$sql="SELECT a.id adID,a.head adHead, a.content content,a.contact contact, s.name S_Name,s.id S_ID,c.name C_Name ,c.id C_id  FROM ad a,sub_category s,category c WHERE a.sid=s.id AND s.cid=c.id";
		$sql.=" AND c.id LIKE '%$cid%' AND s.id LIKE '%$sid%' AND a.head LIKE '%$head%' LIMIT $stp,10";
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

}

?>