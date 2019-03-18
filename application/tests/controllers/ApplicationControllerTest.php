<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2019-03-18
 * Time: 오후 2:05
 */

class ApplicationControllerTest extends TestCase
{
	public function testApplicationCreatePageConnect(){
		$this->request('GET', '/apply/create');
		$this->assertResponseCode(200);
	}


	public function testAfterApplicationMovePase()
	{
		$this->request('GET', '/apply/success');
		$this->assertResponseCode(200);
	}
}
