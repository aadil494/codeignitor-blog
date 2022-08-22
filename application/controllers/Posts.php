<?php 

class Posts extends CI_Controller{
	public function index()
	{
		$this->data['title'] = "Latest Posts";

		$this->data['posts'] = $this->post_model->get_posts();

		$this->load->view('templates/header');
		$this->load->view('posts/index',$this->data);
		$this->load->view('templates/footer');
	}

	public function view($slug = NULL)
	{
		$this->data['post'] = $this->post_model->get_posts($slug);
		if(empty($this->data['post']))
		{
			show_404();
		}
		$this->data['title'] = $this->data['post']['title'];

		$this->load->view('templates/header');
		$this->load->view('posts/view',$this->data);
		$this->load->view('templates/footer');

	}
	public function create()
	{
		$this->data['title'] = "Latest Posts";

		$this->data['categories'] = $this->post_model->get_categories();
 
		$this->form_validation->set_rules('title','Title', 'required');
		$this->form_validation->set_rules('body','Body', 'required');

		if($this->form_validation->run() === false)
		{
			$this->load->view('templates/header');
			$this->load->view('posts/create',$this->data);
			$this->load->view('templates/footer');
		} else{
			$this->post_model->create_post();
			redirect('posts');
		}	
	}

	public function delete($id)
	{
		$this->post_model->delete_post($id);
		redirect('posts');
	}

	public function edit($slug)
	{
		$this->data['post'] = $this->post_model->get_posts($slug);
		if(empty($this->data['post']))
		{
			show_404();
		}
		$this->data['title'] = "Edit Post";
		$this->data['categories'] = $this->post_model->get_categories();
		$this->load->view('templates/header');
		$this->load->view('posts/edit',$this->data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$this->post_model->update_post();
		redirect('posts');
	}

}
