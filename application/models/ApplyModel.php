<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2019-03-18
 * Time: 오후 3:23
 */

class ApplyModel extends CI_Model
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


	public function getAppliesList(int $limit = null, int $start = null)
	{
		if (!is_null($limit) && !is_null($start)){
			$this->db->limit($start, $limit);
		}
		$this->db->order_by('id DESC');
		$query = $this->db->get('apply');
		return $query->result_array();
	}

	public function recode_count(){
		return $this->db->count_all('apply');
	}

}
