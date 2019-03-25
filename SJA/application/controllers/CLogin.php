<?php
/**
 * 
 */
class CLogin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mpersona');
	}

	public function index(){
		$this->load->view('vLogin');
	}

	public function register(){
		/**Persona**/
		//$param['ID']
		$param['NOMBRES'] = $this->input->post('txtNombres');
		$param['APELLIDOS'] = $this->input->post('txtApellidos');
		$param['CI'] = $this->input->post('txtCI');

		$idPersona = $this->mpersona->registerPerson($param);

		/**Usuario**/
		$paramUser['ID_PERSONA'] = $idPersona;
		$paramUser['USUARIO'] = $this->input->post('txtUser');
		$paramUser['PASSWORD'] = $this->input->post('txtPass');
		$this->mpersona->registerUser($paramUser);

	}
}