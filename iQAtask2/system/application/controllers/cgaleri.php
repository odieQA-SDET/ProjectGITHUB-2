<?php
Class Cgaleri extends Controller {
	
	function Cgaleri(){
		parent::Controller();
	}

	function index(){
		$this->load->model('m_galeri');
		$this->load->model('m_artikel');
		$this->load->model('m_link');
		$this->load->model('m_iklan');
		$data['daftarartikel'] = $this->m_artikel->daftar(6,0);
		$data['daftarlink'] = $this->m_link->daftar();
		$data['daftariklan'] = $this->m_iklan->daftar();
		$data['daftargambar'] = $this->m_galeri->ambil();
		$data['jenis'] = 'Galeri';
		$this->load->view('template', $data);
	}
}
?>