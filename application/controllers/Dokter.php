<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends MY_Controller {
	private $data;

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->data['title'] = 'Apoteker';
	}

	//tampilan beranda pencarian informasi
	public function cari(){
		$this->data['menu5'] = true;

		$this->load->view('layouts/header', $this->data);
		$this->load->view('cari_dokter_page', $this->data);
		$this->load->view('layouts/footer');
	}
}