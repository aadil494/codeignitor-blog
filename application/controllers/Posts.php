<?php 

class Posts extends CI_Controller{
	public function view()
	{
		$this->data['title'] = "Latest Posts";

		$this->data['posts'] = $this->post_model->get_posts();

		$this->load->view('templates/header');
		$this->load->view('posts/index',$this->data);
		$this->load->view('templates/footer');
	}
}
