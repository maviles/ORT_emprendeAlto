<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Videos extends CI_Controller {
	public function index(){
		$data = array('videos' => $this->admin_m->get_all_videos()->result());
		$v = $this->admin_m->get_video_home()->row();		
		$data2 = array(
			'url_videos' => $v->url_videos			
		);
		$this->load->view('head');
		$this->parser->parse('videos/videos',array_merge($data,$data2));	
		$this->load->view('footer');
	}
}


		