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

	public function read($id, $slug)
	{
		$this->load->model('articles_m');
		$this->load->model('comment_m');
		$data['reads'] =  $this->articles_m->find($slug)->result();
		$data['comment'] =  $this->comment_m->comment_on_post($id)->result();
		$this->load->view('layout/articlesheader');
		$this->load->view('layout/navbar');
		$this->load->view('main/read', $data);
		$this->load->view('layout/footer');
	}

	public function comment()
	{
		$data[] =  $this->input->post();
		var_dump($data);
		$comment =
			[
				'id_article' 	=> $data[0]['id_article'],
				'comment'		=> $data[0]['comment'],
				'name'			=> $data[0]['name']
			];
		$this->load->model('comment_m');
		$this->comment_m->comment($comment);
		return redirect('blog/read/' . $data[0]['id_article'] . '/' . $data[0]['slug']);
	}
}
