<?php
Class Cadmin extends Controller {
	var $user="";
	
	function Cadmin(){
		parent::Controller();
		session_start();
	}
	
	function index(){
		$this->load->view('login');
	}
	
	function home(){
		if ($this->session->userdata('login') == TRUE) {
			$data['jenis'] = 'Admin';
			$this->load->view('admin', $data);
		}
		else {
			redirect('cadmin');
		}
	}

	function cekuser() {
		$this->load->model('m_admin');
		$data['username'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');
		$data['hasil'] = $this->m_admin->cekdb();
		
		if($data['hasil'] == null) {
			return "no";
		}
		else {
			return "yes";
		}
	}
	
	function usermasuk() {
		if($this->cekuser() == "yes") {
			$this->load->model('m_admin');
		 	$data['username'] = $this->input->post('username');
			$newdata = array('username' => $data['username'], 'login' => TRUE);
			$this->session->set_userdata($newdata);
			$data['tampil'] = $this->m_admin->cekdb();
			$data['jenis'] = 'Admin';
			$this->load->view('admin', $data);
		}
		else {
			echo "Login gagal";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		$this->index();
	}

	
	function manajemen_iklan(){
		if ($this->session->userdata('login') == TRUE){
			$this->load->model('m_iklan');
			$data['daftariklan'] = $this->m_iklan->daftar(6,0);
			$this->load->library('pagination');
			$config['base_url'] = base_url().'index.php/cadmin/manajemen_iklan/';
			$config['total_rows'] = $this->db->count_all('iklan');
			$config['per_page'] = 10;
			$config['num_links'] = 20;
			$this->pagination->initialize($config);
			$data['jenis'] = 'manajemen_iklan';
			$data['hasil'] =
			$this->db->get('iklan', $config['per_page'], $this->uri->segment(3));
			$this->load->view('admin', $data);
		}
		else{
			redirect('cadmin');
		}
	}
	
	function manajemen_artikel() {
		if ($this->session->userdata('login') == TRUE) {
			$this->load->model('m_artikel');
			$data['daftarartikel'] = $this->m_artikel->daftar(6,0);
			$this->load->library('pagination');
		
		
			$config['base_url'] = base_url().'index.php/cadmin/manajemen_artikel/';
			$config['total_rows'] = $this->db->count_all('artikel');
			$config['per_page'] = 10;
			$config['num_links'] = 20;
			$this->pagination->initialize($config);
			$data['jenis'] = 'manajemen_artikel';
			$data['hasil'] =
			$this->db->get('artikel', $config['per_page'], $this->uri->segment(3));
			$this->load->view('admin', $data);
		}
		else {
			redirect('cadmin');
		}
	}
	
	function edit_manajemen_artikel($id = null) {
		if ($this->session->userdata('login') == TRUE) {
			if($_POST == NULL) {
				$this->load->model('m_artikel');
				$data['hasil'] = $this->m_artikel->select($id);
				$this->load->plugin('xinha_pi');
				$data['xinha_java']= javascript_xinha(array('isi')); // this line for the xinha
				$data['jenis'] = 'edit_manajemen_artikel';
				$this->load->view('admin', $data);
			}
			else {
				$this->load->model('m_artikel');
				$this->m_artikel->edit($id);
				redirect('cadmin/manajemen_artikel');
			}
		}
		else {
			redirect('cadmin');
		}
	}
	
	function tambah_iklan() {
		if ($this->session->userdata('login') == TRUE) {
			if ($this->input->post('submit')){
				$this->load->model('m_iklan');
				$this->m_iklan->tambah();
				redirect('cadmin/manajemen_iklan');
			}
			$data['jenis'] = 'tambah_iklan';
			$this->load->view('admin', $data);
		}
		else{
			redirect('cadmin');
		}
	}
		
	function tambah_artikel() {
		if ($this->session->userdata('login') == TRUE) {
			if ($this->input->post('submit')) {
				$this->load->model('m_artikel');
				$this->m_artikel->do_upload();
				
				redirect('cadmin/manajemen_artikel');
			}
			$this->load->plugin('xinha_pi');
			$data['xinha_java']= javascript_xinha(array('isi')); // this line for the xinha
			$data['jenis'] = 'tambah_artikel';
			$this->load->view('admin', $data);
		}
		else {
			redirect('cadmin');
		}
	}
	
	function delete_manajemen_artikel($id = null) {
		if ($this->session->userdata('login') == TRUE) {
			$this->load->model('m_artikel');
			$this->m_artikel->delete($id);
			redirect('cadmin/manajemen_artikel');
		}
		else {
			redirect('cadmin');
		}
	}
	
	function manajemen_link() {
		if ($this->session->userdata('login') == TRUE) {
			$this->load->model('m_link');
			$data['hasil'] = $this->m_link->daftar(10, 0);
			$this->load->library('pagination');
			$config['base_url'] = base_url().'index.php/cadmin/manajemen_link/';
			$config['total_rows'] = $this->db->count_all('link');
			$config['per_page'] = 10;
			$config['num_links'] = 20;
			$this->pagination->initialize($config);
			$data['jenis'] = 'manajemen_link';
			$data['hasil'] =
			$this->db->get('link', $config['per_page'], $this->uri->segment(3));
			$this->load->view('admin', $data);
			
			
		}
		else {
			redirect('cadmin');
		}
	}
	
	function edit_link($id = null) {
		if ($this->session->userdata('login') == TRUE) {
			if($_POST == NULL) {
				$this->load->model('m_link');
				$data['hasil'] = $this->m_link->select($id);
				$data['jenis'] = 'edit_link';
				$this->load->view('admin', $data);
			}
			else {
				$this->load->model('m_link');
				$this->m_link->edit($id);
				redirect('cadmin/manajemen_link');
			}
		}
		else {
			redirect('cadmin');
		}
	}
	
	function edit_iklan($id = null) {
		if ($this->session->userdata('login') == TRUE) {
			if ($_POST == NULL){
				$this->load->model('m_iklan');
				$data['hasil'] = $this->m_iklan->select($id);
				$data['jenis'] = 'edit_iklan';
				$this->load->view('admin', $data);
			}
			else{
				$this->load->model('m_iklan');
				$this->m_iklan->edit($id);
				redirect('cadmin/manajemen_iklan');
			}
		}
		else{
			redirect('cadmin');
		}
	}
	
	function delete_artikel($id = null) {
		if ($this->session->userdata('login') == TRUE) {
			$this->load->model('m_link');
			$this->m_link->delete($id);
			redirect('cadmin/manajemen_link');
		}
		else {
			redirect('cadmin');
		}
	}
	
	function delete_iklan($id = null){
		if ($this->session->userdata('login') == TRUE) {
			$this->load->model('m_iklan');
			$this->m_iklan->delete($id);
			redirect('cadmin/manajemen_iklan');
		}
		else{
			redirect('cadmin');
		}
	}
	
	function tambah_link() {
		if ($this->session->userdata('login') == TRUE) {
			if ($this->input->post('submit')) {
				$this->load->model('m_link');
				$this->m_link->tambah();
				redirect('cadmin/manajemen_link');
			}
			$data['jenis'] = 'tambah_link';
			$this->load->view('admin', $data);
		}
		else {
			redirect('cadmin');
		}
	}
	
	function delete_link($id = null) {
		if ($this->session->userdata('login') == TRUE) {
			$this->load->model('m_link');
			$this->m_link->delete($id);
			redirect('cadmin/manajemen_link');
		}
		else {
			redirect('cadmin');
		}
	}
	
	function manajemen_galeri() {
		if ($this->session->userdata('login') == TRUE) {
			$this->load->model('m_galeri');
			$this->load->library('pagination');
			$config['base_url'] = base_url().'index.php/cadmin/manajemen_galeri/';
			$config['total_rows'] = $this->db->count_all('galeri');
			$config['per_page'] = 10;
			$config['num_links'] = 20;
			$this->pagination->initialize($config);
			$data['hasil'] =
			$this->db->get('galeri', $config['per_page'], $this->uri->segment(3));
			$data['jenis'] = 'manajemen_galeri';
			$this->load->view('admin', $data);
		}
		else {
			redirect('cadmin');
		}
	}
	
	function tambah_galeri() {
		if ($this->session->userdata('login')==TRUE) {
			$config = array(
				'allowed_types' => 'jpg|jpeg|gif|png',
				'upload_path' => realpath('./galeri/'),
				'max_size' => 2000
			);
			$this->load->library('upload', $config);
			if ($this->upload->do_upload()){
				$judul = $this->input->post('judul', TRUE);
				$isi = $this->input->post('isi', TRUE);
				$file1 = $this->upload->data();
				$file2 = $file1['file_name'];
				$this->load->model('m_galeri');
				$this->m_galeri->input($judul, $isi, $file2);
				$config = array(
					'source_image' => $file1['full_path'],
					'new_image' => './thumbs/',
					'maintain_ration' => true,
					'width' => 100,
					'height' => 75
				);
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				
				redirect('cadmin/manajemen_galeri');
			}
			$data['jenis'] = 'tambah_galeri';
			$this->load->view('admin', $data);
		}
		else {
			redirect('cadmin');
		}
	}
	
	function delete_galeri($id = null){
		if ($this->session->userdata('login') == TRUE) {
			$this->load->model('m_galeri');
			$gambar = $this->m_galeri->ambilisi($id);
			foreach($gambar->result() as $row){
				@unlink(trim(realpath('./galeri/'.$row->gambar)));
				@unlink(trim(realpath('./thumbs/'.$row->gambar)));
			}
			$this->m_galeri->delete($id);
			redirect('cadmin/manajemen_galeri');
		}
		else {
			redirect('cadmin');
		}
	}
	
	function edit_galeri($id = null){
		if ($this->session->userdata('login') == TRUE) {
			if($_POST == NULL) {
				$this->load->model('m_galeri');
				$data['hasil'] = $this->m_galeri->select($id);
				$data['jenis'] = 'edit_galeri';
				$this->load->view('admin', $data);
			}
			else {
				$file = $_FILES['userfile']['name'];
				if (empty($file)) {
					$this->load->model('m_galeri');
					$this->m_galeri->editnongambar($id);
					redirect('cadmin/manajemen_galeri');
				}
				else {
					$this->load->model('m_galeri');
					$gambar = $this->m_galeri->ambilisi($id);
			foreach($gambar->result() as $row){
				@unlink(trim(realpath('./galeri/'.$row->gambar)));
				@unlink(trim(realpath('./thumbs/'.$row->gambar)));
			}
					
					$this->load->model('m_galeri');
					$config = array(
						'allowed_types' => 'jpg|jpeg|gif|png',
						'upload_path' => realpath('./galeri/'),
						'max_size' => 2000
					);
					$this->load->library('upload', $config);
					if ($this->upload->do_upload()){
						$judul = $this->input->post('judul', TRUE);
						$isi = $this->input->post('isi', TRUE);
						$file1 = $this->upload->data();
						$file2 = $file1['file_name'];
						$this->load->model('m_galeri');
						$this->m_galeri->edit($id, $judul, $isi, $file2);
						$config = array(
							'source_image' => $file1['full_path'],
							'new_image' => './thumbs/',
							'maintain_ration' => true,
							'width' => 100,
							'height' => 75
						);
						$this->load->library('image_lib', $config);
						$this->image_lib->resize();
				
						redirect('cadmin/manajemen_galeri');
					}
					$this->load->model('m_galeri');
					$this->m_link->edit($id);
					redirect('cadmin/manajemen_link');
				}
			}
		}
		else {
			redirect('cadmin');
		}
	}
}
?>