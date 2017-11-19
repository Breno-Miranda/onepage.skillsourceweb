<?php 

class Home_Model extends CI_Model
{
	public function get_home()
	{
		return $this->db->get('tb_home')->result();
	}

	public function insert_home( Array $dados )
	{
		if(!empty($dados))
		{	
			return $this->db->insert('tb_home' , $dados);
		} else {
			return false;
		}
	}


	public function update_home( $id , $dados )
	{
		if(isset($id) && empty($dados))
		{
			$this->db->where('tb_home.id' , $id);
			return $this->db->get('tb_home')->row_array();

		} else if(isset($id) && !empty($dados)){

			$this->db->where('tb_home.id' , $id);
			return $this->db->update('tb_home' , $dados);

		} else {
			return false;
		}
	}

	public function delete_home( $id )
	{
		if(isset($id))
		{
			$this->db->where('tb_home.id' , $id);
			return $this->db->delete('tb_home');

		}else {
			return false;
		}
	}


}
