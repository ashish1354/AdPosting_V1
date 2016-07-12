<?php
class Validation{

	function checkIDandPass($id,$pass){
  	$file = explode( PHP_EOL, file_get_contents( "../config/info" ));
    print_r($file);
    $line = null;
    $pattern = $id.":".$pass;
    foreach ( $file as $line ) 
    {
        if($line==$pattern)
        {
            return true;
        }
    }
    return false;
  }
}
?>