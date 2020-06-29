<?php 
 
class Model_user extends CI_Model{	
function getAll($where="")
	{
		if($where) $this->db->where($where);
		return $this->db->get("user");
	}
	function getAdmin($where="")
	{
		if($where) $this->db->where($where);
		return $this->db->get("admin");
	}
}
?>