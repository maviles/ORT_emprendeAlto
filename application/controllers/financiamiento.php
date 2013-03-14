<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Financiamiento extends CI_Controller {
	public function index(){
		$id = 4;
		$a = $this->admin_m->get_articulos($id)->row();
		$data = array(
			'id_articulos' => $a->id_articulos,
			'detalle_articulos' => $a->detalle_articulos				
		);	
		$this->load->view('head');
		$this->parser->parse('financiamiento/financiamiento',$data);
		$this->load->view('footer');
	}
}