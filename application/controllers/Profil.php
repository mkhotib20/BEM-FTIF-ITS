<?php 

class profil extends CI_Controller{
	
	public function sambutan($page='profil'){
		$id['page'] = $page;
		$this->load->view('front/layout/header', $id);
		$this->load->view('front/content/sambutan');		
		$this->load->view('front/layout/footer');
	} 

}

 ?>