<?php 
class Auth extends CI_Controller
{
	public function login()
	{
		$this->load->view('layout/header');
		$this->load->view('auth/login');
		$this->load->view('layout/footer');
	}

	public function register()
	{
		$this->load->view('layout/header');
		$this->load->view('auth/register');
		$this->load->view('layout/footer');
	}

	public function do_register(){
		$post =  $this->input->post();
		
		if($post['password'] !== $post['vpassword']){
			echo 'password doesnt match';
			return redirect('auth/register');
		}
		$password = password_hash($post['vpassword'],PASSWORD_DEFAULT);
		$data = [
			'email' => $post['email'],
			'password' => $password,
			'is_admin' => '0'
		];

		$this->load->model('auth_m');
		$this->auth_m->register($data);
		return redirect('auth/login');
	}

	public function do_login(){
		$post =  $this->input->post();
		$this->load->model('auth_m');
		$this->auth_m->login($post);
	}

	public function logout(){
		$params = ['user_id','is_admin'];
		$this->session->unset_userdata($params);
		return redirect('auth/login');
	}

}