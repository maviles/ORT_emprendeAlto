<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cursos extends CI_Controller {

   public function index(){
		if(!$this->session->userdata('logged_in')) {
            redirect('login');
            exit;
        }

		$data = array('cursos' => $this->curso_m->get_all_cursos()->result());
        $this->load->view('admin/head');
        $this->parser->parse('admin/cursos',$data); 		
	}
	
	public function nuevo_curso(){
		if(!$this->session->userdata('logged_in')) {
			redirect('login');
			exit;
		}
		$this->load->view('admin/head');
		$this->load->view('admin/nuevo_curso');
	}
	
	public function guardar_curso(){
		$data = array(
        'nombre' => $_POST["nombre"],
        'fecha_inicio' => $_POST["finicio"],
        'fecha_fin' => $_POST["ffin"],
		'descripcion' => $_POST["descripcion"],
		'detalle' => $_POST["detalle"],
		'estado' => isset($_POST['activo'])=="on" ? true : false
      );
	  
		$this->curso_m->insert_curso($data);
		redirect(base_url()."cursos");
	}
	
	public function eliminar_curso($id){
		$this->curso_m->delete_curso($id);
		redirect(base_url()."cursos");
	}
	
	public function editar_curso($id){
		$n = $this->curso_m->get_curso($id)->row();
		$data = array(
			'idcurso' => $n->id_curso,
			'nombre' => $n->nombre,
			'fecha_inicio' => $n->fecha_inicio,
			'fecha_fin' => $n->fecha_fin,
			'descripcion' => $n->descripcion,
			'detalle' => $n->detalle,
			'estado' => $n->estado			
		);	
		$this->load->view('admin/head');
		$this->parser->parse('admin/editar_curso',$data);
	}
	
	public function modificar_curso(){
		$id = $_POST["id"];
		$data = array(
			'nombre' => $_POST["nombre"],
			'fecha_inicio' => $_POST["finicio"],
			'fecha_fin' => $_POST["ffin"],
			'descripcion' => $_POST["descripcion"],
			'detalle' => $_POST["detalle"],
			'estado' => isset($_POST['activo'])=="on" ? true : false
		);
		
		$this->curso_m->update_curso($data,$id);           
		redirect(base_url()."cursos");
	}
	
	public function updt_estado_false(){
		$data = array('estado' => false);
		$this->curso_m->updt_estado_false($data);           
		redirect(base_url()."cursos");
	}
	
	
}

