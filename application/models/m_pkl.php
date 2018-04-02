<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pkl extends CI_Model {

	public $tabel = 'user';

	public $pk = 'kode';

	public function ambil_data()
	{
		$this->db->select('*');
		$this->db->from($this->tabel);
		$this->db->order_by($this->pk, 'desc');
		$var = $this->db->get();
		return $var->result();
	}

	public function tambah_data($data=array()){
		$this->db->insert($this->tabel, $data);
		return $this->db->insert_id();
	}

	public function edit_data($id='', $data){
		$this->db->where($this->pk, $id);
		$this->db->update($this->tabel, $data);
		if ($this->db->affected_rows()) {
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function form_data($id='')
	{
		$this->db->where($this->pk, $id);
		$get_user = $this->db->get($this->tabel);
		return $get_user->row();
	}

	public function hapus_data($id=''){
		$this->db->where($this->pk, $id);
		$this->db->delete($this->tabel);
		return TRUE;
	}

	public function ambil_beberapa($tabel)
	{
		$this->db->select('*');
		$this->db->from($this->tabel);
		$this->db->join($tabel, $tabel.'.kode_skill = ' . $this->tabel . '.kode_skill');
		$this->db->order_by($this->pk, 'asc');
		$var = $this->db->get();
		return $var->result();
	}

	public function edit_skill($id='', $data){
		$this->db->where('nick', $id);
		$var = $this->db->update($this->tabel, $data);
		return $var;
		// if ($this->db->affected_rows()) {
		// 	return TRUE;
		// }
	}
}
