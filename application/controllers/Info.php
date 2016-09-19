<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . '/libraries/REST_Controller.php';

class Info extends REST_Controller {

    public function index_get()
    {
        return $this->response(
            'data information',
            REST_Controller::HTTP_OK
        );
    }

    public function list_get()
    {
        $this->load->view('welcome_message');
    }
}
