<?php
/**
 * 
 */
class CLogin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mpersona');
    }

    public function index()
    {
        $this->load->view('vLogin');
    }

    public function openRegister() {
        $this->load->view('vRegister');
    }

    public function register()
    {
        /**Persona**/
        //$param['ID']
        $param['NOMBRE'] = $this->input->post('txtNombres');
        $param['APELLIDO'] = $this->input->post('txtApellidos');
        $param['CI'] = $this->input->post('txtCI');
        $param['SEXO'] = $this->input->post('optSexo');
        $param['FECHA_NACIMIENTO'] = $this->input->post('fechaNac');
        $param['DIRECCION_HABITACION'] = $this->input->post('txtDireccion');
        $param['HABILIDADES'] = $this->input->post('txtHabilidad');
        $idPersona = $this->mpersona->registerPerson($param);

        /**Usuario**/
        $paramUser['ID_PERSONA'] = $this->input->post('txtCI');
        $paramUser['USUARIO'] = $this->input->post('txtUser');
        $paramUser['PASSWORD'] = $this->input->post('txtPass');
        $this->mpersona->registerUser($paramUser);
    }

    public function login() {
        //$param['USUARIO'] = $this->input->post('txtUser');
        //$param['PASSWORD'] = $this->input->post('txtPass');
        $param['USUARIO'] = $_POST['user'];
        $param['PASSWORD'] = $_POST['password'];
        $data = $this->mpersona->login($param);
        if ($data){
            $this->load->view('vDashboard', $data);
        }else{
            $this->load->view('vLogin');
        }

        //$this->load->view('vDashboard');
    }
}
