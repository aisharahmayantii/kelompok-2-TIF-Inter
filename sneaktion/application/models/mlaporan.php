<?php 
 
class mlaporan extends CI_Model{	
	function cekstatus(){		
		return $this->db->get_where('transaksi', array('status =' => 'Proses'));
    }
    function selesai(){		
		return $this->db->get_where('transaksi', array('status =' => 'Selesai'));
    }
}
?>