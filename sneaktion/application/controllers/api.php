<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Api extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }
    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $kontak = $this->db->get('user')->result();
        } else {
            $this->db->where('id', $id);
            $kontak = $this->db->get('user')->result();
        }
        $this->response($kontak, 200);
    }

    function index_post() {
        $data = array(
                    'id'           => $this->post('id'),
                    'nama_user'    => $this->post('nama'),
                    'username'    => $this->post('username'),
                    'password'    => $this->post('password'));
        $insert = $this->db->insert('user', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    
    function index_put() {
        $id = $this->put('id');
        $data = array(
            'id'           => $this->post('id'),
            'nama_user'          => $this->post('nama'),
            'username'    => $this->post('username'),
            'password'    => $this->post('password'));
        $this->db->where('id', $id);
        $update = $this->db->update('user', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_delete() {
        $id = $this->delete('id');
        $this->db->where('id', $id);
        $delete = $this->db->delete('user');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
?>