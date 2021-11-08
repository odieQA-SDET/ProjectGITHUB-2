<?php
Class Cblog extends Controller {
	
	function index(){
		$this->load->model('m_artikel');
		$this->load->model('m_link');
		$this->load->model('m_iklan');
		$data['daftarartikel'] = $this->m_artikel->daftar(6,0);
		$data['daftarlink'] = $this->m_link->daftar();
		$data['daftariklan'] = $this->m_iklan->daftar();
		$data['jenis'] = "Home";
		$this->load->view('template', $data);
	}	

	function cari() {
		$keyword = $this->input->post('search');
		$this->load->model('m_artikel');
		$this->load->model('m_link');
		$this->load->model('m_iklan');
		$this->db->like('Judul', $keyword);
		$data['dapat'] = $this->db->get('artikel');
		$data['daftarartikel'] = $this->m_artikel->daftar(6,0);
		$data['daftarlink'] = $this->m_link->daftar();
		$data['daftariklan'] = $this->m_iklan->daftar();
		$data['jenis'] = 'Cari';
		$this->load->view('template', $data);
	}
}
?>