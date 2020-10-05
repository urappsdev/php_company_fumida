<?php
class Blog extends CI_Controller
{
	public function index()
	{
		$this->load->model('articles_m');
		$data['articles'] = $this->articles_m->show()->result();
		$this->load->view('layout/articlesheader');
		$this->load->view('layout/navbar');
		$this->load->view('main/articles', $data);
		$this->load->view('layout/footer');
	}

	public function read($slug)
	{
		$this->load->model('articles_m');
		$data['reads'] =  $this->articles_m->find($slug)->result();
		$this->load->view('layout/articlesheader');
		$this->load->view('layout/navbar');
		$this->load->view('main/read', $data);
		$this->load->view('layout/footer');
	}
}
