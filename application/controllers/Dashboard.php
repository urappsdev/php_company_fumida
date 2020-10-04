<?php

class Dashboard extends CI_Controller
{

	public function index()
	{
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/sidebar');
		$this->load->view('dashboard/navbar');
		$this->load->view('dashboard/content');
		$this->load->view('dashboard/footer');
	}
}
