<?php

class MY_Controller extends CI_Controller 
{

	public static $userdata;

    function __construct()
    {
        parent::__construct();
		
		$u = new Usuario_actual;
		$userdata = null;
		
        if (
			!(
				$this->router->class == 'login' AND (
					$this->router->method == 'login' OR
					$this->router->method == 'validate'
				)
			) AND
			!$u->usuario()
		) {
			redirect('login');
			exit;
		} else {
			if ($u->usuario())
				self::$userdata = array(
					'id' => $u->usuario()->getId(),
					'username' => $u->usuario()->getUsername(),
					'ap_pat' => $u->usuario()->getApPat(),
					'ap_mat' => $u->usuario()->getApMat(),
					'nombres' => $u->usuario()->getNombres(),
					'email' => $u->usuario()->getEmail(),
					'categoria' => $u->usuario()->getCategoria()
				);
		}
    }
}