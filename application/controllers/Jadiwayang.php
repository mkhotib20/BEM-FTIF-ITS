<?php 
/**
* 
*/
class jadiwayang extends CI_Controller
{
	
	function index(){
		$this->load->view('pengumuman/home');
	}
	function cekwayang(){
		$nrp = $this->input->post('nrp');
		$rows = $this->data->readWH('pengumuman', 'nrp', $nrp, '', '')->num_rows();
		if ($rows>0) {
			//echo 'anda menang';
			$data = $this->data->readWH('pengumuman', 'nrp', $nrp, '', '')->result_array();
			foreach ($data as $d) {
				$nama = $d['nama'];
			}
			$tampil['nama'] = $nama;
			$tampil['nrp'] = $nrp;
			$this->load->view('pengumuman/pengumuman', $tampil);
		}
		else{
			$query = $this->data->readWH('oprec', 'nrp', $nrp, '', ''); 
			$rows = $query->num_rows();
			if ($rows>0) {
				$data = $query->result_array();
				foreach ($data as $d) {
					$nama = $d['nama'];
				}
				$tampil['nama'] = $nama;
				$tampil['nrp'] = $nrp;
				$this->load->view('pengumuman/tidak', $tampil);
			}
			else{
				$this->load->view('pengumuman/tdaftar');
			}
			
		}

	}
}
 ?>