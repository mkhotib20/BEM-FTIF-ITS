<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class wayangbaru extends CI_Controller {

	
	public function index()
	{
		$this->load->view('home');
	}
	public function proses_kirim()
	{
 		
 		$nama = $this->input->post('nama');
        $nrp = $this->input->post('nrp');
        $lahir = $this->input->post('tgl_lahir');
        $alamat = $this->input->post('alamat');
        $hp = $this->input->post('hp');
        $line = $this->input->post('id_line');
        $p1 = $this->input->post('p1');
        $p2 = $this->input->post('p2');
        $p3 = $this->input->post('p3');
        $mp1 = $this->input->post('mp1');
        $mp2 = $this->input->post('mp2');
        $mp3 = $this->input->post('mp3');
        $harapan = $this->input->post('harapan');
        $dtb = $this->input->post('dtb');
 		

 		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nrp', 'NRP', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'tgl_lahir', 'required');
		$this->form_validation->set_rules('alamat', 'alamat', 'required');
		$this->form_validation->set_rules('hp', 'hp', 'required');
		$this->form_validation->set_rules('id_line', 'id_line', 'required');
		$this->form_validation->set_rules('p1', 'p1', 'required');
		$this->form_validation->set_rules('p2', 'p2', 'required');
		$this->form_validation->set_rules('p3', 'p3', 'required');
		$this->form_validation->set_rules('mp1', 'mp1', 'required');
		$this->form_validation->set_rules('mp2', 'mp2', 'required');
		$this->form_validation->set_rules('dtb', 'dtb', 'required');
		$this->form_validation->set_rules('mp3', 'mp3', 'required');
		$this->form_validation->set_rules('harapan', 'harapan', 'required');
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('pesan', '
				<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-ban"></i> Peringatan!</h4>Ada data yang belum lengkap, silahkan periksa kembali. Apabila bermasalah silahkan hubungi CP</div>
			');
			redirect(base_url('wayangbaru'));
		}
		else{
			$config['upload_path']          = 'uploads/berkas';
		    $config['allowed_types']        = 'jpg|pdf|png';
		    $config['max_size']             = 6000;
		    $base_path = $config['upload_path'];
		    $this->load->library('upload', $config);
		    if ($this->upload->do_upload('cv') ){
	            $updata = array('upload_data' => $this->upload->data());
				foreach ($updata as $d) {
					$filename = $d['file_name'];
				}
				$pathCV=$base_path.$filename;
	        }
	        else{
	            $this->session->set_flashdata('pesan', '
					<div class="alert alert-danger alert-dismissible">
	            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	            <h4><i class="icon fa fa-ban"></i> Peringatan!</h4>Ada data yang belum lengkap, silahkan periksa kembali. Apabila bermasalah silahkan hubungi CP</div>
				');
				redirect(base_url('wayangbaru'));
				 $error = array('error' => $this->upload->display_errors());
	            echo print_r($error);
	            
	        }
	        if ($this->upload->do_upload('portofolio') ){
	            $updata = array('upload_data' => $this->upload->data());
				foreach ($updata as $d) {
					$filename = $d['file_name'];
				}
				$path_porto=$base_path.$filename;
	        }
	        else{
	            $error = array('error' => $this->upload->display_errors());
	            echo print_r($error);

	            
	        }
	        if ($this->upload->do_upload('temubakat') ){
	            $updata = array('upload_data' => $this->upload->data());
				foreach ($updata as $d) {
					$filename = $d['file_name'];
				}
				$path_tb=$base_path.$filename;
	        }
	        else{
	            $error = array('error' => $this->upload->display_errors());
	            echo print_r($error);

	            
	        }
	        
	        
	 		$data = array(
	 			'nrp' => $nrp,
	 			'nama' => $nama,
	 			'lahir' => $lahir,
	 			'alamat' => $alamat,
	 			'hp' => $hp,
	 			'line' => $line,
	 			'pilihan1' => $p1,
	 			'pilihan2' => $p2,
	 			'pilihan3' => $p3,
	 			'mp1' => $mp1,
	 			'mp2' => $mp2,
	 			'mp3' => $mp3,
	 			'harapan' => $harapan,
	 			'cv' => $pathCV, 
	 			'portofolio' => $path_porto, 
	 			'dtb' => $dtb, 
	 			'temubakat' => $path_tb, 
	 		);
			if ($this->data->insert('oprec', $data)) {
	 			$this->session->set_flashdata('pesan', '
	 					<div class="alert alert-success alert-dismissible">
		                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		                <h4><i class="icon fa fa-info"></i> Sukses!</h4>Anda telah  berhasil mendaftar sebagai wayang baru BEM FTIf. Silahkan tunggu kabar dari kami mengenai screening</div>
	 				');
	 			redirect(base_url('wayangbaru'));
	 		}
	 		else{
	 			$this->session->set_flashdata('pesan', '
	 					<div class="alert alert-danger alert-dismissible">
		                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		                <h4><i class="icon fa fa-ban"></i> Peringatan!</h4>Ada data yang belum lengkap, silahkan periksa kembali. Apabila bermasalah silahkan hubungi CP</div>
	 				');
	 				redirect(base_url('wayangbaru'));
	 				echo 'kok gggl';
	 		}
		}
 		
	}
}
