<?php
class User_model extends CI_Model{
	function __construct()
	{
		parent::__construct();
	}

	function login($name, $passwd)
	{
		$sql = "SELECT *
		             FROM  admin  
		             WHERE  name = ?
		             AND passwd = ?";
		$query = $this->db->query($sql, array($name,  $passwd));
		if($query->num_rows()  > 0)
		{
                                       return TRUE;
		}

		return FALSE;
	}
}