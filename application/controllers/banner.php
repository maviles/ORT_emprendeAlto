<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Banner extends CI_Controller {
	 public function index(){
        if(!$this->session->userdata('logged_in')) {
            redirect('login');
            exit;
        }

		$data = array('imagenes' => $this->banner_m->get_all_imagenes()->result());
        $this->load->view('admin/head');
        $this->parser->parse('admin/banner',$data); 		
	}
	
	function do_upload(){
        if(!$this->session->userdata('logged_in')) {
            redirect('login');
            exit;
        }

        $id = $this->banner_m->insert_imagen();
        $ext = end(explode('.',$_FILES['userfile']['name'])); 
        $ruta = "slider/img/".$id.'.'.$ext;
		$nombre = $_POST["nombreImg"];
        $config['upload_path'] = './slider/img/';
        $config['allowed_types'] = 'jpeg|jpg|png|gif';
        $config['max_size'] = '0';
       // $config['max_width']  = '1024';
       // $config['max_height']  = '768';
        $config['remove_spaces']  = TRUE;
        $config['file_name'] = $id;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload()){
            $a = '<br><a href="'.base_url().'galerias">Volver al ingreso</a>';
            exit('OCURRIÓ UN ERROR AL SUBIR EL ARCHIVO : '.$this->upload->display_errors().$a);
        }else{
            $this->banner_m->update_imagen($id,$nombre,$ruta);
            //$this->resize('200','125',$ruta);
            redirect('banner');
        }
    }

    public function resize($width, $height, $img){
        $config['image_library'] = 'gd2';
        $config['source_image']   = './img/'.$img;
        $config['create_thumb'] = TRUE;
        $config['new_image'] = './thumb/';        
        $config['width'] = $width;
        $config['height']  = $height;
        //$config['dynamic_output'] = true;
        $config['quality'] = '100%';// calidad de la imagen 
        $this->load->library('image_lib', $config);
        $this->image_lib->initialize($config);
        $this->image_lib->resize();
    }
	
	
	
	public function delete_img($id){
        if(!$this->session->userdata('logged_in')) {
            redirect('login');
            exit;
        }
        
        $b = $this->banner_m->get_imagen($id)->row();
        $this->banner_m->delete_img($id,$b->ruta_banner,$b->ruta_banner);
        redirect('banner');
    }  
	
	
}