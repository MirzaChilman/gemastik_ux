<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MY_Controller {
	private $data;

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->data['title'] = 'Judul web';
	}

	//tampilan beranda pencarian informasi
	public function index(){
		$this->data['menu1'] = true;

		$this->load->view('layouts/header', $this->data);
		$this->load->view('beranda_page', $this->data);
		$this->load->view('layouts/footer');
	}
}