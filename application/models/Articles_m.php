<?php
class Articles_m extends CI_Model
{
	public function show()
	{
		return $this->db->get('articles');
	}

	public function find($slug)
	{
		return $this->db->get_where('articles', ['slug' => $slug]);
	}

	public function save($data)
	{
		var_dump($data);
		return  $this->db->insert('articles', $data);
	}

	public function update($data)
	{
		$this->db->where('id', $data['id']);
		return $this->db->update('articles', $data);
	}

	public function delete($id)
	{
		return  $this->db->delete('articles', ['id' => $id]);
	}
}
