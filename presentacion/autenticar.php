<?php
$correo = $_POST["correo"];
$clave = $_POST["clave"];

$administrador = new Administrador("", "", "", $correo, $clave);

if($administrador -> autenticar()){
    $_SESSION["id"] = $administrador -> getId();     
    $_SESSION["rol"] = "administrador";
    header("Location: index.php?pid=" . base64_encode("presentacion/sesionAdministrador.php"));
}else{
    echo "No se autentica";
}

?>