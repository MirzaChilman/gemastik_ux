<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function create($table, $data){
		$data['query'] = $this->db->insert($table, $data);
		$data['last_id'] = $this->db->insert_id();
		return $data;
	}

	function read($table, $cond, $ordField, $ordType){
		if($cond!=null){
			$this->db->where($cond);
		}
		if($ordField!=null){
			$this->db->order_by($ordField, $ordType);
		}
		$query = $this->db->get($table);
		return $query;
	}

	function read_or($table, $cond1, $cond2, $ordField, $ordType){
		if($cond1!=null){
			$this->db->where($cond1);
		}
		if($cond2!=null){
			$this->db->or_where($cond2);
		}
		if($ordField!=null){
			$this->db->order_by($ordField, $ordType);
		}
		$query = $this->db->get($table);
		return $query;
	}

	//read karwas yang terlambat
	function read_terlambat($id_user){
		if($id_user==null){
			$query = $this->db->query("SELECT * FROM karwas WHERE flag!='00' ORDER BY id_kontrak DESC");
		}else{
			$query = $this->db->query("SELECT * FROM karwas WHERE id_user='".$id_user."' AND flag!='00' ORDER BY id_kontrak DESC");
		}
		return $query;
	}

	function readLast($table, $cond, $ordField){
		if($cond!=null){
			$this->db->where($cond);
		}
		$this->db->order_by($ordField, 'DESC');
		$query = $this->db->get($table, 0, 1);
		return $query;
	}

	//read berdasarkan like untuk ppn dan pph
	function readLike($table, $cond, $ordField, $ordType){
		if($cond=='PPN'){
			$this->db->like('nama_pajak', 'PPN', 'both');
		}else if($cond=='PPH'){
			$this->db->like('nama_pajak', 'PPh', 'both');
		}

		if($ordField!=null){
			$this->db->order_by($ordField, $ordType);
		}
		$query = $this->db->get($table);
		return $query;
	}

	//read detail belanja
	function readDetailBelanja($cond){
		if($cond!=null){
			$this->db->like('kode_usulan_belanja', $cond, 'both');
		}

		$query = $this->db->get('detail_belanja');
		return $query;
	}

	//read subunit
	function readSubunit($cond){
		if($cond!=null){
			$this->db->like('kode_subunit', $cond, 'after');
		}

		$query = $this->db->get('subunit');
		return $query;
	}

	//pencarian karwas untuk universitas
	function searchKarwas($date1, $date2, $keyword){
		$query = $this->db->query("SELECT * FROM karwas K LEFT JOIN rekanan R ON K.id_rekanan=R.id_rekanan WHERE add_ke = (select max(add_ke) from karwas 
			where karwas.identitas_kontrak=K.identitas_kontrak AND tgl_kontrak BETWEEN '$date1' AND '$date2'
			AND (identitas_kontrak LIKE '%$keyword%' OR nomor_kontrak LIKE '%$keyword%' OR uraian_kontrak LIKE '%$keyword%'))
			AND flag!=01 GROUP BY identitas_kontrak ORDER BY id_kontrak DESC");
		return $query;
	}

	function update($cond, $table, $data){
		$this->db->where($cond);
		$query = $this->db->update($table, $data);
		return $query;
	}

	function delete($cond, $table){
		$this->db->where($cond);
		$query = $this->db->delete($table);
		return $query;
	}
}