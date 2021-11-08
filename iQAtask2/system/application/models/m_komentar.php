<?php
Class M_komentar extends Model {
	
	function M_komentar() {
		parent::Model();
	}

	function ambil($limit, $offset){
		$this->db->select('id, nama, url, komentar, tgl');
		$this->db->from('komentar');
		$this->db->limit($limit, $offset);
		$this->db->order_by("id", "asc");
		$query = $this->db->get();
		return $query;
	}

	function input($nama, $url, $komentar){
		$this->db->set('nama', $nama);
		$this->db->set('url', $url);
		$this->db->set('komentar', $komen);
		$tgl = date("Y-m-d");
		$this->db->set('tgl', $tgl);
		$this->db->insert('komentar');
	}

	function jumtotal(){
		return $this->db->count_all('komentar');
	}
}
?>