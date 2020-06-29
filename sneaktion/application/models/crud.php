<?php 
 
class crud extends CI_Model{
    function upl_img($data){
		return $this->db->set($data)->insert("threads");
	}
}