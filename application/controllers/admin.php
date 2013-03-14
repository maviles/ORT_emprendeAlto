<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index(){

		if(!$this->session->userdata('logged_in')) {

			redirect('login');

			exit;

		}

		redirect('admin/noticiasp');	

	}	



	/* Sección noticias padre */

	public function noticiasp(){		
		if(!$this->session->userdata('logged_in')) {
			redirect('login');
			exit;
		}
		$data = array('noticias_p' => $this->admin_m->get_all_noticias_p()->result());
		$this->load->view('admin/head');
		$this->parser->parse('admin/noticias_p',$data);	
	}

	public function nueva_noticia_p(){
		if(!$this->session->userdata('logged_in')) {
			redirect('login');
			exit;
		}
		$this->load->view('admin/head');
		$this->load->view('admin/nueva_noticia_p');
	}



	public function guardar_noticia_p(){

		if(!$this->session->userdata('logged_in')) {

			redirect('login');

			exit;

		}

		$this->admin_m->insert_noticia_p();

		redirect('admin/noticiasp');

	}



	public function modificar_noticia_p(){

		if(!$this->session->userdata('logged_in')) {

			redirect('login');

			exit;

		}

		$this->admin_m->update_noticia_p();

		redirect('admin/editar_noticia_p/'.$_POST['id']);

	}



	public function editar_noticia_p($id){
		if(!$this->session->userdata('logged_in')) {
			redirect('login');
			exit;
		}

		$noticias = array('noticias' => $this->admin_m->get_all_noticias($id)->result());
		$n = $this->admin_m->get_noticia_p($id)->row();		
		$data = array(
			'id_not_padre' => $n->id_not_padre,
			'titulo_not_padre' => $n->titulo_not_padre,
			'activo_not_padre' => $n->activo_not_padre			
		);	

		$this->load->view('admin/head');
		$this->parser->parse('admin/editar_noticia_p',array_merge($data,$noticias));

	}



	public function eliminar_noticia_p($id){

		if(!$this->session->userdata('logged_in')) {

			redirect('login');

			exit;

		}

		$this->admin_m->delete_noticia_p($id);

		redirect('admin/noticiasp');

	}



	/* Sección noticias */

	public function noticias(){
		if(!$this->session->userdata('logged_in')) {
			redirect('login');
			exit;
		}

		$data = array('noticias' => $this->admin_m->get_all_noticias()->result());
		$this->load->view('admin/head');
		$this->parser->parse('admin/noticias',$data);	
	}



	public function nueva_noticia($idNoticiaPadre){

		if(!$this->session->userdata('logged_in')) {

			redirect('login');

			exit;

		}

		$n = $this->admin_m->get_noticia_p($idNoticiaPadre)->row();	

		$data = array(

			'id_not_padre' => $n->id_not_padre,

			'titulo_not_padre' => $n->titulo_not_padre,

			'activo_not_padre' => $n->activo_not_padre			

		);	

		$this->load->view('admin/head');

		$this->parser->parse('admin/nueva_noticia',$data);

	}



	public function editar_noticia($id){
		if(!$this->session->userdata('logged_in')) {
			redirect('login');
			exit;
		}

		$n = $this->admin_m->get_noticia($id)->row();
		$data = array(
			'id_noticias' => $n->id_noticias,
			'titulo_noticias' => $n->titulo_noticias,
			'subtitulo_noticias' => $n->subtitulo_noticias,
			'resena_noticias' => $n->resena_noticias,
			'detalle_noticias'=> $n->detalle_noticias,
			'activo_noticias' => $n->activo_noticias,
			'principal_noticias' => $n->principal_noticias,
			'id_not_padre' => $n->fk_id_noticia_padre,
			'ruta_img_noticias' => $n->ruta_img_noticias			
		);	

		$this->load->view('admin/head');

		$this->parser->parse('admin/editar_noticia',$data);

	}



	public function guardar_noticia(){

		if(!$this->session->userdata('logged_in')) {
			redirect('login');
			exit;
		}

		$id = $this->admin_m->insert_noticia();
		if (isset($_FILES['userfile'])) {
			$ext = end(explode('.',$_FILES['userfile']['name']));	
	        $ruta = $id.'.'.$ext;       
	        $config['upload_path'] = './img_header/';
	        $config['allowed_types'] = 'jpeg|jpg|png|gif';
	        $config['max_size'] = '0';
	       // $config['max_width']  = '1024';
	       // $config['max_height']  = '768';
	        $config['remove_spaces']  = TRUE;
	        $config['file_name'] = $id;
	        $this->load->library('upload', $config);
	        $this->upload->initialize($config);
	        if (!$this->upload->do_upload()){
	            $a = '<br><a href="'.base_url().'admin/editar_noticia_p/'.$_POST['idpadre'].'">Volver al ingreso</a>';
	            exit('OCURRIÓ UN ERROR AL SUBIR EL ARCHIVO : '.$this->upload->display_errors().$a);
	        }else{
	            $this->admin_m->update_imagen_header($id,$ruta,$ext);           
	        }
		}		
		redirect('admin/editar_noticia_p/'.$_POST['idpadre']);
	}



	public function eliminar_img_header($id){

		if(!$this->session->userdata('logged_in')) {

			redirect('login');

			exit;

		}

		$n = $this->admin_m->get_noticia($id)->row();

		$this->admin_m->delete_img_header($id,$n->ruta_img_noticias);

		redirect('admin/editar_noticia/'.$id);

	}



	public function eliminar_noticia($id,$idpadre){

		if(!$this->session->userdata('logged_in')) {

			redirect('login');

			exit;

		}

		$this->admin_m->delete_noticia($id);

		redirect('admin/editar_noticia_p/'.$idpadre);

	}

	



	/* articulos (emprende - quienes - cursos - financiamiento) */

	public function articulos($id){

		if(!$this->session->userdata('logged_in')) {

			redirect('login');

			exit;

		}

		$a = $this->admin_m->get_articulos($id)->row();

		$data = array(

			'id_articulos' => $a->id_articulos,

			'detalle_articulos' => $a->detalle_articulos,

			'nombre_articulos' => $a->nombre_articulos				

		);	

		$this->load->view('admin/head');

		$this->parser->parse('admin/editar_articulos',$data);		

	}



	public function modificar_articulos(){

		if(!$this->session->userdata('logged_in')) {

			redirect('login');

			exit;

		}

		$this->admin_m->update_articulos();

		redirect('admin/articulos/'.$_POST['id']);

	}



	/* Sección informate */

	public function informate(){

		if(!$this->session->userdata('logged_in')) {

			redirect('login');

			exit;

		}

		$this->load->view('admin/head');

		$this->load->view('admin/informate');

	}

	

	/* Sección financiamiento */

	public function financiamiento(){

		if(!$this->session->userdata('logged_in')) {

			redirect('login');

			exit;

		}

		$this->load->view('admin/head');

		$this->load->view('admin/financiamiento');

	}



	/* Sección videos */

	public function videos(){

		if(!$this->session->userdata('logged_in')) {
			redirect('login');
			exit;
		}
		$data = array('videos' => $this->admin_m->get_all_videos()->result());
		$this->load->view('admin/head');
		$this->parser->parse('admin/videos',$data);
	}



	public function nuevo_video(){
		if(!$this->session->userdata('logged_in')) {
			redirect('login');
			exit;
		}

		$this->load->view('admin/head');
		$this->load->view('admin/nuevo_videos');
	}



	public function editar_video($id){

		if(!$this->session->userdata('logged_in')) {

			redirect('login');

			exit;

		}

		$v = $this->admin_m->get_video($id)->row();

		$data = array(

			'id_videos' => $v->id_videos,

			'url_videos' => $v->url_videos,

			'descripcion_videos' => $v->descripcion_videos,

			'activo_videos' => $v->activo_videos,

			'home_videos'=> $v->home_videos					

		);	

		$this->load->view('admin/head');

		$this->parser->parse('admin/editar_videos',$data);

	}



	public function guardar_videos(){

		if(!$this->session->userdata('logged_in')) {

			redirect('login');

			exit;

		}



		$this->admin_m->insert_video();

		redirect('admin/videos');

	}



	public function modificar_videos(){

		if(!$this->session->userdata('logged_in')) {

			redirect('login');

			exit;

		}



		$this->admin_m->update_video();

		redirect('admin/videos');

	}



	public function eliminar_video($id){

		if(!$this->session->userdata('logged_in')) {

			redirect('login');

			exit;

		}

		$this->admin_m->delete_videos($id);

		redirect('admin/videos');

	}

	

	public function tabs_seccion($id){

		if(!$this->session->userdata('logged_in')) {

			redirect('login');

			exit;

		}



		if($id==1){

			$nombrePestana="LABORAL";

		}else if($id==2){

			$nombrePestana="TRIBUTARIO";

		}else if($id==3){

			$nombrePestana="HIGIENE Y SALUD LABORAL";

		}

		$data = array('secciones' => $this->admin_m->get_tabsSeccion_id_pestana($id)->result(),'nombrePestana' => $nombrePestana, 'idPestana' => $id);		

		$this->load->view('admin/head');

		$this->parser->parse('admin/tabsSeccion',$data);

	}

	

	public function nueva_seccion($id){

		if(!$this->session->userdata('logged_in')) {

			redirect('login');

			exit;

		}

		$data = array('idPestana' => $id);		

		$this->load->view('admin/head');

		$this->parser->parse('admin/nuevaSeccion',$data);

	}

	

	public function guardar_seccion(){

		if(!$this->session->userdata('logged_in')) {

			redirect('login');

			exit;

		}

		$this->admin_m->insert_seccion();

		$this->tabs_seccion($_POST['idPestana']);

	}

	

	public function eliminar_seccion($id,$idPestana){

		if(!$this->session->userdata('logged_in')) {

			redirect('login');

			exit;

		}

		$this->admin_m->delete_seccion($id);

		$this->tabs_seccion($idPestana);

	}

	

	public function editar_seccion($id){

		if(!$this->session->userdata('logged_in')) {

			redirect('login');

			exit;

		}



		$n = $this->admin_m->get_tabsSeccion($id)->row();

		$data = array(

			'id_tabs_seccion' => $n->id_tabs_seccion,

			'id_pestana' => $n->id_pestana,

			'nombre' => $n->nombre			

		);	

		$this->load->view('admin/head');

		$this->parser->parse('admin/editarSeccion',$data);

	}

	

	public function modificar_seccion(){

		if(!$this->session->userdata('logged_in')) {

			redirect('login');

			exit;

		}

		$this->admin_m->update_seccion();

		$this->tabs_seccion($_POST['id_pestana']);

	}

	

	public function ingresar_temas($id){

		if(!$this->session->userdata('logged_in')) {

			redirect('login');

			exit;

		}

		$data = array('temas' => $this->admin_m->get_tabsTemas_id_seccion($id)->result(),'idSeccion'=>$id);		

		$this->load->view('admin/head');

		$this->parser->parse('admin/tabsTemas',$data);

	}

	

	public function editar_tema($id){

		if(!$this->session->userdata('logged_in')) {

			redirect('login');

			exit;

		}

		$n = $this->admin_m->get_tabsTema($id)->row();

		$data = array(

			'id_tabs_seccion' => $n->id_tabs_seccion,

			'enlace' => $n->enlace,

			'nombre' => $n->nombre			

		);	

		$this->load->view('admin/head');

		$this->parser->parse('admin/editarTema',$data);

	}

	

	public function nuevo_tema($id){

		if(!$this->session->userdata('logged_in')) {

			redirect('login');

			exit;

		}

		$data = array('idSeccion' => $id);		

		$this->load->view('admin/head');

		$this->parser->parse('admin/nuevoTema',$data);

	}

	

	public function guardar_tema(){

		if(!$this->session->userdata('logged_in')) {

			redirect('login');

			exit;

		}

		$this->admin_m->insert_tema();

		$this->ingresar_temas($_POST['idSeccion']);

	}

	

	public function eliminar_tema($id,$idSeccion){

		if(!$this->session->userdata('logged_in')) {

			redirect('login');

			exit;

		}

		$this->admin_m->delete_tema($id);

		$this->ingresar_temas($idSeccion);

	}



	public function mod_not(){	

		if(!$this->session->userdata('logged_in')) {

			redirect('login');

			exit;

		}



		$this->admin_m->update_noticia_();

		if (isset($_FILES['userfile'])) {

			$ext = end(explode('.',$_FILES['userfile']['name']));	

	        $ruta = $_POST['id'].'.'.$ext;       

	        $config['upload_path'] = './img_header/';

	        $config['allowed_types'] = 'jpeg|jpg|png|gif';

	        $config['max_size'] = '0';

	        //$config['max_width']  = '1024';

	        //$config['max_height']  = '768';

	        $config['remove_spaces']  = TRUE;

	        $config['file_name'] = $_POST['id'];

	        $this->load->library('upload', $config);

	        $this->upload->initialize($config);

	        if (!$this->upload->do_upload()){

	            $a = '<br><a href="'.base_url().'admin/editar_noticia_p/'.$_POST['idpadre'].'">Volver al ingreso</a>';

	            exit('OCURRIÓ UN ERROR AL SUBIR EL ARCHIVO : '.$this->upload->display_errors().$a);

	        }else{

	        	$this->resize('293','115',$ruta);

	            $this->admin_m->update_imagen_header($_POST['id'],$ruta,$ext);           

	        }

		}		

		redirect('admin/editar_noticia/'.$_POST['id']);

	}



	public function resize($width, $height, $img){

        $config['image_library'] = 'gd2';

        $config['source_image']   = './img_header/'.$img;

        $config['create_thumb'] = FALSE;

        $config['max_size']	= '2000';

        //$config['new_image'] = './thumb/';        

        $config['width'] = $width;

        $config['height']  = $height;

        //$config['dynamic_output'] = true;

        $config['quality'] = '100%';// calidad de la imagen 

        $this->load->library('image_lib', $config);

        $this->image_lib->initialize($config);

        $this->image_lib->resize();

    }





	

}