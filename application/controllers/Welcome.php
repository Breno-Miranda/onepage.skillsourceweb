<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->model('Home_Model'); // class model do banco 


		$dados['get_home'] = $this->Home_Model->get_home();

		$this->load->view('welcome_message' , $dados);
	}
}
