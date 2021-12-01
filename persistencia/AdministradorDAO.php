<?php
class AdministradorDAO{
    private $id;
    private $nombre;
    private $apellido;
    private $correo;
    private $clave;
    
    public function AdministradorDAO($id, $nombre, $apellido, $correo, $clave){
        $this -> id = $id;
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> correo = $correo;
        $this -> clave = $clave;
    }
    
    public function autenticar(){
        return "select idadministrador
                from administrador
                where correo = '" . $this -> correo . "' and clave = md5('" . $this -> clave . "')";
    }
    
    public function consultar(){
        return "select nombre, apellido, correo
                from administrador
                where idadministrador = '" . $this -> id . "'";
    }
    
}
?>