<?php
Class M_iklan extends Model {
	var $gallerypath;
	var $gallery_path_url;

	function M_Iklan(){
		parent::Model();
		$this->gallerypath = realpath(APPPATH . '../iklan');
		$this->gallery_path_url = base_url().'system/iklan/';
	}

	function daftar(){
		$this->db->select('id, url, gambar');
		$this->db->limit(1,0);
		$this->db->order_by("id", "desc");
		$this->db->from('iklan');
		$query = $this->db->get();
		return $query;
	}
	
	function ambil($id){
		$this->db->where('id', $id);
		$this->db->select('id, url, gambar');
		$this->db->from('iklan');
		$query = $this->db->get();
		return $query;
	}
	
	function tambah(){
		$konfigurasi = array(
			'allowed_types' =>'jpg|jpeg|gif|png|bmp',
			'upload_path' => $this->gallerypath
		);
		$this->load->library('upload', $konfigurasi);
		$this->upload->do_upload();
		$datafile = $this->upload->data();
		$userfile = $_FILES['userfile']['name'];
	
		$url = $this->input->post('url');
		$data = array(
			'url' => $url,
			'gambar' => $userfile
			);
		$this->db->insert('iklan', $data);
	}
	
	function edit($id) {
		$konfigurasi = array(
			'allowed_types' =>'jpg|jpeg|gif|png|bmp',
			'upload_path' => $this->gallerypath
		);
		$this->load->library('upload', $konfigurasi);
		$this->upload->do_upload();
		$datafile = $this->upload->data();
		$userfile = $_FILES['userfile']['name'];
		$url = $this->input->post('url');
		$data = array(
			'url' => $url,
			'gambar' => $userfile
			);
		$this->db->where('id', $id);
		$this->db->update('iklan', $data);
	}
	
	function select($id){
		return $this->db->get_where('iklan', array('id' => $id))->row();
	}
	
	function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('iklan');
	}
}
?>