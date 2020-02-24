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
        $param['USUARIO'] = $_POST['user'];
        $param['PASSWORD'] = sha1($_POST['password']);
        $data = $this->mpersona->login($param);
        if ($data){
            $this->chargeSession($data);
            $this->load->view('vDashboard');
        }else{
            $this->load->view('vLogin', 'Usuario o llave invalida');
        }

        //$this->load->view('vDashboard');
    }

    private function chargeSession($data) {
        //Se inicializa la libreria de session
        $this->load->library('session');

        //Se setea todo el objeto de sesion
        $this->session->set_userdata(constants::SESSION_NAME, $data->nombre);
        $this->session->set_userdata(constants::SESSION_SURNAME, $data->apellido);
        $this->session->set_userdata(constants::SESSION_USER, $data->usuario);
        $this->session->set_userdata(constants::SESSION_EMAIL, $data->email);
        $this->session->set_userdata(constants::SESSION_PID, $data->cedula);
    }
}
