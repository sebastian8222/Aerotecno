<?php
require_once 'persistencia/Conexion.php';
require_once 'persistencia/AdministradorDAO.php';
class Administrador{
    private $id;
    private $nombre;
    private $apellido;
    private $correo;
    private $clave;
    private $conexion;
    private $administradorDAO;
    
    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function getCorreo()
    {
        return $this->correo;
    }

    public function Administrador($id="", $nombre="", $apellido="", $correo="", $clave=""){
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> correo = $correo;
        $this -> clave = $clave;
        $this -> conexion = new Conexion();
        $this -> administradorDAO = new AdministradorDAO($this -> id, $this -> nombre, $this -> apellido, $this -> correo, $this -> clave);
    }
    
    public function autenticar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> administradorDAO -> autenticar());
        $this -> conexion -> cerrar();
        if($this -> conexion -> numFilas() == 1){
            $this -> id = $this -> conexion -> extraer()[0];
            return true;
        }else{
            return false;
        }                
    }
    
    public function consultar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> administradorDAO -> consultar());
        $this -> conexion -> cerrar();
        $datos = $this -> conexion -> extraer();
        $this -> nombre = $datos[0];
        $this -> apellido = $datos[1];
        $this -> correo = $datos[2];        
    }
    
}

?>