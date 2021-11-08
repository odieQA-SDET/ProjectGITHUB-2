<?php
Class Ckomentar extends Controller {
	
	function Ckomentar() {
		parent::Controller();
		$this->load->library('form_validation');
		$this->load->library('pagination');
		$this->load->model('m_captcha');
		session_start();
	}

	function index(){
		$this->komentar();
	}
	
	function komentar($nilai=0){
		$data['jenis']='Komentar';
		$this->load->model('m_artikel');
		$this->load->model('m_link');
		$this->load->model('m_iklan');
		$data['daftarartikel'] = $this->m_artikel->daftar(6,0);
		$data['daftarlink'] = $this->m_link->daftar();
		$data['daftariklan'] = $this->m_iklan->daftar();
		
		$this->load->model('m_komentar');
		$data['dafkomen'] = $this->m_komentar->Ambil('5', $nilai);
		
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('komentar', 'komentar', 'required');
		$this->form_validation->set_rules('url', 'url', 'required');
		
		if (empty($_POST['nama'])) {
			$data['kesalahan']='';
		}
		else {
			if(strcasecmp($_SESSION['captchaWord'], $_POST['confirmCaptcha']) == 0) {
				$nama = $this->db->escape($this->input->Post('nama', TRUE));
				$email = $this->db->escape($this->input->Post('email', TRUE));
				$komentar = $this->db->escape($this->input->Post('komentar', TRUE));
				$data['kesalahan'] = 'Kode Benar';
			}
			else {
				$data['kesalahan'] = 'Kode Salah';
			}
		}
		$captcha = $this->m_captcha->GenerateCaptcha();
		$_SESSION['captchaWord'] = $captcha['word'];
		$data['captcha'] = $captcha;
		
		$config['base_url'] = base_url()."index.php/ckomentar/komentar";
		$config['total_rows'] = $this->m_komentar->jumtotal();
		$config['per_page'] = '5';
		$config['num_links'] ='5';
		$config['first_link'] = 'Pertama';
		$config['last_link'] = 'Terakhir';
		$config['cur_page'] = '1';
		$this->pagination->initialize($config);
		$data['page']=$this->pagination->create_links();
		
		if ($this->form_validation->run() == FALSE) {
			$data['kesalahan'] = '';
		}
		else {
			if ($data['kesalahan'] == 'Kode Benar') {
				$data['kesalahan'] = 'Terkirim';
				$this->m_komentar->input($nama, $email, $komentar);
			}
			else {
				$data['kesalahan'] = 'Kode yang Anda Masukkan Salah';
			}
		}
		$this->load->view('template', $data);
	}
}
?>