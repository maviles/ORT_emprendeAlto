<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index(){
		$this->load->view('admin/head');
		$this->load->view('admin/login');
	}

	public function validate(){
		$u = new Usuario_actual;
		if ($u->login($_POST['user'],$_POST['password'])){
			redirect('admin/noticiasp');			
		} else {
			redirect('login/re_login/1');			
		}
	}

	public function re_login($error){
		$this->load->view('admin/head');
		$this->load->view('admin/relogin',array('error'=>$error));
	}

	public function logout(){
		$u = new Usuario_actual;
		$u->logout();
		redirect('admin');
	}
}