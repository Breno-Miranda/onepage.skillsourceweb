<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->model('Home_Model'); // class model do banco 

		$dados['get_home'] = $this->Home_Model->get_home();

		$this->load->view('layout/site/index' , $dados);
	}
}
