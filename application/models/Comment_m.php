<?php

class Comment_m extends CI_Model
{
	public function comment_on_post($id)
	{
		return $this->db->get_where('comment', ['id_article' => $id]);
	}

	public function comment($comment)
	{
		$this->db->insert('comment', $comment);
	}
}
