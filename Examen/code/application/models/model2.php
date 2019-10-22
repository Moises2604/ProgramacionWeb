<?php 
if (! defined('BASEPATH')){
  exit('No direct script acces allowed');
}
class model2 extends CI_MODEL{
  	public function getActor(){
  		//$this -> load -> database->('default',TRUE);
  		return $this ->db-> select ('c.*')
  		->from('actor AS c')
  		->get('')
  		->result();

  	}
  	} 
 ?>