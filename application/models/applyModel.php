<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2019-03-18
 * Time: 오후 3:23
 */

class applyModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
	}

	public function setApplyData(string $email, string $name, string $framework)
	{


		$data = array(
			'email' => $email,
			'name' => $name,
			'framework' => $framework,
		);

		return $this->db->insert('apply', $data);
	}


	public function getAppliesList()
	{
		$this->db->order_by('id DESC');
		$query = $this->db->get('apply');

		return $query->result_array();
	}

}
