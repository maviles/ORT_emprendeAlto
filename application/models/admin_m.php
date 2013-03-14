<?php

class Admin_m extends CI_Model {

    function __construct(){

        // Call the Model constructor

       parent::__construct();

    }

    function get_usuario($login){
      $this->db->where('login_usuarios', $login);      
      $query = $this->db->get('tbl_usuarios');
      return $query;
    }

    function count_sub_noticias($idNotPadre){
      $this->db->where('fk_id_noticia_padre', $idNotPadre);
      $query = $this->db->get('tbl_noticias');
      return $query->num_rows();
    }

    function get_noticia($id){
      $this->db->where('id_noticias', $id);      
      $query = $this->db->get('tbl_noticias');
      return $query;
    }
	
	function get_sub_noticias($idNotPadre,$limit, $offset, $idNoticia){
      $this->db->limit($limit, $offset);
      $this->db->order_by('principal_noticias','asc');
      $this->db->where('fk_id_noticia_padre', $idNotPadre); 
      $query = $this->db->get('tbl_noticias');
      return $query;    
    }


    //noticias padre
    function get_noticia_p($id){
      $this->db->where('id_not_padre', $id);      
      $query = $this->db->get('tbl_noticias_padre');
      return $query;
    }

    function get_all_noticias_p(){
      $this->db->order_by('id_not_padre','asc');   
      $query = $this->db->get('tbl_noticias_padre');
      return $query;
    }

    function insert_noticia_p(){
      if(isset($_POST['activo'])) {
        $activo = 1;
      }else {
        $activo = 0;
      }
      $data = array(         
         'titulo_not_padre' => $_POST['titulo'],
         'activo_not_padre'=> $activo
      );
      $this->db->insert('tbl_noticias_padre',$data);
    }

     function update_noticia_p(){
      if(isset($_POST['activo'])) {
        $activo = 1;
      }else {
        $activo = 0;
      }
      $data = array(         
         'titulo_not_padre' => $_POST['titulo'],
         'activo_not_padre'=> $activo
      );
      $this->db->where('id_not_padre',$_POST['id']);
      $this->db->update('tbl_noticias_padre',$data);      
    }



     function delete_noticia_p($id){    

      $this->db->where('id_not_padre', $id);

      $this->db->delete('tbl_noticias_padre');

    }



    //noticias

    function get_all_noticias($id){

      $this->db->order_by('id_noticias','desc');

      $this->db->where('fk_id_noticia_padre', $id);  

      $query = $this->db->get('tbl_noticias');

      return $query;

    }



    function get_all_noticias2(){

      $this->db->order_by('fk_id_noticia_padre');

      $this->db->where('principal_noticias',1);    

      $query = $this->db->get('tbl_noticias');

      return $query;

    }



    function insert_noticia(){

      if(isset($_POST['activo'])) {

        $activo = 1;

      }else {

        $activo = 0;

      }

      if(isset($_POST['principal'])) {

        $principal = 1;

        $this->db->where('fk_id_noticia_padre',$_POST['idpadre']);   

        $this->db->update('tbl_noticias',array('principal_noticias' => 0));  

      }else {

        $principal = 0;

      }

      $data = array(         

         'titulo_noticias' => $_POST['titulo'],

         'subtitulo_noticias'=> $_POST['subtitulo'],

         'resena_noticias'=> $_POST['resena'],

         'detalle_noticias'=> $_POST['detalle'],

         'activo_noticias'=> $activo,

         'fk_id_noticia_padre'=> $_POST['idpadre'],

         'principal_noticias'=> $principal

      );

      $this->db->insert('tbl_noticias',$data);

      return $this->db->insert_id();       

    }



    function delete_img_header($id,$ruta){

      @unlink('./img_header/'.$ruta);     

      $data = array(         

         'ruta_img_noticias' => '',

         'ext_img_noticias'=> ''        

      );

      $this->db->where('id_noticias',$id);

      $this->db->update('tbl_noticias',$data);   

    }



    function update_noticia_(){

      if(isset($_POST['activo'])) {

        $activo = 1;

      }else {

        $activo = 0;

      }

      if(isset($_POST['principal'])) {

        $principal = 1;

        $this->db->where('fk_id_noticia_padre',$_POST['idpadre']);   

        $this->db->update('tbl_noticias',array('principal_noticias' => 0));  

      }else {

        $principal = 0;

      }

     $data = array(         

         'titulo_noticias' => $_POST['titulo'],

         'subtitulo_noticias'=> $_POST['subtitulo'],

         'resena_noticias'=> $_POST['resena'],

         'detalle_noticias'=> $_POST['detalle'],

         'activo_noticias'=> $activo,

         'principal_noticias'=> $principal

      );

      $this->db->where('id_noticias',$_POST['id']);

      $this->db->update('tbl_noticias',$data);     

    }



