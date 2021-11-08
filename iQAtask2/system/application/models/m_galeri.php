<?php
Class M_galeri extends Model {
	
	function M_galeri(){
		parent::Model();
	}

	function input($judul, $isi, $file2){
		$this->db->set('judul', $judul);
		$this->db->set('isi', $isi);
		$this->db->set('gambar', $file2);
		$this->db->insert('galeri');
	}
	
	function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('galeri');
	}
	
	function ambil(){
		$this->db->select('id, judul, isi, gambar');
		$this->db->from('galeri');
		$query = $this->db->get();
		return $query;
	}
	
	function ambilisi($id){
		$this->db->select('isi, gambar');
		$this->db->from('galeri');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query;
	}
	
	function select($id){
		return $this->db->get_where('galeri', array('id' => $id))->row();
	}
	
	function editnongambar($id){
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$this->db->set('judul', $judul);
		$this->db->set('isi', $isi);
		$this->db->where('id', $id);
		$this->db->update('galeri');
	}
	
	function edit($id, $judul, $isi, $file2){
		$this->db->set('judul', $judul);
		$this->db->set('isi', $isi);
		$this->db->set('gambar', $file2);
		$this->db->where('id', $id);
		$this->db->update('galeri');
	}
}
?>