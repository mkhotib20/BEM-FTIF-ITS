<?php 

class info extends CI_Controller{
	
	public function artikel($page='info'){
		$id['page_title'] = 'Artikel';
		$data = $this->data->readWH('artikel', 'kategori_artikel', 'Artikel', '', 'timestamp', 'DESC')->result_array();
		$data3 = $this->data->readWH('artikel', 'kategori_artikel', 'Kegiatan', 3)->result_array();
		$data4 = $this->data->readWH('artikel', 'kategori_artikel', 'Artikel', 3, 'view_artikel', 'DESC')->result_array();
		$id['kegiatan'] = $data3;
		$id['artikel'] = $data;
		$id['artikel_pop'] = $data4;
		$id['page'] = $page;
		$this->load->view('front/layout/header', $id);
		$this->load->view('front/content/artikel', $id);
		$this->load->view('front/layout/sidebar');		
		$this->load->view('front/layout/footer');
	} 
	public function berita($page='info'){
		$data3 = $this->data->readWH('artikel', 'kategori_artikel', 'Kegiatan', 3)->result_array();
		$data4 = $this->data->readWH('artikel', 'kategori_artikel', 'Artikel', 3, 'view_artikel', 'DESC')->result_array();
		$id['kegiatan'] = $data3;
		$id['artikel_pop'] = $data4;
		$id['page'] = $page;
		$this->load->view('front/layout/header', $id);
		$this->load->view('front/content/berita');
		$this->load->view('front/layout/sidebar');		
		$this->load->view('front/layout/footer');
	} 
	public function detail_artikel( $id_artikel, $page='info'){
		$id['page_title'] = 'Artikel';
		$data = $this->data->readWH('artikel', 'id_artikel', $id_artikel)->result_array();
		foreach ($data as $d) {
			$view = $d['view_artikel'];
		}
		$view_baru = $view+1;
		$where = array('id_artikel' => $id_artikel);
		$update_view = array('view_artikel' => $view_baru);
		$this->data->updateView('artikel', $update_view, $where);

		$data3 = $this->data->readWH('artikel', 'kategori_artikel', 'Kegiatan', 3)->result_array();
		$data4 = $this->data->readWH('artikel', 'kategori_artikel', 'Artikel', 3, 'view_artikel', 'DESC')->result_array();
		$id['kegiatan'] = $data3;
		$id['artikel_pop'] = $data4;
		$id['page'] = $page;
		$id['artikel'] = $data;
		$this->load->view('front/layout/header', $id);
		$this->load->view('front/content/bdetail', $id);
		$this->load->view('front/layout/sidebar');		
		$this->load->view('front/layout/footer');
	} 
	public function detail_berita( $id_artikel, $page='info'){
		$id['page_title'] = 'Berita';
		$data = $this->data->readWH('artikel', 'id_artikel', $id_artikel)->result_array();
		foreach ($data as $d) {
			$view = $d['view_artikel'];
		}
		$view_baru = $view+1;
		$where = array('id_artikel' => $id_artikel);
		$update_view = array('view_artikel' => $view_baru);
		$this->data->updateView('artikel', $update_view, $where);

		$data3 = $this->data->readWH('artikel', 'kategori_artikel', 'Kegiatan', 3)->result_array();
		$data4 = $this->data->readWH('artikel', 'kategori_artikel', 'Artikel', 3, 'view_artikel', 'DESC')->result_array();
		$id['kegiatan'] = $data3;
		$id['artikel_pop'] = $data4;
		$id['page'] = $page;
		$id['page_title'] = 'Berita';
		$id['artikel'] = $data;
		$this->load->view('front/layout/header', $id);
		$this->load->view('front/content/ndetail', $id);
		$this->load->view('front/layout/footer');
	} 

}

 ?>