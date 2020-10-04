<?php
class Articles_m extends CI_Model
{
	public function show()
	{
		return $this->db->get('articles');
	}

	public function find($id)
	{
		return $this->db->get_where('articles', ['id' => $id]);
	}
}
