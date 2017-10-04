<?php 

class admin extends CI_Controller{
	
	//client
	public function index($page="tulis"){
		if ($this->session->has_userdata('admin_username')) {
			$id['page'] = $page;
			$this->load->view('admin/layout/header', $id);
			$this->load->view('admin/content/tulis');
			$this->load->view('admin/layout/footer');
		}
		else{
			redirect(base_url('admin/login'));
		}
	} 
	public function download_berkas(){
		$this->load->library('zip');
		$path = 'uploads/berkas';
		$this->zip->read_dir($path, true);
		$this->zip->archive('berkas.zip'); 
		$this->zip->download('berkas.zip');
	}

	public function artikel($page="artikel"){
		if ($this->session->has_userdata('admin_username')) {
			$data = $this->data->readWH('artikel', 'kategori_artikel', 'Artikel')->result_array();
			$id['page'] = $page;
			$id['tampil'] = $data;
			$this->load->view('admin/layout/header', $id);
			$this->load->view('admin/content/artikel', $id);
			$this->load->view('admin/layout/footer');
		}
		else{
			redirect(base_url('admin/login'));
		}
	} 
	public function berita($page="berita"){
		if ($this->session->has_userdata('admin_username')) {
			$data = $this->data->readWH('artikel', 'kategori_artikel', 'Berita')->result_array();
			$id['page'] = $page;
			$id['tampil'] = $data;
			$this->load->view('admin/layout/header', $id);
			$this->load->view('admin/content/artikel', $id);
			$this->load->view('admin/layout/footer');
		}
		else{
			redirect(base_url('admin/login'));
		}
	} 
	public function kegiatan($page="kegiatan"){
		if ($this->session->has_userdata('admin_username')) {
			$data = $this->data->readWH('artikel', 'kategori_artikel', 'Kegiatan')->result_array();
			$id['page'] = $page;
			$id['tampil'] = $data;
			$this->load->view('admin/layout/header', $id);
			$this->load->view('admin/content/artikel', $id);
			$this->load->view('admin/layout/footer');
		}
		else{
			redirect(base_url('admin/login'));
		}
	} 
	public function oprec($page="oprec"){
		if ($this->session->has_userdata('admin_username')) {
			$data = $this->data->read('oprec')->result_array();
			$id['page'] = $page;
			$id['tampil'] = $data;
			$this->load->view('admin/layout/header', $id);
			$this->load->view('admin/content/oprec', $id);
			$this->load->view('admin/layout/footer');
		}
		else{
			redirect(base_url('admin/login'));
		}
	} 


	public function login(){
		$this->load->view('admin/content/login');
	}

	//server

	public function cek_login(){
		$username = $this->input->post('username');
		$password = $this->data->rahasia($this->input->post('password'));

		$data = $this->data->read('admin_login')->result_array();
		foreach ($data as $d) {
			$pass = $d['password'];
			$user = $d['username'];
		}
		
		if ($username==$user) {
			if ($password==$pass) {
				$data = array('admin_username' => $username );
				$this->session->set_userdata($data);
				$this->session->set_flashdata('warning', 'Berhasil');
				redirect(base_url('admin'));
			}
			else{
				$this->session->set_flashdata('warning', 'Passowrd Salah');
				redirect(base_url('admin/login'));
			}
		}
		else{
			$this->session->set_flashdata('warning', 'Username Salah');
			redirect(base_url('admin/login'));
		}
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect('admin');
	} 
	public function upload(){
		$config['upload_path']          = 'uploads/';
	    $config['allowed_types']        = 'gif|jpg|png';
	    $config['max_size']             = 5000;
	    $config['max_width']            = 5000;
	    $config['max_height']           = 5000;
	    $base_path = base_url('uploads/');
	    $this->load->library('upload', $config);
	    if ( ! $this->upload->do_upload('gambar')){
            $error = array('error' => $this->upload->display_errors());
            echo print_r($error);
        }
        else{
            $updata = array('upload_data' => $this->upload->data());
			foreach ($updata as $d) {
				$filename = $d['file_name'];
			}
			$path=$base_path.$filename;
        }
        $timestamp = mdate(time());
        $kategori = $this->input->post('kategori');
        $id_artikel = $kategori.$timestamp;
	    $judul = $this->input->post('judul');
	    $konten = $this->input->post('konten');
	    $link = $this->input->post('link');
	    $data = array(
	    	'id_artikel' => $id_artikel,
	    	'judul_artikel' => $judul,
	    	'kategori_artikel' => $kategori,
	    	'gambar_artikel' => $path,
	    	'konten_artikel' => $konten, 
	    	'timestamp' => $timestamp,  
	    	'link_instagram' => $link, 
	    );
	    if ($this->data->insert('artikel', $data)) {
	    	$this->session->set_flashdata('upload', 'Upload Sukses');
	    	redirect(base_url('admin'));
	    }
	    else{
	    	$this->session->set_flashdata('upload', 'Upload Gagal');
	    	redirect(base_url('admin'));
	    }
		
	} 

}

 ?>