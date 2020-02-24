<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	// public  function __construct(){
	// 	parent::__construct();

	// 	if(!$this->session->set_userdata('username_admin'))
	// 		redirect ("admin/index");

	// }

	public function keluar(){
		unset($username_admin);
		$this->session->sess_destroy();
		redirect('admin');

	}
	public function index()
	{
		$this->form_validation->set_rules('username_admin', 'Username admin', 'required|trim|max_length[8]');
		$this->form_validation->set_rules('password_admin', 'Password admin', 'required|trim|max_length[8]');
		if ($this->form_validation->run() == FALSE)
		{
		$data['judul']= 'Halaman Beranda';
		$this->load->view('admin/admin/index',$data);
		}
		else
		{
			$username_admin = $this->input->post('username_admin',true);
        	$password_admin = $this->input->post('password_admin',true);
	        // boros oooo
	        $cek = $this->model_admin->loginadmin($username_admin, $password_admin);  
	        $hasil= count($cek);

	        if($hasil> 0)
          	{
            $this->session->set_userdata(array('username_admin'=>$username_admin));
            $data = $this->session->set_flashdata('pesan', 'Selamat Datang '.$username_admin.' !');
            redirect('admin/beranda',$cek,$data);
          
	        } else{
	        	$data = $this->session->set_flashdata('pesan', 'Data Yang Dimasukan Tidak Benar !');
	        	redirect('admin',$data);
	        }
		}
	}
		
	public function konten()
	{
		$data['judul']= 'Halaman Konten';
		$active['link']= 'Admin/konten';
		$active['admin']= $this->model_admin->getalladmin();
		$this->load->view('admin/temp/header',$data);
		$this->load->view('admin/temp/sidebar');
		$this->load->view('admin/admin/konten',$active);
		$this->load->view('admin/temp/footer');
	}
	public function beranda()
	{
		$data['judul']= 'Halaman Beranda';
		$active['link']= 'Admin/beranda';
		$this->load->view('admin/temp/header',$data);
		$this->load->view('admin/temp/sidebar');
		$this->load->view('admin/admin/beranda',$active);
		$this->load->view('admin/temp/footer');
	}
	public function tambah()
	{
		$data['judul']= 'Halaman Tambah';

		$this->form_validation->set_rules('nama_admin', 'Nama admin', 'required|trim');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis kelamin', 'required|trim');
		$this->form_validation->set_rules('email_admin', 'Email admin', 'required|valid_email|trim|is_unique[tbl_admin.email_admin]');
		$this->form_validation->set_rules('username_admin', 'Username admin', 'required|trim|max_length[8]|is_unique[tbl_admin.username_admin]');
		$this->form_validation->set_rules('password_admin', 'Password admin', 'required|trim|max_length[8]');
		$this->form_validation->set_rules('password_admin1', 'Password admin1', 'required|trim|max_length[8]|matches[password_admin]');
		$this->form_validation->set_rules('photo_admin', 'Photo admin', 'trim');
		if ($this->form_validation->run() == FALSE)
		    {
			$active['link']= 'Admin/Tambah';
			$this->load->view('admin/temp/header',$data);
			$this->load->view('admin/temp/sidebar');
			$this->load->view('admin/admin/tambah',$active);
			$this->load->view('admin/temp/footer');
			 }
        else{           
			$data = array(
				'nama_admin' => $this->input->post('nama_admin'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'email_admin' => $this->input->post('email_admin'),
				'username_admin' => $this->input->post('username_admin'),
				'password_admin' => $this->input->post('password_admin'),
				'photo_admin' => $this->input->post('photo_admin'),
			);
			if (!empty($_FILES['photo_admin']['name'])) 
			{
				$upload = $this->_do_upload();
				$data['photo_admin'] = $upload;
			}
			$this->model_admin->tambah($data);
			$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Tambah  !');
			redirect('admin/konten', $data);
		}
	}
	private function _do_upload()
	{
		$config['upload_path'] 		= './assets/admin/img';
		$config['allowed_types'] 	= 'jpeg|jpg|png';
		$config['max_size'] 		= 10000;
		$config['max_width'] 		= 10000;
		$config['max_height']  		= 10000;
		$config['file_name'] 		= $this->input->post('photo_admin');
 
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('photo_admin')) {

			$data = $this->session->set_flashdata('pesan','Gagal Upload');
			redirect('admin/tambah',$data);
		}
		return $this->upload->data('file_name');
	}
	public function hapus($id_admin)
			{
				$this->model_admin->hapusDataAdmin($id_admin);

				$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus  !');
				redirect('admin/konten', $data);
			}
	public function edit($id_admin)
			{
				$data['judul']= 'Halaman Edit Admin';
				$data['admin']= $this->model_admin->getAdminById($id_admin);

				//form validation
					$this->form_validation->set_rules('nama_admin', 'Nama admin', 'required|trim');
					$this->form_validation->set_rules('jenis_kelamin', 'Jenis kelamin', 'required|trim');
					$this->form_validation->set_rules('email_admin', 'Email admin', 'required|valid_email|trim');
					$this->form_validation->set_rules('username_admin', 'Username admin', 'required|trim|max_length[8]');
					$this->form_validation->set_rules('password_admin', 'Password admin', 'required|trim|max_length[8]');
					$this->form_validation->set_rules('password_admin1', 'Password admin', 'required|trim|max_length[8]|matches[password_admin]');
					$this->form_validation->set_rules('photo_admin', 'Photo admin', 'trim');
					if ($this->form_validation->run() == FALSE)
					    {
						$active['link']= 'Admin/Edit';
						$this->load->view('admin/temp/header',$data);
						$this->load->view('admin/temp/sidebar');
						$this->load->view('admin/admin/edit',$active);
						$this->load->view('admin/temp/footer');
						 }
			        else{           
						$data = array(
							'nama_admin' => $this->input->post('nama_admin'),
							'jenis_kelamin' => $this->input->post('jenis_kelamin'),
							'email_admin' => $this->input->post('email_admin'),
							'username_admin' => $this->input->post('username_admin'),
							'password_admin' => $this->input->post('password_admin')
							//'photo_admin' => $this->input->post('photo_admin'),
						);
						
						if (!empty($_FILES['photo_admin']['name'])) 
						{
							$upload =  $this->_do_upload();
							$data['photo_admin'] = $upload;
						
						}
						$this->model_admin->ubahDataAdmin($id_admin,$data);

						$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Edit  !');
						redirect('admin/konten', $data);
					}
			}

	public function berita()
	{
		
		$data['judul']= 'Halaman Berita';

		$this->load->library('pagination');
		//config
				$config['base_url']= 'http://localhost/visit-app/admin/berita/index';
				$config['total_rows']= $this->model_admin->countAllBerita();
				$config['per_page']= 10;
				$config['num_links']= 3;
		//styling

				$config['full_tag_open']= '<nav>
  						<ul class="pagination justify-content-center">';
				$config['full_tag_close']= '</ul></nav>';

				$config['first_link']= 'First';
				$config['first_tag_open']= '<li class="page-item">';
				$config['first_tag_close']= '</li>';

				$config['last_link']= 'Last';
				$config['last_tag_open']= '<li class="page-item">';
				$config['last_tag_close']= '</li>';

				$config['next_link']= '&raquo';
				$config['next_tag_open']= '<li class="page-item">';
				$config['next_tag_close']= '</li>';

				$config['prev_link']= '&laquo';
				$config['prev_tag_open']= '<li class="page-item">';
				$config['prev_tag_close']= '</li>';

				$config['cur_tag_open']= '<li class="page-item active"><a class="page-link" href="#">';
				$config['cur_tag_close']= '</a></li>';

				$config['num_tag_open']= '<li class="page-item">';
				$config['num_tag_close']= '</li>';

				$config['attributes']= array('class'=> 'page-link');

				//inittialize
				$this->pagination->initialize($config);


				//segment pada link uri di web browser ppada folder berapa
				$data['start'] = $this->uri->segment(4);
				$data['berita']= $this->model_admin->getBerita( $config['per_page'], $data['start']);

				$active['link']= 'Admin/Berita';
				//$active['berita']= $this->model_admin->getallberita();
				$this->load->view('admin/temp/header',$data);
				$this->load->view('admin/temp/sidebar');
				$this->load->view('admin/berita/index',$active,$data);
				$this->load->view('admin/temp/footer');

	}
	public function tambah_berita()
	{
		$data['judul']= 'Halaman Tambah Berita';

		$this->form_validation->set_rules('waktu_berita', 'Waktu Berita', 'required|trim');
		$this->form_validation->set_rules('judul_berita', 'Judul Berita', 'required|trim');
		$this->form_validation->set_rules('isi_berita', 'Isi Berita', 'required|trim');
		$this->form_validation->set_rules('photo_admin', 'Photo Berita', 'trim');
		if ($this->form_validation->run() == FALSE)
		    {
			$active['link']= 'Admin/Tambah Berita';
			$this->load->view('admin/temp/header',$data);
			$this->load->view('admin/temp/sidebar');
			$this->load->view('admin/berita/tambah',$active);
			$this->load->view('admin/temp/footer');
			 }
        else{           
			$data = array(
				'waktu_berita' => $this->input->post('waktu_berita'),
				'judul_berita' => $this->input->post('judul_berita'),
				'isi_berita' => $this->input->post('isi_berita'),
				'photo_berita' => $this->input->post('photo_berita '),
			);
			if (!empty($_FILES['photo_berita']['name'])) 
			{
				$upload = $this->_do_upload_berita();
				$data['photo_berita'] = $upload;
			}
			$this->model_admin->tambah_berita($data);
			$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Tambahkan  !');
			redirect('admin/berita', $data);
		}
	}
	private function _do_upload_berita()
	{
		$config['upload_path'] 		= './assets/admin/img';
		$config['allowed_types'] 	= 'jpeg|jpg|png';
		$config['max_size'] 		= 10000;
		$config['max_width'] 		= 10000;
		$config['max_height']  		= 10000;
		$config['file_name'] 		= $this->input->post('photo_berita');
 
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('photo_berita')) {

			$this->session->set_flashdata('msg','Gagal Upload');
			redirect('admin/tambah_berita');
		}
		return $this->upload->data('file_name');
	}
	public function hapus_berita($id_berita)
			{
				$this->model_admin->hapusDataBerita($id_berita);
				$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus  !');
				redirect('admin/berita');
			}
	public function edit_berita($id_berita)
	{
		$data['judul']= 'Halaman Edit Berita';
		$data['berita']= $this->model_admin->getBeritaById($id_berita);

		$this->form_validation->set_rules('waktu_berita', 'Waktu Berita', 'required|trim');
		$this->form_validation->set_rules('judul_berita', 'Judul Berita', 'required|trim');
		$this->form_validation->set_rules('isi_berita', 'Isi Berita', 'required|trim');
		$this->form_validation->set_rules('photo_admin', 'Photo Berita', 'trim');
		if ($this->form_validation->run() == FALSE)
		    {
			$active['link']= 'Admin/Edit Berita';
			$this->load->view('admin/temp/header',$data);
			$this->load->view('admin/temp/sidebar');
			$this->load->view('admin/berita/edit',$active);
			$this->load->view('admin/temp/footer');
			 }
        else{           
			$data = array(
				'waktu_berita' => $this->input->post('waktu_berita'),
				'judul_berita' => $this->input->post('judul_berita'),
				'isi_berita' => $this->input->post('isi_berita'),
				//'photo_berita' => $this->input->post('photo_berita '),
			);
			if (!empty($_FILES['photo_berita']['name'])) 
			{
				$upload = $this->_do_upload_berita();
				$data['photo_berita'] = $upload;
			}
			$this->model_admin->ubahDataBerita($id_berita,$data);
			$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Edit  !');
			redirect('admin/berita', $data);
			
		}
	}
	public function kontak()
	{
								

		$data['judul']= 'Halaman Kontak';

		$this->load->library('pagination');

		//pencarian

		if ($this->input->post('submit')) {
			$data['keyword']= $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		}else{
			$data['keyword']= $this->session->userdata('keyword');
		}

		//config
				$config['base_url']= 'http://localhost/visit-app/admin/kontak/index';

				$this->db->like('nama_kontak',$data['keyword']);
				$this->db->from('tbl_kontak');
				$config['total_rows']= $this->db->count_all_results();
				$data['total_rows']= $config['total_rows'];
				$config['per_page']= 5;
				$config['num_links']= 3;
		//styling

				$config['full_tag_open']= '<nav>
  						<ul class="pagination justify-content-center">';
				$config['full_tag_close']= '</ul></nav>';

				$config['first_link']= 'First';
				$config['first_tag_open']= '<li class="page-item">';
				$config['first_tag_close']= '</li>';

				$config['last_link']= 'Last';
				$config['last_tag_open']= '<li class="page-item">';
				$config['last_tag_close']= '</li>';

				$config['next_link']= '&raquo';
				$config['next_tag_open']= '<li class="page-item">';
				$config['next_tag_close']= '</li>';

				$config['prev_link']= '&laquo';
				$config['prev_tag_open']= '<li class="page-item">';
				$config['prev_tag_close']= '</li>';

				$config['cur_tag_open']= '<li class="page-item active"><a class="page-link" href="#">';
				$config['cur_tag_close']= '</a></li>';

				$config['num_tag_open']= '<li class="page-item">';
				$config['num_tag_close']= '</li>';

				$config['attributes']= array('class'=> 'page-link');

				//inittialize
				$this->pagination->initialize($config);


				//segment pada link uri di web browser ppada folder berapa
				$data['start'] = $this->uri->segment(4);
				$data['kontak']= $this->model_admin->getKontak( $config['per_page'], $data['start'],$data['keyword']);

				$active['link']= 'Admin/Kontak';
				//$active['berita']= $this->model_admin->getallberita();
				
				$this->load->view('admin/temp/header',$data);
				$this->load->view('admin/temp/sidebar');
				$this->load->view('admin/kontak/index',$active,$data);
				$this->load->view('admin/temp/footer');
	}
	public function hapus_kontak($id_kontak)
			{
				$this->model_admin->hapusDataKontak($id_kontak);
				$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus  !');
				redirect('admin/kontak');
			}
	//fungsi data
	public function data()
	{
		$this->load->library('pagination');

		//pencarian

		if ($this->input->post('submit')) {
			$data['keyword']= $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		}else{
			$data['keyword']= $this->session->userdata('keyword');
		}

		//config
				$config['base_url']= 'http://localhost/visit-app/admin/data/index';

				$this->db->like('nama_pegawai',$data['keyword']);
				$this->db->from('tbl_pegawai');
				$config['total_rows']= $this->db->count_all_results();
				$active['total_rows']= $config['total_rows'];
				$config['per_page']= 5;
				$config['num_links']= 3;
		//styling

				$config['full_tag_open']= '<nav>
  						<ul class="pagination justify-content-center">';
				$config['full_tag_close']= '</ul></nav>';

				$config['first_link']= 'First';
				$config['first_tag_open']= '<li class="page-item">';
				$config['first_tag_close']= '</li>';

				$config['last_link']= 'Last';
				$config['last_tag_open']= '<li class="page-item">';
				$config['last_tag_close']= '</li>';

				$config['next_link']= '&raquo';
				$config['next_tag_open']= '<li class="page-item">';
				$config['next_tag_close']= '</li>';

				$config['prev_link']= '&laquo';
				$config['prev_tag_open']= '<li class="page-item">';
				$config['prev_tag_close']= '</li>';

				$config['cur_tag_open']= '<li class="page-item active"><a class="page-link" href="#">';
				$config['cur_tag_close']= '</a></li>';

				$config['num_tag_open']= '<li class="page-item">';
				$config['num_tag_close']= '</li>';

				$config['attributes']= array('class'=> 'page-link');

				//inittialize
				$this->pagination->initialize($config);


				//segment pada link uri di web browser ppada folder berapa
				$active['start'] = $this->uri->segment(4);
				$active['pegawai']= $this->model_admin->getPegawai( $config['per_page'], $active['start'],$data['keyword']);

				$data['judul']= 'Halaman Data';
				$active['link']= 'Admin/Data';
				$active['bukti']= $this->model_admin->getallbukti();
				$active['satpam']= $this->model_admin->getallsatpam();
				//$active['pegawai']= $this->model_admin->getallpegawai();
				$this->load->view('admin/temp/header',$data);
				$this->load->view('admin/temp/sidebar');
				$this->load->view('admin/data/index',$active);
				$this->load->view('admin/temp/footer');
	}
	public function tambah_bukti()
	{
		$data['judul']= 'Halaman Tambah Bukti';

		$this->form_validation->set_rules('nama_bukti', 'Nama Bukti', 'required|trim');
		if ($this->form_validation->run() == FALSE)
		    {
			$active['link']= 'Admin/Tambah Bukti Diri';
			$this->load->view('admin/temp/header',$data);
			$this->load->view('admin/temp/sidebar');
			$this->load->view('admin/data/tambah_bukti',$active);
			$this->load->view('admin/temp/footer');
			 }
        else{           
			$data = array('nama_bukti' => $this->input->post('nama_bukti'));
			$this->model_admin->tambah_bukti($data);
			$data = $this->session->set_flashdata('pesanbukti', 'Data Berhasil Di Tambah  !');
			redirect('admin/data', $data);
		}
	}
	public function hapus_bukti($id_bukti)
			{
				$this->model_admin->hapusDataBukti($id_bukti);
				$data = $this->session->set_flashdata('pesanbukti', 'Data Berhasil Di Hapus  !');
				redirect('admin/data',$data);
			}
	public function tambah_satpam()
	{
		$data['judul']= 'Halaman Tambah Satpam';

		$this->form_validation->set_rules('nama_satpam', 'Nama Satpam', 'required|trim');
		if ($this->form_validation->run() == FALSE)
		    {
			$active['link']= 'Admin/Tambah Satpam';
			$this->load->view('admin/temp/header',$data);
			$this->load->view('admin/temp/sidebar');
			$this->load->view('admin/data/tambah_satpam',$active);
			$this->load->view('admin/temp/footer');
			 }
        else{           
			$data = array('nama_satpam' => $this->input->post('nama_satpam'));
			$this->model_admin->tambah_satpam($data);
			$data = $this->session->set_flashdata('pesansatpam', 'Data Berhasil Di Tambah  !');
			redirect('admin/data', $data);
		}
	}
	public function hapus_satpam($id_satpam)
			{
				$this->model_admin->hapusDataSatpam($id_satpam);
				$data = $this->session->set_flashdata('pesansatpam', 'Data Berhasil Di Hapus  !');
				redirect('admin/data',$data);
			}

	public function tambah_pegawai()
	{
		$data['judul']= 'Halaman Tambah Pegawai';

		$this->form_validation->set_rules('nama_pegawai', 'Nama Pegawai', 'required|trim');
		$this->form_validation->set_rules('handphone_pegawai', 'Handphone Pegawai','required|trim');
		$this->form_validation->set_rules('jabatan_pegawai', 'Jabatan Pegawai', 'required|trim');
		if ($this->form_validation->run() == FALSE)
		    {
			$active['link']= 'Admin/Tambah Pegawai';
			$this->load->view('admin/temp/header',$data);
			$this->load->view('admin/temp/sidebar');
			$this->load->view('admin/data/tambah_pegawai',$active);
			$this->load->view('admin/temp/footer');
			 }
        else{           
			$data = array('nama_pegawai' => $this->input->post('nama_pegawai'),
						 'handphone_pegawai' => $this->input->post('handphone_pegawai'),
						 'jabatan_pegawai' => $this->input->post('jabatan_pegawai'));
			$this->model_admin->tambah_pegawai($data);
			$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Tambah  !');
			redirect('admin/data', $data);
		}
	}
	public function hapus_pegawai($id_pegawai)
			{
				$this->model_admin->hapusDataPegawai($id_pegawai);
				$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus  !');
				redirect('admin/data',$data);
			}
	public function edit_pegawai($id_pegawai)
	{
		$data['judul']= 'Halaman Edit Pegawai';
		$active['pegawai']= $this->model_admin->getPegawaiById($id_pegawai);

		$this->form_validation->set_rules('nama_pegawai', 'Nama Pegawai', 'required|trim');
		$this->form_validation->set_rules('handphone_pegawai', 'Handphone Pegawai','required|trim');
		$this->form_validation->set_rules('jabatan_pegawai', 'Jabatan Pegawai', 'required|trim');
		if ($this->form_validation->run() == FALSE)
		    {
			$active['link']= 'Admin/Edit Pegawai';
			$this->load->view('admin/temp/header',$data);
			$this->load->view('admin/temp/sidebar');
			$this->load->view('admin/data/edit_pegawai',$active);
			$this->load->view('admin/temp/footer');
			 }
        else{           
				$data = array('nama_pegawai' => $this->input->post('nama_pegawai'),
						 'handphone_pegawai' => $this->input->post('handphone_pegawai'),
						 'jabatan_pegawai' => $this->input->post('jabatan_pegawai'));
			$this->model_admin->ubahDataPegawai($data,$id_pegawai);
			$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Edit  !');
			redirect('admin/data', $data);
		}
	}
	public function export_excel_kontak()
    {
    	$data = array( 'title' => 'Laporan Excel | Kontak','kontak' => $this->model_admin->getallkontak());
 
           $this->load->view('admin/kontak/export_excel',$data);
    }

    public function cetak_pdf(){
    $this->load->library('dompdf_gen');

    $data['kontak'] = $this->model_admin->getallkontak();
    
    $this->load->view('admin/kontak/cetak_pdf', $data);

    $paper_size ='A4';
    $orientation = 'landscape';
    $data_header = array('title' => 'Convert Codeigniter to PDF',);
    $html = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation, $data_header);

    //convert pdf
    $this->dompdf->load_html($html);
    $this->dompdf->render();
    $this->dompdf->stream('Laporan Kontak.pdf', array('Attachment' =>0));

  }

  public function cetak_print()
    {
    	$data = array( 'title' => 'Laporan Print | Kontak','kontak' => $this->model_admin->getallkontak());
 
           $this->load->view('admin/kontak/cetak_print',$data);
    }

  //pengunjung
  public function pengunjung()
	{
								

		$data['judul']= 'Halaman Pengunjung';

		$this->load->library('pagination');

		//pencarian

		if ($this->input->post('submit')) {
			$data['keyword']= $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		}else{
			$data['keyword']= $this->session->userdata('keyword');
		}

		//config
				$config['base_url']= 'http://localhost/visit-app/admin/pengunjung/index';

				$this->db->like('nama_tamu',$data['keyword']);
				$this->db->from('tbl_tamu');
				$config['total_rows']= $this->db->count_all_results();
				$data['total_rows']= $config['total_rows'];
				$config['per_page']= 10;
				$config['num_links']= 3;
		//styling

				$config['full_tag_open']= '<nav>
  						<ul class="pagination justify-content-center">';
				$config['full_tag_close']= '</ul></nav>';

				$config['first_link']= 'First';
				$config['first_tag_open']= '<li class="page-item">';
				$config['first_tag_close']= '</li>';

				$config['last_link']= 'Last';
				$config['last_tag_open']= '<li class="page-item">';
				$config['last_tag_close']= '</li>';

				$config['next_link']= '&raquo';
				$config['next_tag_open']= '<li class="page-item">';
				$config['next_tag_close']= '</li>';

				$config['prev_link']= '&laquo';
				$config['prev_tag_open']= '<li class="page-item">';
				$config['prev_tag_close']= '</li>';

				$config['cur_tag_open']= '<li class="page-item active"><a class="page-link" href="#">';
				$config['cur_tag_close']= '</a></li>';

				$config['num_tag_open']= '<li class="page-item">';
				$config['num_tag_close']= '</li>';

				$config['attributes']= array('class'=> 'page-link');

				//inittialize
				$this->pagination->initialize($config);


				//segment pada link uri di web browser ppada folder berapa
				$data['start'] = $this->uri->segment(4);
				$data['pengunjung']= $this->model_admin->getPengunjung( $config['per_page'], $data['start'],$data['keyword']);

				$active['link']= 'Admin/Pengunjung';
				//$active['berita']= $this->model_admin->getallberita();
				$this->load->view('admin/temp/header',$data);
				$this->load->view('admin/temp/sidebar');
				$this->load->view('admin/pengunjung/index',$active,$data);
				$this->load->view('admin/temp/footer');
	}
	public function lengkapi_pengunjung($id_tamu)
	{	
		$data['judul']= 'Halaman Lengkapi Pengunjung';
		$active['pengunjung']= $this->model_admin->getPengunjungById($id_tamu);
		//validation form
		$this->form_validation->set_rules('nomor_tamu','Nama Kontak','required|trim');
		$this->form_validation->set_rules('no_hp_tamu','NO HP Tamu','required|trim');
		$this->form_validation->set_rules('tanggal_tamu','Tanggal Tamu','required|trim');
		$this->form_validation->set_rules('nama_satpam','Nama Satpam','required|trim');
		$this->form_validation->set_rules('bukti_tamu','Buku Tamu','required|trim');
		$this->form_validation->set_rules('jam_masuk_tamu','Jam Masuk Tamu','required|trim');
		$this->form_validation->set_rules('menemui_tamu','Menemui Tamu','required|trim');
		$this->form_validation->set_rules('nama_tamu','Nama Tamu','required|trim');
		$this->form_validation->set_rules('jam_keluar_tamu','Jam Keluar Tamu','required|trim');
		$this->form_validation->set_rules('keterangan_tamu','Keterangan Tamu','required|trim');
		//$this->form_validation->set_rules('photo_tamu', 'Photo Tamu', 'trim|required');
		//$this->form_validation->set_rules('ttd_tamu','Tanda Tangan Tamu','required|trim');
		$this->form_validation->set_rules('status_tamu','Status Tamu','required|trim');
		//kondisi
		if($this->form_validation->run()== FALSE)
		{
			
			$active['link']= 'Admin/Lengkapi Data';
			$this->load->view('admin/temp/header',$data);
			$this->load->view('admin/temp/sidebar');
			$this->load->view('admin/pengunjung/lengkapi',$active);
			$this->load->view('admin/temp/footer');
		}else
		{
			
			$this->model_admin->lengkapiPengunjung($id_tamu);
			$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Validasi  !');
			redirect('admin/pengunjung', $data);
		}
	}
	public function hapus_pengunjung($id_tamu)
			{
				$this->model_admin->hapusDataPengunjung($id_tamu);
				$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus  !');
				redirect('admin/pengunjung',$data);
			}
			//saran
	public function saran()
	{
								

		$data['judul']= 'Halaman Saran';

		$this->load->library('pagination');

		//config
				$config['base_url']= 'http://localhost/visit-app/admin/saran/index';

				$this->db->from('tbl_saran');
				$config['total_rows']= $this->db->count_all_results();
				$data['total_rows']= $config['total_rows'];
				$config['per_page']= 5;
				$config['num_links']= 3;
		//styling

				$config['full_tag_open']= '<nav>
  						<ul class="pagination justify-content-center">';
				$config['full_tag_close']= '</ul></nav>';

				$config['first_link']= 'First';
				$config['first_tag_open']= '<li class="page-item">';
				$config['first_tag_close']= '</li>';

				$config['last_link']= 'Last';
				$config['last_tag_open']= '<li class="page-item">';
				$config['last_tag_close']= '</li>';

				$config['next_link']= '&raquo';
				$config['next_tag_open']= '<li class="page-item">';
				$config['next_tag_close']= '</li>';

				$config['prev_link']= '&laquo';
				$config['prev_tag_open']= '<li class="page-item">';
				$config['prev_tag_close']= '</li>';

				$config['cur_tag_open']= '<li class="page-item active"><a class="page-link" href="#">';
				$config['cur_tag_close']= '</a></li>';

				$config['num_tag_open']= '<li class="page-item">';
				$config['num_tag_close']= '</li>';

				$config['attributes']= array('class'=> 'page-link');

				//inittialize
				$this->pagination->initialize($config);


				//segment pada link uri di web browser ppada folder berapa
				$data['start'] = $this->uri->segment(4);
				$data['saran']= $this->model_admin->getSaran( $config['per_page'], $data['start']);

				$active['link']= 'Admin/Saran';
				//$active['berita']= $this->model_admin->getallberita();
				
				$this->load->view('admin/temp/header',$data);
				$this->load->view('admin/temp/sidebar');
				$this->load->view('admin/saran/index',$active,$data);
				$this->load->view('admin/temp/footer');
	}
	public function hapus_saran($id_saran)
			{
				$this->model_admin->hapusDataSaran($id_saran);
				$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus  !');
				redirect('admin/saran');
			}
	public function export_excel_pengunjung()
    {
    	$data = array( 'title' => 'Laporan Excel | Pengunjung','pengunjung' => $this->model_admin->getallpengunjung());
 
        $this->load->view('admin/pengunjung/export_excel',$data);
    }

    public function export_pdf_pengunjung()
    {
	    $this->load->library('dompdf_gen');

	    $data['pengunjung'] = $this->model_admin->getallpengunjung();
	    
	    $this->load->view('admin/pengunjung/cetak_pdf', $data);

	    $paper_size ='A4';
	    $orientation = 'landscape';
	    $data_header = array('title' => 'Convert Codeigniter to PDF',);
	    $html = $this->output->get_output();
	    $this->dompdf->set_paper($paper_size, $orientation, $data_header);

	    //convert pdf
	    $this->dompdf->load_html($html);
	    $this->dompdf->render();
	    $this->dompdf->stream('Laporan Data Pengunjung.pdf', array('Attachment' =>0));
  	}
  	
}
