<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends MY_Controller {
	private $data;

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->data['title'] = 'Apoteker';
	}

	//tampilan beranda pencarian informasi
	public function daftar(){
		$this->data['menu2'] = true;

		$this->load->view('layouts/header', $this->data);
		$this->load->view('daftar_pasien_page', $this->data);
		$this->load->view('layouts/footer');
	}

	public function pembayaran(){
		$this->data['menu3'] = true;

		$this->load->view('layouts/header', $this->data);
		$this->load->view('pembayaran_page', $this->data);
		$this->load->view('layouts/footer');
	}

	public function surat_rujukan(){
		$this->data['menu4'] = true;

		$this->load->view('layouts/header', $this->data);
		$this->load->view('surat_rujukan_page', $this->data);
		$this->load->view('layouts/footer');
	}
}