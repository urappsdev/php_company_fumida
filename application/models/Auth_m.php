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
				$this->session->set_flashdata('messages', 'Wrong password');
				return redirect('auth/login');
			}
		} else {
			$this->session->set_flashdata('messages', 'Email not registered');
			return redirect('auth/login');
		}
	}

	public function register($data)
	{
		$this->db->insert('admin', $data);
	}
}
