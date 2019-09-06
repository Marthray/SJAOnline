<?php
/**
 * 
 */
class MPersona extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function registerPerson($param){
		$datos = array(
			'CI' => $param['CI'],
			'NOMBRES' => $param['NOMBRES'],
			'APELLIDOS' => $param['APELLIDOS'],
		);

		$this->db->insert('persona', $datos);
		return $this->db->insert_id();
	}
	//Testing gitKraken
	public function registerUser($param){
		$datos = array(
			'USUARIO' => $param['USUARIO'],
			'PASSWORD' => sha1($param['PASSWORD']),
			'ID_PERSONA' => $param['ID_PERSONA'],
		);

		$this->db->insert('usuario', $datos);
	}
}