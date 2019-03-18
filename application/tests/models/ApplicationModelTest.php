<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2019-03-18
 * Time: 오후 3:14
 */

class ApplicationModelTest extends TestCase
{


	public function setup()
	{
		$this->resetInstance();
		$this->CI->load->model('applyModel');
		$this->obj = $this->CI->applyModel;

	}


	public function addApplyTest()
	{
//		setApplyData(string $email, string $name, string $framework)
/*
		$email = 'lunaman@test.com';
		$name = 'testername';
		$framework = 'jquery';

		$preCount = $this->obj->db->count_all('apply');

		var_dump($preCount);

//		$this->obj->setApplyData($email, $name, $framework);


		$actual = $this->addApplyData();

		$expected = 1;


		$this->assertEquals($getData,$output);*/

	}
}
