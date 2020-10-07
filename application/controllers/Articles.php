<?php
class Articles extends CI_Controller
{

	public function index()
	{
		check_not_login();
		$this->load->model('articles_m');
		$data['articles'] = $this->articles_m->show()->result();
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/sidebar');
		$this->load->view('dashboard/navbar');
		$this->load->view('articles/index', $data);
		$this->load->view('dashboard/footer');
	}

	public function addArticle()
	{
		check_not_login();
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/sidebar');
		$this->load->view('dashboard/navbar');
		$this->load->view('articles/add');
		$this->load->view('dashboard/footer');
	}

	public function submit()
	{
		check_not_login();
		$data = [
			'title' 		=> $this->input->post('title'),
			'slug' 			=> str_replace(' ', '-', $this->input->post('title')),
			'author'	 	=> 'drogan120',
			'content' 		=> $this->input->post('content'),
			'thumbnail' 	=> $this->input->post('thumbnail'),
			'released'		=> $this->input->post('released'),
			'release_date' 	=> date('Y-m-d')

		];
		$this->load->model('articles_m');
		$this->articles_m->save($data);
		return redirect('articles');
	}

	public function update($slug)
	{
		check_not_login();
		$this->load->model('articles_m');
		$data['articles'] = $this->articles_m->find($slug)->result();
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/sidebar');
		$this->load->view('dashboard/navbar');
		$this->load->view('articles/edit', $data);
		$this->load->view('dashboard/footer');
	}

	public function updates()
	{
		check_not_login();
		$this->load->model('articles_m');
		$this->articles_m->update($this->input->post());
		return redirect('articles');
	}

	public function delete($id)
	{
		check_not_login();
		$this->load->model('articles_m');
		$this->articles_m->delete($id);
		return redirect('articles');
	}
}
