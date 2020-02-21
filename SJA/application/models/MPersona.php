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

    public function registerUser($param)
    {
        $datos = array(
            'USERNAME' => $param['USUARIO'],
            'PASSWORD' => sha1($param['PASSWORD']),
            'FK_ALUMNO' => $param['ID_PERSONA'],
        );

        $this->db->insert('usuario', $datos);
    }

    public function login($param) {
        $sql = "SELECT a.nombre, a.apellido FROM usuario u
                INNER JOIN alumno a on u.fk_alumno = a.ci 
                WHERE username = ? and password = ?";

        $result = $this->db->query($sql, array($param["USUARIO"], sha1($param["PASSWORD"])));

        if ($result->num_rows() == 1) {
            foreach ($result->result() as $row)
            {
                $nombre = $row->nombre;
                $apellido = $row->apellido;
            }
            $response["nombre"] = $nombre;
            $response["apellido"] = $apellido;
        }else{
            $response = null;
        }

        return $response;
    }
}
