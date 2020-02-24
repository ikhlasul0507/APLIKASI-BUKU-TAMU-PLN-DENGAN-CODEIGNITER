<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_buku extends CI_Model {

	public function daftarkontak()
	{
		 $data=[
		 	'nama_kontak' => $this->input->post('nama_kontak'),
		 	'email_kontak' => $this->input->post('email_kontak'),
		 	'subject_kontak' => $this->input->post('subject_kontak'),
		 	'pesan_kontak' => $this->input->post('pesan_kontak')
		 ];
	    $this->db->insert('tbl_kontak', $data);
	}
	public function daftarsaran()
	{
		 $data=[
		 	'customRadioInline1' => $this->input->post('customRadioInline1'),
		 	'saran' => $this->input->post('saran'),
		 ];
	    $this->db->insert('tbl_saran', $data);
	}
	public function simpanbuku()
	{
		 $data=[
		 	'nomor_tamu'=> $this->input->post('nomor_tamu'),
			'no_hp_tamu'=> $this->input->post('no_hp_tamu'),
			'tanggal_tamu'=> $this->input->post('tanggal_tamu'),
			'nama_satpam'=> $this->input->post('nama_satpam'),
			'bukti_tamu'=> $this->input->post('bukti_tamu'),
			'jam_masuk_tamu'=> $this->input->post('jam_masuk_tamu'),
			'menemui_tamu'=> $this->input->post('menemui_tamu'),
			'nama_tamu'=> $this->input->post('nama_tamu'),
			//'jam_keluar_tamu'=> $this->input->post('jam_keluar_tamu'),
			'keterangan_tamu'=> $this->input->post('keterangan_tamu'),
			//'photo_tamu'=> $this->input->post('photo_tamu'),
			//'ttd_tamu'=> $this->input->post('ttd_tamu'),
			'status_tamu'=> $this->input->post('status_tamu')
			 ];
		    $this->db->insert('tbl_tamu', $data);
	}
	public function getallpengunjung()
	 {
	    $this->db->order_by('id_tamu', 'DESC');
		return $this->db->get('tbl_tamu')->result_array();
	 }

	 public function tambahdata($data,$table)
	 {
	 	$this->db->insert($table,$data);
	 }

}

/* End of file model_buku.php */
/* Location: ./application/models/model_buku.php */