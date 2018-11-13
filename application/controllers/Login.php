<?php 
	/**
	* 
	*/
	class Login extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->model('modelo_usuario');
		}

		public function index()
		{
			$this->load->view('index');
		}

		public function login()
		{
			$this->form_validation->set_rules('email', 'Email','trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');

			if($this->form_validation->run() == FALSE)
			{
				$data = array(
						'error_message' => 'Parece que me quisiste infectar bribonsuelo' 
					);
				$this->load->view('index');
			}
			else
			{
				$data = array(
					'email' => $this->input->post('email'),
					'password' => $this->input->post('password') 
				);
				$result = $this->modelo_usuario->modelo_login($data);

				if($result != FALSE ) 
				{
					//var_dump($result);
					$session_data = array(
						'email' =>  $result[0]->email,
						'password' => $result[0]->password 
					);

					$this->session->set_userdata('logged_in', $session_data);
					$this->load->view('pages/logged_in', $data);
				}
				else
				{
					$data = array(
						'error_message' => 'Email o pass invalidos',
					);
					$this->load->view('index',$data);
				}

			}
		}
	}
 ?>