<?php
class Banner_m extends CI_Model {
    function __construct(){
        // Call the Model constructor
       parent::__construct();
    }

    function get_all_imagenes(){
      $this->db->order_by('id_banner','desc');   
      $query = $this->db->get('tbl_banner');
      return $query;
    }

    function insert_imagen(){
      $data = array(
        'nombre' => 'nombre',
        'ruta_banner' => '',
        'estado' => 1
      );
      $this->db->insert('tbl_banner', $data);
      return $this->db->insert_id();
    }

    function update_imagen($id,$nombre,$ruta){
	  $data = array(
        'nombre' => $nombre,
        'ruta_banner' =>$ruta,
        'estado' =>1
      );     
      $this->db->where('id_banner', $id);
      $this->db->update('tbl_banner', $data);
    }

    function get_imagen($id){
      $this->db->where('id_banner', $id);
      $query = $this->db->get('tbl_banner');
      return $query;
    }  

    function delete_img($id,$ruta){
      @unlink($ruta);
      $this->db->where('id_banner', $id);
      $this->db->delete('tbl_banner');    
    }
}
?>