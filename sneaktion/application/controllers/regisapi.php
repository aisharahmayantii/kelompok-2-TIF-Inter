<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class regisapi extends REST_Controller {
function index_post() {
     //buat yan $this->post itu name di textboxnya
     //buat yang sebelumnya => itu nama kolom di databasenya
        $data = array(
                    'username'           => $this->post('username'),
                    'password'          => $this->post('password'),
                    'nama'    => $this->post('nama'));
        $insert = $this->db->insert('user', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
?>