<?php
class Curso_m extends CI_Model {
    function __construct(){
        // Call the Model constructor
       parent::__construct();
    }

    function get_all_cursos(){
      $this->db->order_by('id_curso','desc');   
      $query = $this->db->get('tbl_curso');
      return $query;
    }
	
	function get_curso($idCurso){
	  $this->db->where('id_curso', $idCurso);   
      $query = $this->db->get('tbl_curso');
      return $query;
    }
	
    function insert_curso($data){
      $this->db->insert('tbl_curso', $data);
      return $this->db->insert_id();
    }

    function update_curso($data, $id){
      $this->db->where('id_curso', $id);
      $this->db->update('tbl_curso', $data);
    }

    function delete_curso($idCurso){
      $this->db->where('id_curso', $idCurso);
      $this->db->delete('tbl_curso');    
    }
	
	function updt_estado_false($data){
      $this->db->update('tbl_curso', $data);    
    }
	
	
	
	
}
?>