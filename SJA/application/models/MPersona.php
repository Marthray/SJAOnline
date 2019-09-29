<?php
/**
 *
 */
class MPersona extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function registerPerson($param)
    {
        $datos = array(
            'CI' => $param['CI'],
            'NOMBRE' => $param['NOMBRE'],
            'APELLIDO' => $param['APELLIDO'],
            'SEXO' => $param['SEXO'],
            'FECHA_NACIMIENTO' => $param['FECHA_NACIMIENTO'],
            'DIRECCION_HABITACION' => $param['DIRECCION_HABITACION'],
            'HABILIDADES' => $param['HABILIDADES']
        );

        $this->db->insert('alumno', $datos);
        return $this->db->insert_id();
    }
    //Testing gitKraken
    public function registerUser($param)
    {
        $datos = array(
            'USERNAME' => $param['USUARIO'],
            'PASSWORD' => sha1($param['PASSWORD']),
            'FK_ALUMNO' => $param['ID_PERSONA'],
        );

        $this->db->insert('usuario', $datos);
    }
}
