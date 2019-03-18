<?php

class Migrate extends CI_Controller
{

	public function __construct()
	{

		parent::__construct();
/*
		if(! is_cli() ) {
			show_404();
			exit;
		}*/
	}

	public function index()
	{
		$this->load->library('migration');

		if ($this->migration->current() === FALSE)
		{
			show_error($this->migration->error_string());
		}else{
			echo "Migration done!!".PHP_EOL;
		}
	}

}
