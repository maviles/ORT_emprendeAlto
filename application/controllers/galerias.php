<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Galerias extends CI_Controller {

   public function index(){

		if(!$this->session->userdata('logged_in')) {

            redirect('login');

            exit;

        }

		$data = array('imagenes' => $this->galeria_m->get_all_imagenes()->result());

        $this->load->view('admin/head');

        $this->parser->parse('admin/galerias',$data); 		

	}



	function do_upload(){

        if(!$this->session->userdata('logged_in')) {

            redirect('login');

            exit;

        }



        $id = $this->galeria_m->insert_imagen();

        $ext = end(explode('.',$_FILES['userfile']['name'])); 

        $ruta = $id.'.'.$ext;

        $rutaThumb = $id.'_thumb.'.$ext;

        $config['upload_path'] = './img/';

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

            $this->galeria_m->update_imagen($id,$ruta,$rutaThumb,$ext);

            $this->resize('200','125',$ruta);

            redirect('galerias');

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

        

        $b = $this->galeria_m->get_imagen($id)->row();

        $this->galeria_m->delete_img($id,$b->ruta_galerias,$b->ruta_thumb_galerias);

        redirect('galerias');

    }  



}

