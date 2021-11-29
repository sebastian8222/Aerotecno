<?php 
$pid = "";
if(isset($_GET["pid"])){
    $pid = base64_decode($_GET["pid"]);    
}
?>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<?php
    include 'presentacion/encabezado.php';
    if($pid != ""){
        include $pid;
    }else{
        include 'presentacion/buscador.php';
    }    
?>

</html>