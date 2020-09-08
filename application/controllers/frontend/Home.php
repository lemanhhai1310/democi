<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$data['title'] = "Dashboard";
		$this->load->view('frontend/layouts/header', $data);
		$this->load->view('frontend/pages/home');
		$this->load->view('frontend/layouts/footer');
	}

	public function addData(){

	}

}
