<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_misc extends CI_Model {

	public $tabel = 'skill';

	public $pk = 'kode_skill';

	public function __construct()
	{
		parent::__construct();
	}

	public function get_skill()
	{
		$this->db->select('*');
		$this->db->from($this->tabel);
		$this->db->order_by($this->pk, 'asc');
		$var = $this->db->get();
		return $var->result();
	}
}

/* End of file m_misc.php */
/* Location: ./application/models/m_misc.php */