<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->driver('session');
		$this->load->helper('url');
		$this->load->model('Crud');
	}
	
	public function sessionOut(){
		if($this->session->userdata('id_user')!=null){
			redirect(site_url('pengguna/beranda'), 'refresh');
		}
	}
	
	public function sessionIn(){
		if($this->session->userdata('id_user')==null){
			redirect('', 'refresh');
		}
	}

	public function isNotAdmin(){
		if($this->session->userdata('level_user')!=88){
			redirect('', 'refresh');
		}
	}

	public function isNotUniversitas(){
		if($this->session->userdata('level_user')!=99){
			redirect('', 'refresh');
		}
	}

	public function isUniversitas(){
		if($this->session->userdata('level_user')==99){
			redirect('', 'refresh');
		}
	}

	public function isNotFakultas(){
		if($this->session->userdata('level_user')==99 OR $this->session->userdata('level_user')==88){
			redirect('', 'refresh');
		}
	}

	//buat notifikasi universitas
	public function set_notifikasi_universitas(){
		//get last
		$query = $this->Crud->read('user', array('level'=>99), null, null);
		$query = $query->row_array();
		
		$new = $query['notifikasi'] + 1;
		$data = array('notifikasi'=>$new);
		$update = $this->Crud->update(array('level'=>99), 'user', $data);
	}

	//buat notifikasi fakultas/unit
	public function set_notifikasi($id_user = null){
		//get last
		$query = $this->Crud->read('user', array('id_user'=>$id_user), null, null);
		$query = $query->row_array();
		
		$new = $query['notifikasi'] + 1;
		$data = array('notifikasi'=>$new);
		$update = $this->Crud->update(array('id_user'=>$id_user), 'user', $data);
	}

	//cek notifikasi
	public function get_notifikasi_universitas(){
		if($this->session->userdata('level_user')==99){
			//universitas
			$query = $this->Crud->read('user', array('level'=>99), null, null);
			$query = $query->row_array();
			if($query['notifikasi'] > 0){
				$notifikasi = $query['notifikasi'];
			}else{
				$notifikasi = '';
			}
		}else{
			//fakultas
			$id_user = $this->session->userdata('id_user');
			$query = $this->Crud->read('user', array('id_user'=>$id_user), null, null);
			$query = $query->row_array();
			if($query['notifikasi'] > 0){
				$notifikasi = $query['notifikasi'];
			}else{
				$notifikasi = '';
			}
		}

		return $notifikasi;
	}

	//hapus notifikasi universitas
	public function clear_notifikasi_universitas(){
		if($this->session->userdata('level_user')==99){
			//universitas
			$data = array('notifikasi'=>0);
			$update = $this->Crud->update(array('level'=>99), 'user', $data);
		}else{
			//fakultas
			$id_user = $this->session->userdata('id_user');
			$data = array('notifikasi'=>0);
			$update = $this->Crud->update(array('id_user'=>$id_user), 'user', $data);
		}
	}
}
?>