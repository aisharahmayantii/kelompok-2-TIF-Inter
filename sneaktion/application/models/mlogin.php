<?php 
 
class mlogin extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
	function tampil_dataadmin(){
		return $this->db->get('admin');
	}
	function tampil_datathreads(){
		return $this->db->get('threads');
	}
	function input_data($data, $table){
		$this->db->insert($table, $data);
	}
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function tampil_data($data){
		return $this->db->get($data);
	}

	function tampil_data1($data){
		$this->db->select('*');
		$this->db->from('transaksi');
 
		$this->db->where('user_admin','1');
		$query = $this->db->get();
		return $query->result();
		}

	function bulan_kemarin($month,$year){
		return $this->db->get_where('transaksi', array('MONTH(tanggal) ' => $month, 'YEAR(tanggal)'=> $year))->num_rows();
	}

	function datatahunan($year){
		return $this->db->query("select year(tanggal) as tahunsekarang from transaksi where year(tanggal) != $year")->result();
	}


	function bulan_sekarang($month,$year){
		return $this->db->get_where('transaksi', array('MONTH(tanggal) ' => $month, 'YEAR(tanggal)'=> $year))->num_rows();
	}


}
?>