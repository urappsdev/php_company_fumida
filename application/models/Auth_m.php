<?php

class Auth_m extends CI_Model
{

	public function login($data)
	{
		$user = $this->db->get_where('admin', ['email' => $data['email']])->row_array();
		if ($user) {
			if (password_verify($data['password'], $user['password'])) {
				$this->session->set_userdata(
					[
						'user_id' 	=> $user['id'],
						'is_admin'	=> $user['is_admin']
					]
				);
				return redirect('dashboard');
			} else {
				$this->session->set_flashdata('messages', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<strong>Wrong Password!</strong> Please re check your password.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>');
				return redirect('auth/login');
			}
		} else {
			$this->session->set_flashdata('messages', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Email Is not Registered!</strong> Please Register first.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>');
			return redirect('auth/login');
		}
	}

	public function register($data)
	{
		$this->db->insert('admin', $data);
	}
}
