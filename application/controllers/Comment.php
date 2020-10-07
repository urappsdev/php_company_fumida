<?php
class Comment extends CI_Controller
{
	public function index()
	{
		check_not_login();
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/sidebar');
		$this->load->view('dashboard/navbar');
		$this->load->view('comment/index');
		$this->load->view('dashboard/footer');
	}
}
