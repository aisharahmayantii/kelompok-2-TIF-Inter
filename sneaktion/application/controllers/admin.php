<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Admin extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('mlogin');
		$this->load->model('model_user');
		print_r($this->session->all_userdata());
		$this->load->model('model_chat');
		if($this->session->userdata('status') != "login"){
			redirect(site_url("Login"));
		}
	}

	function home(){
		$this->load->view('addons/header');
		$this->load->view('addons/adminsidebar');
		$this->load->view('vadminhome');
		$this->load->view('addons/footer');
	}

	function laporan(){
		$this->load->view('addons/header');
		$this->load->view('addons/adminsidebar');
		$this->load->view('vlaporan');
		$this->load->view('addons/footer');
	}
	function chat(){
		$data['user']	= $this->model_user->getAll(array("id_user !=" => $this->session->userdata('id')));
		$this->load->view('addons/header');
		$this->load->view('addons/adminsidebar');
		$this->load->view('vchat', $data);
		$this->load->view('addons/footer');
	}
	function user(){
		$data['admin'] = $this->mlogin->tampil_dataadmin()->result();
		$this->load->view('addons/header');
		$this->load->view('addons/adminsidebar');
		$this->load->view('vuser',$data);
		$this->load->view('addons/footer');
	}
	function tambahuser(){
		$this->load->view('v_input');
	}

	function tambahuser_aksi(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = array(
			'username' => $username,
			'password' => $password
			);
		$this->mlogin->input_data($data,'admin');
		redirect('admin/user');
	}
	function update(){
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
	 
		$data = array(
			'username' => $username,
			'password' => $password
		);
	 
		$where = array(
			'id_admin' => $id
		);
	 
		$this->mlogin->update_data($where,$data,'admin');
		redirect('admin/user');
	}
	function hapus($id){
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