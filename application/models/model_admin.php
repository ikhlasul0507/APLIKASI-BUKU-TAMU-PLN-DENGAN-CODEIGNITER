<?php  

class model_admin extends CI_Model {

  public function tambah($data)
  {
    $this->db->insert('tbl_admin', $data);
  }
  public function getalladmin()
  {
    $this->db->order_by('id_admin', 'DESC');
	return $this->db->get('tbl_admin')->result_array();
  }
  public function loginadmin($username_admin,$password_admin)
	{
		$this->db->where('username_admin',$username_admin);
		$this->db->where('password_admin',$password_admin);
		return $this->db->get('tbl_admin')->row();
	}
  public function hapusDataAdmin($id_admin)
	{
		 $adm = $this->model_admin->getAdminById($id_admin);
	     $path= ('./assets/admin/img/'.$adm['photo_admin']);
         unlink($path);
         $this->db->where('id_admin', $id_admin);
		 $this->db->delete('tbl_admin');
	}
   public function ubahDataAdmin($id_admin, $data)
	{			
		$this->db->where('id_admin', $this->input->post('id_admin'));
		$this->db->update('tbl_admin', $data);
	}
	public function getAdminById($id_admin)
		{
			return $this->db->get_where('tbl_admin',['id_admin'=>  $id_admin])->row_array();
		}
		//fungsi ambil semua data berita
	public function getallberita()
	 {
	    $this->db->order_by('id_berita', 'DESC');
		return $this->db->get('tbl_berita',4)->result_array();
	 }
	 public function getBerita( $limit, $start)
	{
		$this->db->order_by('id_berita', 'DESC');
		return $this->db->get('tbl_berita', $limit, $start)->result_array();
	}
	public function countAllBerita()
	{
		return $this->db->get('tbl_berita')->num_rows();
	}
	 public function tambah_berita($data)
	  {
	    $this->db->insert('tbl_berita', $data);
	  }
	 public function hapusDataBerita($id_berita)
	 {
	 	 $brt = $this->model_admin->getBeritaById($id_berita);
	     $path= ('./assets/admin/img/'.$brt['photo_berita']);
         unlink($path);
         $this->db->where('id_berita', $id_berita);
		 $this->db->delete('tbl_berita');

	 }
	 public function getBeritaById($id_berita)
		{
			return $this->db->get_where('tbl_berita',['id_berita'=>  $id_berita])->row_array();
		}
	 public function ubahDataBerita($id_berita, $data)
	 {			
		$this->db->where('id_berita', $this->input->post('id_berita'));
		$this->db->update('tbl_berita', $data);
	 }

	 //kontak
	 public function getallkontak()
	 {
	    $this->db->order_by('id_kontak', 'DESC');
		return $this->db->get('tbl_kontak')->result_array();
	 }
	  public function getKontak( $limit, $start, $keyword= null)
	{
		//logika pecarian
		if ($keyword) {
			$this->db->like('nama_kontak', $keyword);
			$this->db->or_like('email_kontak', $keyword);
			$this->db->or_like('subject_kontak', $keyword);
			$this->db->or_like('pesan_kontak', $keyword);
		}

		$this->db->order_by('id_kontak', 'DESC');
		return $this->db->get('tbl_kontak', $limit, $start)->result_array();
	}
	public function countAllKontak()
	{
		return $this->db->get('tbl_kontak')->num_rows();
	}
	 public function hapusDataKontak($id_kontak)
	{
		 $this->db->where('id_kontak', $id_kontak);
		 $this->db->delete('tbl_kontak');
	}
	 public function tambah_bukti($data)
	  {
	    $this->db->insert('tbl_bukti', $data);
	  }
	public function getallbukti()
	 {
	    $this->db->order_by('id_bukti', 'DESC');
		return $this->db->get('tbl_bukti')->result_array();
	 }
	 public function hapusDataBukti($id_bukti)
	 {
		 $this->db->where('id_bukti', $id_bukti);
	     $this->db->delete('tbl_bukti');
	 }
	 public function tambah_satpam($data)
	  {
	    $this->db->insert('tbl_satpam', $data);
	  }
	public function getallsatpam()
	 {
	    $this->db->order_by('id_satpam', 'DESC');
		return $this->db->get('tbl_satpam')->result_array();
	 }
	 public function hapusDataSatpam($id_satpam)
	 {
		 $this->db->where('id_satpam', $id_satpam);
	     $this->db->delete('tbl_satpam');
	 }
	 public function tambah_pegawai($data)
	  {
	    $this->db->insert('tbl_pegawai', $data);
	  }
	public function getallpegawai()
	 {
	    $this->db->order_by('id_pegawai', 'ASC');
		return $this->db->get('tbl_pegawai')->result_array();
	 }
	 public function hapusDataPegawai($id_pegawai)
	 {
		 $this->db->where('id_pegawai', $id_pegawai);
	     $this->db->delete('tbl_pegawai');
	 }

	  public function getPegawai( $limit, $start, $keyword= null)
	{
		//logika pecarian
		if ($keyword) {
			$this->db->like('nama_pegawai', $keyword);
			$this->db->or_like('handphone_pegawai', $keyword);
			$this->db->or_like('jabatan_pegawai', $keyword);
		}

		$this->db->order_by('id_pegawai', 'ASC');
		return $this->db->get('tbl_pegawai', $limit, $start)->result_array();
	}
	 public function getPegawaiById($id_pegawai)
		{
			return $this->db->get_where('tbl_pegawai',['id_pegawai'=>  $id_pegawai])->row_array();
		}
	public function ubahDataPegawai( $data,$id_pegawai)
	 {			
		$this->db->where('id_pegawai', $this->input->post('id_pegawai'));
		$this->db->update('tbl_pegawai', $data);
	 }

	public function getallpengunjung()
	 {
	    $this->db->order_by('id_tamu', 'DESC');
		return $this->db->get('tbl_tamu')->result_array();
	 }
	 public function getPengunjung( $limit, $start, $keyword= null)
	{
		//logika pecarian
		if ($keyword) {
			$this->db->like('nama_tamu', $keyword);
			$this->db->or_like('no_hp_tamu', $keyword);
		}

		$this->db->order_by('id_tamu', 'DESC');
		return $this->db->get('tbl_tamu', $limit, $start)->result_array();
	}
	 public function getPengunjungById($id_tamu)
		{
			return $this->db->get_where('tbl_tamu',['id_tamu'=>  $id_tamu])->row_array();
		}
	 public function lengkapiPengunjung($id_tamu)
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
			'jam_keluar_tamu'=> $this->input->post('jam_keluar_tamu'),
			'keterangan_tamu'=> $this->input->post('keterangan_tamu'),
			//'photo_tamu'=> $this->input->post('photo_tamu'),
			//'ttd_tamu'=> $this->input->post('ttd_tamu'),
			'status_tamu'=> $this->input->post('status_tamu')
			 ];

	 	$this->db->where('id_tamu', $this->input->post('id_tamu'));
	 	$this->db->update('tbl_tamu', $data);
	 }
	  public function hapusDataPengunjung($id_tamu)
	 {
		 $this->db->where('id_tamu', $id_tamu);
	     $this->db->delete('tbl_tamu');
	 }

	 //saran

	public function getSaran( $limit, $start)
	{
		$this->db->order_by('id_saran', 'DESC');
		return $this->db->get('tbl_saran', $limit, $start)->result_array();
	}
	 public function hapusDataSaran($id_saran)
	{
		 $this->db->where('id_saran', $id_saran);
		 $this->db->delete('tbl_saran');
	}
}