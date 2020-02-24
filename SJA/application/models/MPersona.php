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
        $sql = "SELECT u.username, p.nombre, p.apellido, p.ci, c.direccion FROM usuario u
                INNER JOIN personal p on u.fk_personal = p.ci 
                INNER JOIN correo c on c.fk_personal
                WHERE username = ? and password = ?";
        
        $passCiphered = sha1($param["PASSWORD"]);

        $result = $this->db->query($sql, array($param["USUARIO"], sha1($param["PASSWORD"])));

        if ($result->num_rows() == 1) {
            foreach ($result->result() as $row)
            {
                $nombre = $row->nombre;
                $apellido = $row->apellido;
                $user = $row->username;
                $email = $row->email;
                $ci = $row->ci;
            }
            $response["nombre"] = $nombre;
            $response["apellido"] = $apellido;
            $response["usuario"] = $user;
            $response["email"] = $email;
            $response["cedula"] = $ci;
        }else{
            $response = null;
        }

        return $response;
    }
}
