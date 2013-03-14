<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Noticias extends CI_Controller {
	public function index(){
		$data = array('noticias' =>$this->admin_m->get_all_noticias2()->result(), 'imagenes' => $this->banner_m->get_all_imagenes()->result());
		$this->load->view('head');
		$this->parser->parse('inicio/inicio',$data);	
		$this->load->view('footer');
	}

	public function detalle($id,$offset=''){
		$limit = 3;
		$n = $this->admin_m->get_noticia($id)->row();
		$total = $this->admin_m->count_sub_noticias($n->fk_id_noticia_padre);
		$lista = $this->admin_m->get_sub_noticias($n->fk_id_noticia_padre,$limit, $offset, $id)->result();
				
		$this->load->library('pagination');
		$config['base_url'] = base_url().'noticias/detalle/'.$id;
		$config['total_rows'] = $total;
		$config['per_page'] = $limit;
		$config['uri_segment'] = '4';
		$config['prev_link'] = '&lt;';
		$config['next_link'] = '&gt;';		
		$this->pagination->initialize($config);
		$data = array(			
			'noticia'=> $n->detalle_noticias,
			'pag_links'=> $this->pagination->create_links(),
			'lista'=> $lista,
			'offset'=> $offset
		);
		$this->load->view('head');
		$this->parser->parse('inicio/detalle_noticias',$data);	
		$this->load->view('footer');		
	}
		
}