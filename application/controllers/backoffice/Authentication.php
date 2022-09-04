
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authentication extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('backoffice/Authentication_model', 'Auth');
	}

	public function index()
	{
		$data = [
			'title'               => 'Login | beasiswabilampung.com',
		];

		$page = '/backoffice/auth/v2/index';
		pageAuthV2($page, $data);
	}

	public function login()
	{
		$username   = $this->input->post('username');
		$password   = $this->input->post('password');
		$ceKemail   = $this->Auth->userCheck($username);
		if ($ceKemail->num_rows() > 0) {
			$dataUser    =  $ceKemail->row();
			if (password_verify($password, $dataUser->password)) {
				$this->session->set_userdata('username', $dataUser);
				$this->session->set_userdata('role', $dataUser->name);
				$this->session->set_userdata('user', $dataUser->username);
				switch ($dataUser->name) {
					case 'Admin':
						return redirect('backoffice/admin/dashboard');
						break;
					default:
						return redirect('backoffice');
						break;
				}
			} else {
				$this->session->set_flashdata('errorusername', 'username atau password anda salah!');
				redirect('backoffice');
			}
		} else {
			$this->session->set_flashdata('errorusername', 'username atau password anda salah!');
			redirect('backoffice');
		}
	}

	public function logout()
	{
		date_default_timezone_set("ASIA/JAKARTA");
		$date = array('last_login' => date('Y-m-d H:i:s'));
		$username = $this->session->userdata('user');
		$this->Auth->logout($date, $username);
		$this->session->sess_destroy();
		redirect(base_url('backoffice'));
	}
}
