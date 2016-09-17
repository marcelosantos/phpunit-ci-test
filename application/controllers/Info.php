<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH.'libraries/REST_Controller.php');

class Info extends REST_Controller {
	public function index_get()
	{
		try {
            return $this->response(
				array('info'=>'data information'),
				REST_Controller::HTTP_OK
			);
        } catch (\Exception $exception) {
            return $this->response(
                array("status" => $exc->getMessage()),
                REST_Controller::HTTP_BAD_GATEWAY
            );
        }
		//$this->load->view('welcome_message');
	}
}
