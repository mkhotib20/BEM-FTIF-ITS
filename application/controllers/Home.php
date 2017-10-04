<?php 

class home extends CI_Controller
{
	public function index($page='home'){
		$data1 = $this->data->readWH('artikel', 'kategori_artikel', 'Artikel', 2)->result_array();
		$data2 = $this->data->readWH('artikel', 'kategori_artikel', 'Berita', 3)->result_array();
		$data3 = $this->data->readWH('artikel', 'kategori_artikel', 'Kegiatan', 3)->result_array();
		$data4 = $this->data->readWH('artikel', 'kategori_artikel', 'Artikel', 3, 'view_artikel', 'DESC')->result_array();
		$id['artikel'] = $data1;
		$id['berita'] = $data2;
		$id['kegiatan'] = $data3;
		$id['artikel_pop'] = $data4;
		$id['page'] = $page;
		$this->load->view('front/layout/header', $id);
		$this->load->view('front/content/home', $id);
		$this->load->view('front/layout/sidebar');
		$this->load->view('front/layout/footer');
	}
}

 ?>