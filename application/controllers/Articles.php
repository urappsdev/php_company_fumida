<?php
class Articles extends CI_Controller
{

	public function index()
	{
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
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/sidebar');
		$this->load->view('dashboard/navbar');
		$this->load->view('articles/add');
		$this->load->view('dashboard/footer');
	}

	public function submit()
	{
		$data[] = $this->input->post();
		var_dump($data);
	}

	public function update($id)
	{
		$this->load->model('articles_m');
		$data['articles'] = $this->articles_m->find($id)->result();
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/sidebar');
		$this->load->view('dashboard/navbar');
		$this->load->view('articles/edit', $data);
		$this->load->view('dashboard/footer');
	}
}