    function update_imagen_header($id,$ruta,$ext){

      $data = array(         

         'ruta_img_noticias' => $ruta,

         'ext_img_noticias'=> $ext

      );

      $this->db->where('id_noticias',$id);

      $this->db->update('tbl_noticias',$data);     

    }



    function delete_noticia($id){

      $this->db->where('id_noticias', $id);

      $this->db->delete('tbl_noticias');

    }



    function get_articulos($id){

      $this->db->where('id_articulos', $id);      

      $query = $this->db->get('tbl_articulos');

      return $query;

    }



    function update_articulos(){      

      $data = array(         

         'detalle_articulos' => $_POST['detalle_articulos']        

      );

      $this->db->where('id_articulos',$_POST['id']);

      $this->db->update('tbl_articulos',$data);     

    }



    function get_all_videos(){

      $this->db->order_by('id_videos','desc');   

      $query = $this->db->get('tbl_videos');

      return $query;

    }



     function get_video($id){

      $this->db->where('id_videos', $id);   

      $query = $this->db->get('tbl_videos');

      return $query;

    }



    function get_video_home(){

      $this->db->where('home_videos',1);   

      $query = $this->db->get('tbl_videos');

      return $query;

    }



    function insert_video(){

      if(isset($_POST['activo'])) {

        $activo = 1;

      }else {

        $activo = 0;

      }

      if(isset($_POST['home'])) {

        $home = 1;      

        $this->db->update('tbl_videos',array('home_videos' => 0));

      }else {

        $home = 0;

      }

      $data = array(         

         'url_videos' => $_POST['url'],

         'descripcion_videos'=> $_POST['descripcion'],

         'activo_videos'=> $activo,

         'home_videos'=> $home         

      );

      $this->db->insert('tbl_videos',$data);

    }



     function update_video(){

      if(isset($_POST['activo'])) {

        $activo = 1;

      }else {

        $activo = 0;

      }

      if(isset($_POST['home'])) {

        $home = 1;

        $this->db->update('tbl_videos',array('home_videos' => 0));      

      }else {

        $home = 0;

      }

      $data = array(         

         'url_videos' => $_POST['url'],

         'descripcion_videos'=> $_POST['descripcion'],

         'activo_videos'=> $activo,

         'home_videos'=> $home

      );

      $this->db->where('id_videos',$_POST['id']);

      $this->db->update('tbl_videos',$data);      

    }



    function delete_videos($id){    

      $this->db->where('id_videos', $id);

      $this->db->delete('tbl_videos');

    }

		function get_all_tabsSeccion(){

	  $query = $this->db->get('tbl_tabs_seccion');	

	  return $query;

	}

	

	function get_all_tabsTemas(){

	 //$this->db->order_by('id_tabs_seccion','desc');   

	  $query = $this->db->get('tbl_tabs_temas');

	  return $query;

	}

	

	function get_tabsSeccion_id_pestana($id){

	  $this->db->where('id_pestana', $id);   

	  $query = $this->db->get('tbl_tabs_seccion');	

	  return $query;

	}

	

	function insert_seccion(){

      $data = array(         

         'id_pestana' => $_POST['idPestana'],

         'nombre'=> $_POST['nombre'],

         'estado'=> 1

	  );

      $this->db->insert('tbl_tabs_seccion',$data);

	}

	

	function delete_seccion($id){    

      $this->db->where('id_tabs_seccion', $id);

      $this->db->delete('tbl_tabs_seccion');

    }

	

	function get_tabsSeccion($id){

	  $this->db->where('id_tabs_seccion', $id);   

	  $query = $this->db->get('tbl_tabs_seccion');	

	  return $query;

	}

	

	function update_seccion(){

      $data = array(         

         'nombre'=> $_POST['nombre']

      );

      $this->db->where('id_tabs_seccion',$_POST['id_tabs_seccion']);

      $this->db->update('tbl_tabs_seccion',$data);     

	}

	

	function get_tabsTemas_id_seccion($id){

	  $this->db->where('id_tabs_seccion', $id);   

	  $query = $this->db->get('tbl_tabs_temas');	

	  return $query;

	}

	

	

	function get_tabsTema($id){

	  $this->db->where('id_tabs_temas', $id);   

	  $query = $this->db->get('tbl_tabs_temas');	

	  return $query;

	}

	

	function insert_tema(){

      $data = array(         

         'id_tabs_seccion' => $_POST['idSeccion'],

         'nombre'=> $_POST['nombre'],

         'enlace'=> $_POST['enlace']

	  );

      $this->db->insert('tbl_tabs_temas',$data);

	}

	

	function delete_tema($id){    

      $this->db->where('id_tabs_temas', $id);

      $this->db->delete('tbl_tabs_temas');

    }

}

?>