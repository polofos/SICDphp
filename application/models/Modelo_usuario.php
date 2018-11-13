<?php 
	/**
	* 
	*/
	class Modelo_usuario extends CI_Model
	{
		
		public function __construct()
		{
			$this->load->database();
		}

		public function modelo_login($data)
		{
			$condition = "email ="."'".$data['email']."' AND "."password ="."'".$data['password']."'";
			// $condition = "email='$data['email']' AND pass ='$data['pass']'";
			/*	$condition = "user_name =" . "'" . $data['username'] . "' AND " . "user_password =" . "'" . $data['password'] . "'";  */
			$this->db->from('User');
			$this->db->where($condition);
			$this->db->limit(1);
			$query = $this->db->get();

			if ($query->num_rows() === 1) 
			{
				return $query->result();
			}
			else
			{
				return FALSE;
			}


		}

		/*
		public function leer_usuario($email)
		{
			$condition = "email = $email";
			$this->db->from('User');
			$this->db->where
		}
		*/
	}
 ?>