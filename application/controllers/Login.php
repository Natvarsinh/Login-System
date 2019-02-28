<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->view('header');
		$this->load->view('footer');

		$this->load->model('login_model','log_m');
	}

	public function index()
	{
		
		if ($this->session->userdata('username')) {
			redirect('Login/dashboard');
		}
		else
		{
			$this->load->view('loginsystem');
		}
	}

	public function register(){

		$this->load->view('register');
	}

	public function dashboard(){
		$this->load->view('profile');
	}

	public function loginsystem(){

		$posted_data = $this->input->post();

		if (isset($posted_data['btn_login'])) {
			$this->form_validation->set_rules('txt_username', 'Username', 'trim|required');
			$this->form_validation->set_rules('txt_password', 'Password', 'trim|required|max_length[12]');

			$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

			if ($this->form_validation->run() == TRUE) {

				$data['username'] = $posted_data['txt_username'];
				$data['password'] = $posted_data['txt_password'];

				if ($this->log_m->isValidate('user',$data)) {

					$success = array('log_success'=>$this->session->set_flashdata('data', 'Login Successfully...'));
					
					$data = $this->session->set_userdata('username', $data['username']);
					redirect('login/dashboard');
				}
				else{

					$error =array('error'=> $this->session->set_flashdata('error', 'Invalid Username/Password'));

					$this->load->view('loginsystem',$error);
				}
			}
			else {

				$this->load->view('loginsystem');
			}
		}
		else{
			$this->load->view('loginsystem');
		}
	}

	public function registrationsystem(){

		$posted_data = $this->input->post();

		if (isset($posted_data['btn_register'])) {
			$this->form_validation->set_rules('txt_username', 'Username', 'trim|required');
			$this->form_validation->set_rules('txt_email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('txt_pass', 'Password', 'trim|required|min_length[5]|max_length[12]|alpha_numeric');
			$this->form_validation->set_rules('txt_c_pass', 'Confirm Password', 'trim|required|min_length[5]|max_length[12]|alpha_numeric|matches[txt_pass]');

			$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

			if ($this->form_validation->run() == TRUE) {

				$data['username'] = $posted_data['txt_username'];
				$data['email'] = $posted_data['txt_email'];
				$data['password'] = $posted_data['txt_pass'];
				$data['c_password'] = $posted_data['txt_c_pass'];

				if($this->log_m->add_user('user',$data)){
					redirect('login/index');
				}
				else{

					$this->load->view('register');
				}
			} 
			else {

				$this->load->view('register');
			}
		}
		else{
			$this->load->view('register');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->load->view('loginsystem');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
?>