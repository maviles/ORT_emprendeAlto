<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Informate extends CI_Controller {
	public function index(){
		$data['seccion'] = $this->admin_m->get_all_tabsSeccion()->result();
		$data['temas'] = $this->admin_m->get_all_tabsTemas()->result();		
		$this->load->view('head');
		$this->load->view('informate/informate',$data);
		$this->load->view('footer');
	}
}