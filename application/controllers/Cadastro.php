<?php 

class Cadastro extends CI_Controller
{

	public function index()
	{
		$this->load->model('Home_Model');

		$dados['get_home'] = $this->Home_Model->get_home();
		$dados['url'] = base_url('index.php/cadastro/gravar');

		$this->load->view('cadastro' , $dados);
	}

	public function gravar()
	{

		$this->load->model('Home_Model');

		if(!empty($_POST))
		{
			if($this->Home_Model->insert_home($_POST))
			{
				echo 'cadastro feito com sucesso.';
			} else {
				echo 'error de cadastro';
			}

		} else {
			echo 'Campos vazios';
		} 
	} 

	public function editar( $id )
	{

		$this->load->model('Home_Model');

		if(isset($id) && empty($_POST))
		{
			$dados['form'] = $this->Home_Model->update_home( $id , null );
			$dados['get_home'] = $this->Home_Model->get_home();
			$dados['url'] = base_url('index.php/cadastro/editar/'.$id);

			$this->load->view('cadastro' , $dados);

		} else if(isset($id) && !empty($_POST)){

			if($this->Home_Model->update_home( $id  , $_POST ))
			{
				echo 'editado com sucesso';
			} else {
				echo 'error ao editar';
			}

		} else {
			echo 'sem id';

		}
	}

	public function delete( $id )
	{
		$this->load->model('Home_Model');

		if(isset($id))
		{
			if($this->Home_Model->delete_home( $id ))
			{
				echo 'deletado com sucesso.';
			} else {
				echo 'error ao deletar';
			}

		} else {
			echo 'id vazio';
		}
	}
}