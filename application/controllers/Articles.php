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
		$foto = $_FILES['thumbnail'];
		if ($foto = '') {
		} else {
			$config['upload_path'] 			= './assets/upload/';
			$config['allowed_types']		= 'jpg|png|gif';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('thumbnail')) {
				echo 'Upload gagal';
				die();
			} else {
				$foto = $this->upload->data('file_name');
			}
			$data = [
				'title' 		=> $this->input->post('title'),
				'slug' 			=> str_replace(' ', '-', $this->input->post('title')),
				'author'	 	=> 'drogan120',
				'content' 		=> $this->input->post('content'),
				'thumbnail' 	=> $foto,
				'released'		=> $this->input->post('released'),
				'release_date' 	=> date('Y-m-d')

			];
		}
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
		$foto = $_FILES['thumbnail'];
		if ($foto = '') {
			return $data = [
				'title' => $this->input->post('title'),
				'id' => $this->input->post('id'),
				'released' => $this->input->post('released'),
				'content' => $this->input->post('content'),
			];
			$this->articles_m->update($data);
		} else {
			$config['upload_path'] 			= './assets/upload/';
			$config['allowed_types']		= 'jpg|png|gif';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('thumbnail')) {
				echo 'Upload gagal';
			} else {
				$foto = $this->upload->data('file_name');
				$data = [
					'title' => $this->input->post('title'),
					'id' => $this->input->post('id'),
					'released' => $this->input->post('released'),
					'content' => $this->input->post('content'),
					'thumbnail' => $foto
				];
				$this->articles_m->update($data);
			}
			return redirect('articles');
		}
	}

	public function delete($id)
	{
		check_not_login();
		$this->load->model('articles_m');
		$this->articles_m->delete($id);
		return redirect('articles');
	}
}
