<?php
class Galeria_m extends CI_Model {
    function __construct(){
        // Call the Model constructor
       parent::__construct();
    }

    function get_all_imagenes(){
      $this->db->order_by('id_galerias','desc');   
      $query = $this->db->get('tbl_galerias');
      return $query;
    }

    function insert_imagen(){
      $data = array(
        'ruta_galerias' => '',
        'ruta_thumb_galerias' => '',
        'ext_galerias' => ''
      );
      $this->db->insert('tbl_galerias', $data);
      return $this->db->insert_id();
    }

    function update_imagen($id,$ruta,$rutaThumb,$ext){
      $data = array(
        'ruta_galerias' => $ruta,
        'ruta_thumb_galerias' =>$rutaThumb,
        'ext_galerias' =>$ext
      );     
      $this->db->where('id_galerias', $id);
      $this->db->update('tbl_galerias', $data);
    }

    function get_imagen($id){
      $this->db->where('id_galerias', $id);
      $query = $this->db->get('tbl_galerias');
      return $query;
    }  

    function delete_img($id,$ruta,$ruta_thumb){
      @unlink('./img/'.$ruta);
      @unlink('./thumb/'.$ruta_thumb);
      $this->db->where('id_galerias', $id);
      $this->db->delete('tbl_galerias');    
    }
}
?>