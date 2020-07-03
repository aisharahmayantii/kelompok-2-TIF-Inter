<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class transaksiapi extends REST_Controller {

    function index_post() {
        //buat yan $this->post itu name di textboxnya
        //buat yang sebelumnya => itu nama kolom di databasenya
        $data = array(
                    'user_pengguna'           => $this->post('id_user'),
                    'tanggal'          => $this->post('tanggal'),
                    'produk'    => $this->post('produk'));,
                    'bukti'     => $this->post('bukti')
        $insert = $this->db->insert('transaksi', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
?>
