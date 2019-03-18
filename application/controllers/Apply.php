<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2019-03-18
 * Time: 오후 2:03
 */

class Apply extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ApplyModel');
	}

	public function index($listStartNum = 0){

//		$this->output->enable_profiler(TRUE);

		$total_count = $this->ApplyModel->recode_count();

		$limitListCount = 5;

		$data['title'] = 'list';

		$this->load->library('pagination');

		$config['base_url'] = '/apply';
		$config['total_rows'] = $total_count;
		$config['per_page'] = $limitListCount;
		$config['uri_segment'] = 3;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();

		$data['applies'] = $this->ApplyModel->getAppliesList(FALSE,$limitListCount,$listStartNum);

		$this->load->view('templates/header', $data);
		$this->load->view('apply/index', $data);
		$this->load->view('templates/footer');
	}




	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Create';


		//todo:check duplication email

		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules(
			'name',
			'Name',
			'trim|required'
		);
		$this->form_validation->set_rules(
			'framework',
			'Framework',
			'trim|required'
		);

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header',$data);
			$this->load->view('apply/create');
			$this->load->view('templates/header');

		}else{

			$email =  $this->input->post('email');
			$name =  $this->input->post('name');
			$framework =  $this->input->post('framework');

			$this->ApplyModel->setApplyData($email, $name, $framework);

			$this->load->helper('url');
			redirect('apply');

		}
	}


	public function success(){

		$data['title'] = 'success';

		$this->load->view('templates/header',$data);
		$this->load->view('apply/success');
		$this->load->view('templates/header');
	}

}
