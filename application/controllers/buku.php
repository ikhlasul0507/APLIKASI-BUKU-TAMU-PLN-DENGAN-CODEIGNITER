<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class buku extends CI_Controller {

	public function index()
	{
		$data['judul']='Beranda';
	
		$active['berita']= $this->model_admin->getallberita();
		$active['bukti']= $this->model_admin->getallbukti();
		$active['satpam']= $this->model_admin->getallsatpam();
		$active['pegawai']= $this->model_admin->getallpegawai();
		//$active['pegawai']= $this->model_buku->getallpengunjung();
		$this->load->view('tamu/temp/header',$data);
		$this->load->view('tamu/temp/navbar');
		$this->load->view('tamu/index',$active);
		$this->load->view('tamu/temp/footer');
	}


	public function simpan_photo ()
	{
		$config['upload_path'] 		= './assets/buku/img';
		$config['allowed_types'] 	= 'jpeg|jpg|png';
		$config['max_size'] 		= 10000;
		$config['max_width'] 		= 10000;
		$config['max_height']  		= 10000;
		$config['file_name'] 		= time().'.jpg';
 
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		 if (!$this->upload->do_upload('webcam')) {

			$this->session->set_flashdata('msg','Gagal Upload');
			redirect('buku/index');
		 }

		echo($config['file_name']);
	}
	public function tambahdata()
	{
		 
		 	$nomor_tamu= $this->input->post('nomor_tamu');
			$no_hp_tamu= $this->input->post('no_hp_tamu');
			$tanggal_tamu= $this->input->post('tanggal_tamu');
			$nama_satpam= $this->input->post('nama_satpam');
			$bukti_tamu= $this->input->post('bukti_tamu');
			$jam_masuk_tamu= $this->input->post('jam_masuk_tamu');
			$menemui_tamu= $this->input->post('menemui_tamu');
			$nama_tamu= $this->input->post('nama_tamu');
			//'jam_keluar_tamu'=> $this->input->post('jam_keluar_tamu'),
			$keterangan_tamu= $this->input->post('keterangan_tamu');
			$photo_tamu= $this->input->post('photo_tamu');
			//'ttd_tamu'=> $thi=input->post('ttd_tamu'),
			$status_tamu= $this->input->post('status_tamu');

			if($nomor_tamu==''){
				$result['pesan']= "Nomor Tamu Harus Diisi !";

			}elseif($no_hp_tamu==''){
				$result['pesan']= "Handphone Harus Diisi !";

			}elseif($bukti_tamu=='---Pilih Bukti Diri---'){
				$result['pesan']= "Pilih Bukti Diri Anda !";

			}elseif($nama_satpam=='---Pilih Nama Satpam---'){
				$result['pesan']= "Pilih Nama Satpam !";	

			}elseif($menemui_tamu=='---Mengunjungi---'){
				$result['pesan']= "Pilih Mengunjungi Siapa ?";		

			}elseif($keterangan_tamu==''){
				$result['pesan']= "Keterangan Harus Diisi !";	

			}elseif($nama_tamu==''){
				$result['pesan']= "Nama Tamu Harus Diisi !";

			}else{
				$result['pesan']= "Data Berhasil Di Simpan !";

			$data=[
		 	'nomor_tamu'=> $nomor_tamu,
			'no_hp_tamu'=> $no_hp_tamu,
			'tanggal_tamu'=> $tanggal_tamu,
			'nama_satpam'=> $nama_satpam,
			'bukti_tamu'=> $bukti_tamu,
			'jam_masuk_tamu'=> $jam_masuk_tamu,
			'menemui_tamu'=> $menemui_tamu,
			'nama_tamu'=> $nama_tamu,
			//'jam_keluar_tamu'=> $this->input->post('jam_keluar_tamu'),
			'keterangan_tamu'=> $keterangan_tamu,
			'photo_tamu'=> $photo_tamu,
			//'ttd_tamu'=> $this->input->post('ttd_tamu'),
			'status_tamu'=> $status_tamu
			 ];

			 $this->model_buku->tambahdata($data,'tbl_tamu');

			}

			echo json_encode($result);
		}

		public function proses_kontak()
		{

		//validation form
		$this->form_validation->set_rules('nama_kontak','Nama Kontak','required|trim');
		$this->form_validation->set_rules('email_kontak','Email Kontak','required|trim');
		$this->form_validation->set_rules('subject_kontak','Subjek Kontak','required|trim');
		$this->form_validation->set_rules('pesan_kontak','Pesan Kontak','trim');
		
		if($this->form_validation->run()== FALSE)
		{
				$this->session->set_flashdata('gagal', 'Ditambahkan!');
				redirect('buku');
		}else
		{
			$this->model_buku->daftarkontak();
			$data = $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan!');
			redirect('buku',$data);
		}
	}
	public function simpan_saran()
		{

		//validation form
		$this->form_validation->set_rules('customRadioInline1','Harus Dipilih','trim');
		$this->form_validation->set_rules('saran','Saran','trim');
		
		if($this->form_validation->run()== FALSE)
		{
				echo form_error();
				die();
				redirect('buku');
		}else
		{
			$this->model_buku->daftarsaran();
			$data= $this->session->set_flashdata('pesan', "Data Berhasil Di Simpan !");
			redirect('buku',$data);
		}
	}
	
	public function simpan_ttd()
	{
		$result = array();
		$imagedata = base64_decode($_POST['img_data']);
	//	$filename = md5(date("dmYhisA"));
		//Location to where you want to created sign image
		$file_name = $this->simpan_photo_ttd();
		//$file_name = './doc_signs/'.$filename.'.png';
		file_put_contents($file_name,$imagedata);
		$result['status'] = 1;
		$result['file_name'] = $file_name;
		echo json_encode($result);
	}
	public function simpan_photo_ttd ()
	{
		$config['upload_path'] 		= './assets/buku/ttd';
		$config['allowed_types'] 	= 'jpeg|jpg|png';
		$config['max_size'] 		= 10000;
		$config['max_width'] 		= 10000;
		$config['max_height']  		= 10000;
		$config['file_name'] 		= time().'.jpg';
 
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		 if (!$this->upload->do_upload('img_data')) {

			$this->session->set_flashdata('msg','Gagal Upload');
			redirect('buku/index');
		 }

		echo($config['file_name']);
	}
}