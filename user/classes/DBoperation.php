<?php

include("../../admin/classes/GetConnection.php");
class DBoperation{
	public $conn;

	function __construct() {
		$op=new Connection();
		$this->conn=$op->getConnection();
	}
//------------Start Functions-------------------------------------------------------------------------

	function checkLoginCredentials($email,$pass){
		$sql="SELECT * FROM user WHERE email='$email' AND pwd='$pass' ;";
		$resultset= $this->conn->query($sql);
		$data = $resultset->fetch_assoc();
		return $data['id'];
	}

	function getUserDetailsById($id){
		$sql="SELECT * FROM user WHERE id=$id;";
		$resultset= $this->conn->query($sql);
		$data = $resultset->fetch_assoc();
		return $data;
	}

	function getSubscription($stp=0,$name=""){
		$sql="SELECT * FROM  subscr WHERE status='TRUE' LIMIT $stp , 5";
		$resultset= $this->conn->query($sql);
		$returndata=array();
		while($data = $resultset->fetch_assoc()) 
		{
				$returndata[]=$data;
		}
		return $returndata;
	}

	function getSubscriptionByID($id){
		$sql="SELECT * FROM  subscr WHERE id=$id ;";
		$resultset= $this->conn->query($sql);
		$data = $resultset->fetch_assoc();
		return $data;
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

	function addNewAD($sid,$head,$content,$contact,$uid){
		$sql = "INSERT INTO ad (sid,head,content,contact,uid,status,edt) VALUES ($sid,'$head','$content','$contact',$uid,'0','TRUE')";
		if ($this->conn->query($sql) === TRUE) {
		  	return $this->lastInsertedID();
		} 
		else {
		   return 0;
		}
	}

	function updateAD($id,$sid,$head,$content,$contact){
		$sql = "UPDATE ad SET sid=$sid, head='$head', content='$content',contact='$contact' WHERE id=$id;";
		echo $sql;
		$this->conn->query($sql);
	}

	function enableAD($ad_id){
		$sql = "UPDATE ad SET status='1',edt='FALSE' WHERE id=$ad_id; ";
		echo $sql;
		$this->conn->query($sql);
	}

	function disableAD($ad_id){
		$sql = "UPDATE ad SET status='0' WHERE id=$ad_id; ";
		echo $sql;
		$this->conn->query($sql);
	}

	function disableAllADByID($uid){
		$sql = "UPDATE ad SET status=0 WHERE status=1 AND uid=$uid ; ";
		$this->conn->query($sql);
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

	function getADWithCondition($stp=0,$cid="",$sid="",$head="",$id){
		$sql="SELECT a.id adID,a.head adHead, a.content content,a.contact contact,a.edt edt,a.status status, s.name S_Name,s.id S_ID,c.name C_Name ,c.id C_id  FROM ad a,sub_category s,category c WHERE a.sid=s.id AND s.cid=c.id AND a.uid=$id";
		$sql.=" AND c.id LIKE '%$cid%' AND s.id LIKE '%$sid%' AND a.head LIKE '%$head%' LIMIT $stp,10";
		$resultset= $this->conn->query($sql);
		$returndata=array();
		while($data = $resultset->fetch_assoc()) 
		{
				$returndata[]=$data;
		}
		return $returndata;
	}

	function getADByID($id,$uid){
    	$sql="SELECT * FROM ad WHERE id=$id AND uid=$uid AND status=0 AND edt='TRUE';";
		$resultset= $this->conn->query($sql);
		$returndata=array();
		while($data = $resultset->fetch_assoc()) 
		{
				$returndata[]=$data;
		}
		return $returndata;
    }

    function getPublisedAdCountByUid($uid){
    	$result = $this->conn->query("select count(id) tt_ad  from ad where uid=$uid AND status='1';");  
		$row = $result->fetch_assoc();
		return $row["tt_ad"];
    }
    function getCategoryIDBySubcategoryId($sid){
    	$sql="SELECT * FROM sub_category WHERE id=$sid;";
    	$resultset= $this->conn->query($sql);
		$data = $resultset->fetch_assoc();

		return $data['cid'];
    }

    function applySubscroptionOnUser($ads,$id){
    	$sql="UPDATE user SET ads_li=$ads,sst=sysdate(), est=ADDDATE(sysdate(),INTERVAl $ads DAY) WHERE id=$id ;";
    	$this->conn->query($sql);
    }

    function addTxan($uid,$pay,$status){
    	$sql="INSERT INTO payment (uid,pay_USD,pay_status) VALUES ($uid,'$pay','$status') ;";
    	$this->conn->query($sql);
    }
//------------Extra Database Function-----------------------------------------------------------------

    function getDateDiff($a){
    	$sql="SELECT TIMEDIFF('$a',sysdate())+0 diff;";
    	$result = $this->conn->query($sql);  
		$row = $result->fetch_assoc();
		return $row["diff"]<0 ? TRUE: FALSE;
    }

//------------End Functions---------------------------------------------------------------------------

	function __destruct() {
       $this->conn->close();
    }

    function lastInsertedID(){	
		$result = $this->conn->query("SELECT LAST_INSERT_ID() ID;");  
		$row = $result->fetch_assoc();
		return $row["ID"];
	}
}

?>