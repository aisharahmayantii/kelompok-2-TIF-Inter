<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Admin extends CI_Controller {
	
	 function __construct()
    {
		
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('mlogin');
		$this->load->model('mlaporan');
		$this->load->model('model_user');
		$this->load->model('model_chat');
		if($this->session->userdata('status') != "login"){
			redirect(site_url("Login"));
		}
	}

	function home(){
		$user['admin']	= $this->model_user->getAdmin(array("id_admin =" => $this->session->userdata('id')));
		date_default_timezone_set('Asia/Jakarta'); 
                $this_year= date("Y");
				$yesteday = date("m")-1;
				$now = date("m");
		$invoice['last'] = $this->mlogin->bulan_kemarin($yesteday,$this_year);
		$invoice['wes'] = $this->mlogin->bulan_sekarang($now,$this_year);
		$this->load->view('addons/header',$user);
		$this->load->view('addons/adminsidebar');
		$this->load->view('vadminhome',$invoice);
		$this->load->view('addons/footer');
	}
	
	function laporan(){
		$user['admin']	= $this->model_user->getAdmin(array("id_admin =" => $this->session->userdata('id')));
		$data['prosses'] = $this->mlaporan->cekstatus();
		$data['selesai'] = $this->mlaporan->selesai();
		$this->load->view('vlaporan', $data,$user);
	}
	
	function chat(){
		$user['admin']	= $this->model_user->getAdmin(array("id_admin =" => $this->session->userdata('id')));
		$data['user']	= $this->model_user->getAll(array("id_user !=" => $this->session->userdata('id')));
		$this->load->view('addons/header',$user);
		$this->load->view('addons/adminsidebar');
		$this->load->view('vchat', $data);
		$this->load->view('addons/footer');
	}
	function thread(){
		$user['admin']	= $this->model_user->getAdmin(array("id_admin =" => $this->session->userdata('id')));
		$data['threads']	= $this->mlogin->tampil_datathreads()->result();
		
		$this->load->view('addons/header',$user);
		$this->load->view('addons/adminsidebar');
		$this->load->view('vthread', $data);
		$this->load->view('addons/footer');
	}

	function invo(){
		$user['admin']	= $this->model_user->getAdmin(array("id_admin =" => $this->session->userdata('id')));
		$data['datainv']	= $this->mlogin->tampil_data("transaksi")->result();
		$data['user']	=$this->session->userdata('id');
		$this->load->view('addons/header',$user);
		$this->load->view('addons/adminsidebar');
		$this->load->view('v_invo', $data);
		$this->load->view('addons/footer');
	}
	function user(){
		$user['admin']	= $this->model_user->getAdmin(array("id_admin =" => $this->session->userdata('id')));
		$data['admin'] = $this->mlogin->tampil_dataadmin()->result();
		$this->load->view('addons/header',$user);
		$this->load->view('addons/adminsidebar');
		$this->load->view('vuser',$data);
		$this->load->view('addons/footer');
	}
	function tambahuser(){
		$this->load->view('v_input');
	}
	
	function tambahuser_aksi(){
		$username = $this->input->post('username1');
		$password = $this->input->post('password');
		$negara = $this->input->post('negara');
		$poto = $this->input->post('image_input');
		$file_ext = pathinfo($_FILES['image_input']['name'], PATHINFO_EXTENSION);

		$config['upload_path']		=	'./uploads/';
             $config['allowed_types']	=	'jpg|png|jpeg|JPG';
             $config['max_size']			=	10048;
             $config['file_name']		=	'picture-'.date('ymd').'-'.substr(md5(rand()),0,10);

             $this->load->library('upload', $config);

             if(@$_FILES['image_input']['name'] != null)
             {
                 if($this->upload->do_upload('image_input'))
                 {
					$data = array(
						'username' => $username,
						'password' => $password,
						'image' => $config['file_name'].".".$file_ext
						);
					$this->mlogin->input_data($data,'admin');
					redirect('admin/user');
 
                     if($this->db->affected_rows() > 0)
                     {
                         echo "<script>alert('data Testimoni Berhasil Di simpan');</script>";
                     }
                     echo "<script>window.location='".site_url('admin/user')."';</script>";
 
                 }
                 else
                 {
                     echo "<script>alert('error di bagian inputan gambarnya');</script>";
                 }
                 if($this->db->affected_rows() > 0)
                 {
                     echo "<script>alert('data Testimoni Berhasil Di simpan');</script>";
                 }
                 echo "<script>window.location='".site_url('admin/user')."';</script>";
             
             } 
             else
             {	$data = array(
				'username' => $username,
				'password' => $password,
				'negara' => $negara,
				'image' => null
				);
			$this->mlogin->input_data($data,'admin');
			redirect('admin/user');
     
                 if($this->db->affected_rows() > 0)
                 {
                     echo "<script>alert('data Testimoni Berhasil Di simpan');</script>";
                 }
                 echo "<script>window.location='".site_url('admin/menu/Testimoni')."';</script>";
             }
	
		// $data = array(
		// 	'username' => $username,
		// 	'password' => $password,
		// 	'image' => $image
		// 	);
		// $this->mlogin->input_data($data,'admin');
		// redirect('admin/user');
	}
	function tambah_threads(){
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$poto = $this->input->post('image_input');
		$file_ext = pathinfo($_FILES['image_input']['name'], PATHINFO_EXTENSION);

		$config['upload_path']		=	'./uploads/';
             $config['allowed_types']	=	'jpg|png|jpeg|JPG';
             $config['max_size']			=	10048;
             $config['file_name']		=	'thread-'.date('ymd').'-'.substr(md5(rand()),0,10);

             $this->load->library('upload', $config);

             if(@$_FILES['image_input']['name'] != null)
             {
                 if($this->upload->do_upload('image_input'))
                 {
					$data = array(
						'title_threads' => $judul,
						'isi_threads' => $isi,
						'img_threads' => $config['file_name'].".".$file_ext
						);
					$this->mlogin->input_data($data,'threads');
					redirect('admin/thread');
 
                     if($this->db->affected_rows() > 0)
                     {
                         echo "<script>alert('data Testimoni Berhasil Di simpan');</script>";
                     }
                     echo "<script>window.location='".site_url('admin/user')."';</script>";
 
                 }
                 else
                 {
                     echo "<script>alert('error di bagian inputan gambarnya');</script>";
                 }
                 if($this->db->affected_rows() > 0)
                 {
                     echo "<script>alert('data Testimoni Berhasil Di simpan');</script>";
                 }
                 echo "<script>window.location='".site_url('admin/user')."';</script>";
             
             } 
             else
             {
				$data = array(
					'title_threads' => $judul,
					'isi_threads' => $isi,
					'img_threads' => null
					);
				$this->mlogin->input_data($data,'threads');
			redirect('admin/thread');
     
                 if($this->db->affected_rows() > 0)
                 {
                     echo "<script>alert('data Testimoni Berhasil Di simpan');</script>";
                 }
                 echo "<script>window.location='".site_url('admin/menu/Testimoni')."';</script>";
             }
	
	}
	function update(){
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$negara = $this->input->post('negara');
		$image = $this->input->post('image_up');
		$imgtarget = $this->input->post('sekarang');
		$file_ext = pathinfo($_FILES['image_up']['name'], PATHINFO_EXTENSION);
		$target=('uploads/'.$imgtarget);

		$config['upload_path']		=	'./uploads/';
		$config['allowed_types']	=	'jpg|png|jpeg';
		$config['max_size']			=	2048;
		$config['file_name']		=	'picture-'.date('ymd').'-'.substr(md5(rand()),0,10);

		echo $imgtarget;

		$this->load->library('upload', $config);
		if(@$_FILES['image_up']['name'] != null)
		{
			if($this->upload->do_upload('image_up'))
			{
				if($imgtarget != null){
					
					unlink($target);

				}
				$where = array(
					'id_admin' => $id
				);
			   $data = array(
				   'username' => $username,
				   'password' => $password,
				   'negara'	  => $negara,
				   'image' => $config['file_name'].".".$file_ext
				   );
			   $this->mlogin->update_data($where,$data,'admin');
			   redirect('admin/user');
		
		}
	} 
		else
		{	
			$where = array(
				'id_admin' => $id
			);
		 
			
			$data = array(
		   'username' => $username,
		   'password' => $password,
		   'negara'	  => $negara,
		   );
	   $this->mlogin->update_data($where,$data,'admin');
		redirect('admin/user');
	}
}

function update_threads(){
	$id = $this->input->post('id');
	$judul = $this->input->post('judul');
	$image = $this->input->post('image_up');
	$isi = $this->input->post('isi');
	$imgtarget = $this->input->post('sekarang');
	$file_ext = pathinfo($_FILES['image_up']['name'], PATHINFO_EXTENSION);
	$target=('uploads/'.$imgtarget);

	$config['upload_path']		=	'./uploads/';
	$config['allowed_types']	=	'jpg|png|jpeg';
	$config['max_size']			=	2048;
	$config['file_name']		=	'picture-'.date('ymd').'-'.substr(md5(rand()),0,10);

	echo $imgtarget;

	$this->load->library('upload', $config);
	if(@$_FILES['image_up']['name'] != null)
	{
		if($this->upload->do_upload('image_up'))
		{
			if($imgtarget != null){
				
				unlink($target);

			}
			$where = array(
				'id_threads' => $id
			);
		   $data = array(
			   'title_threads' => $judul,
			   'isi_threads' => $isi,
			   'img_threads' => $config['file_name'].".".$file_ext
			   );
		   $this->mlogin->update_data($where,$data,'threads');
		   redirect('admin/thread');
	
	}
} 
	else
	{	
		$where = array(
			'id_threads' => $id
		);
	 
		
		$data = array(
		'title_threads' => $judul,
		'isi_threads' => $isi
	   );
   $this->mlogin->update_data($where,$data,'threads');
	redirect('admin/thread');
}
}

	function hapus($id){
		$where = array('image' => $id);
		$target=('uploads/'.$id);
		echo $target;
		if($id != null){
					
			unlink($target);

		}

		$this->mlogin->hapus_data($where,'admin');
	
		redirect('admin/user');
	}
	function hapusthread($id){
		$where = array('id_threads' => $id);
		$this->mlogin->hapus_data($where,'threads');
	
		redirect('admin/thread');
	}
	function hapus1($id){
		$where = array('id_admin' => $id);
		$this->mlogin->hapus_data($where,'admin');
	
		redirect('admin/user');
	}
	function getChat(){
		$this->load->model("model_user");
		$this->load->model("model_chat");
		
		$id_user	= $this->input->post("id_user",true); //tujuan
		$id			= $this->session->userdata('id'); //dari
		$id_max		= $this->input->post('id_max'); //dari
	
		$where	= "(((user_1 = '$id_user' AND user_2 = '$id') OR (user_2 = '$id_user' AND user_1 = '$id')) AND id_chat > '$id_max')";
		$chat	= $this->model_chat->getAll($where);
		$data['id_max']		= $id_max;
		$data['id_user']	= $id_user;
		$data['chat'] 		= $chat;
		$this->load->view("vwChatBox",$data);
	}
	
	function getChatAll(){
		$this->load->model("model_user");
		$this->load->model("model_chat");
		
		$id_user	= $this->input->post("id_user",true); //tujuan
		$id			= $this->session->userdata('id'); //dari
		$id_max		= $this->input->post('id_max'); //dari
	
		$where	= "(((user_1 = '$id_user' AND user_2 = '$id') OR (user_2 = '$id_user' AND user_1 = '$id')))";
		$chat	= $this->model_chat->getAll($where);
		
		$where2	= "(((user_1 = '$id_user' AND user_2 = '$id') OR (user_2 = '$id_user' AND user_1 = '$id')) AND id_chat > '$id_max')";
		$get_id = $this->model_chat->getLastId($where2);
		
		$data['id_max']		= $get_id['id_chat'];
		$data['id_user']	= $id_user;
		$data['chat'] 		= $chat;
		$this->load->view("vwChatBox",$data);
	}
	
	function getLastId(){
		$this->load->model("model_user");
		$this->load->model("model_chat");
		
		$id_user	= $this->input->post("id_user",true); //tujuan
		$id			= $this->session->userdata('id'); //dari
		$id_max		= $this->input->post('id_max'); //dari
		
		$where	= "(((user_1 = '$id_user' AND user_2 = '$id') OR (user_2 = '$id_user' AND user_1 = '$id')) AND id_chat > '$id_max')";
		$get_id = $this->model_chat->getLastId($where);
		
		echo json_encode(array("id" => $get_id['id_chat'] != '' ?  $get_id['id_chat'] : $id_max ));
	}
	
	function sendMessage(){
		$this->load->model("model_chat");
		$id_user	= $this->input->post("id_user",true); //tujuan/user_2
		$id			= $this->session->userdata('id'); //dari/user_1
		$pesan		= addslashes($this->input->post("pesan",true));
		
		$data	= array(
			'user_1' => $id,
			'user_2' => $id_user,
			'pesan' => $pesan,
		);
		
		$query	=	$this->model_chat->getInsert($data);
		
		if($query){
			$rs = 1;
		}else{
			$rs	= 2;
		}
		
		echo json_encode(array("result"=>$rs));
		
	}
}