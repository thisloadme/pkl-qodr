<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends CI_Controller {

	public $tabel = 'user';

	public $pk = 'kode';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pkl');
		$this->load->model('m_misc');
		$pkl = new M_pkl;
		$skill = new M_misc;
		$pkl->tabel = $this->tabel;
		$pkl->pk = $this->pk;
	}

	public function index()
	{
		$this->var['ambil'] = $this->m_pkl->ambil_beberapa('skill');
		$this->var['judul'] = "QODR HQ | SMK Negeri 1 Bawang";
		$this->var['isi'] = ('home');
		$this->var['halaman'] = "home";
		$this->load->view('public', $this->var);
	}

	public function form_tambah()
	{
		$this->var['judul'] = "Tambahkan Orang";
		$this->var['isi'] = ('tambah');
		$this->load->view('public', $this->var);
	}

	public function ke_skill()
	{
		$nama = $this->input->post('nama');
		$nickname = $this->input->post('nick');
		$tempat = $this->input->post('tempat');
		$tanggal = $this->input->post('tanggal');
		$alamat = $this->input->post('alamat');
		$hp = $this->input->post('hp');
		$email = $this->input->post('email');
		$negara = $this->input->post('negara');
		$foto = $this->input->post('up');
		$nama_foto = $this->input->post('nama_foto');
		$waktu = date('Y-m-d h:i:s');
		$namafile = "file_".time();

		$config = array(
			'upload_path' =>'./img/',
			'allowed_types' => 'jpg|png|jpeg',
			'max_size' => '0',
			'filename' => $namafile
		);

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('up')){
			
			$gambar = $this->upload->data();
			$data = array(
			"nama" => $nama,
			"nick" => $nickname,
			"tempat_lahir" => $tempat,
			"tanggal_lahir" => $tanggal,
			"alamat" => $alamat,
			"bergabung" => $waktu,
			"nationality" => $negara,
			"email" => $email,
			"no_hp" => $hp,
			"gambar" => 'img/'.$gambar['file_name']
		);
			$this->m_pkl->tambah_data($data);
			redirect('c_home/tampil_skill/'.$nickname);
			
		}else{
			redirect('c_home','refresh');
		}

		
	}

	public function tampil_skill($nick)
	{
		$this->var['data'] = $this->m_misc->get_skill();
		$this->var['judul'] = "Tambahkan Data";
		$this->var['isi'] = ('skill');
		$this->load->view('public', $this->var);
	}

	public function kasi_skill($nick, $kode)
	{
		$data = array(
			"kode_skill" => $kode
		);
		$cek = $this->m_pkl->edit_skill($nick, $data);
		if ($cek) {
			redirect('c_home/sukses');
		}else{
			echo 'Skillmu Noob';
		}
	}

	public function sukses()
	{
		$this->var['redir'] = 'ulala';
		$this->var['judul'] = "Tambahkan Data";
		$this->var['isi'] = ('hal_sukses');
		$this->load->view('public', $this->var);
	}

	public function hapus($kode)
	{
		$this->m_pkl->hapus_data($kode);
		redirect('c_home/sukses');
	}

	public function hal_edit($kode)
	{
		$this->var['var'] = $this->m_pkl->form_data($kode);
		$this->var['judul'] = "Edit Orang";
		$this->var['isi'] = ('form_edit');
		$this->load->view('public', $this->var);
	}

	public function update($kode)
	{
		$nama = $this->input->post('nama');
		$nickname = $this->input->post('nick');
		$tempat = $this->input->post('tempat');
		$tanggal = $this->input->post('tanggal');
		$alamat = $this->input->post('alamat');
		$hp = $this->input->post('hp');
		$email = $this->input->post('email');
		$negara = $this->input->post('negara');
		$nama_foto = $this->input->post('nama_foto');
		$waktu = date('Y-m-d h:i:s');
			
		$data = array(
			"nama" => $nama,
			"nick" => $nickname,
			"tempat_lahir" => $tempat,
			"tanggal_lahir" => $tanggal,
			"alamat" => $alamat,
			"bergabung" => $waktu,
			"nationality" => $negara,
			"email" => $email,
			"no_hp" => $hp
		);
			$this->m_pkl->edit_data($kode, $data);
			redirect('c_home/sukses');
		
	}

}

/* End of file C_home.php */
/* Location: ./application/controllers/C_home.php */