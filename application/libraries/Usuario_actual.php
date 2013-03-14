<?php
class Usuario_actual{	
	var $ci;

	public function __construct() {
		$this->ci =& get_instance();
		$this->ci->load->model('admin_m');			
	}

	public function login($username, $password) {		
	    $user = $this->ci->admin_m->get_usuario($username)->row();	    
	   if ($user) {	   		
			if ($user->password_usuarios == $password){
				$data = array(
					'id_usuario' => $user->id_usuarios,
					'login' => $user->login_usuarios,
					'nombres' => $user->nombres_usuarios,                  
					'logged_in' => TRUE
                );				
                $this->ci->session->set_userdata($data);					
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}		
	}

	public function logout() {
		return $this->ci->session->sess_destroy();
	}
	
    public function __clone() {
        trigger_error('Clone is not allowed.', E_USER_ERROR);
    }
	
}