<?php 

//----------VARIABLES----------//
$nombre= $_POST["nombre"];
$apellido= $_POST["apellido"];
$celular= $_POST["celular"];
/*$hombre= $_POST["hombre"];
$mujer= $_POST["mujer"];
$binario= $_POST["no binario"];
$clase1= $_POST["1"];
$clase2= $_POST["2"];
$clase3= $_POST["3"];*/

//----------CUERPO DE MENSAJE----------//
$mensaje= "este mensaje fue enviado por" . $nombre . $apellido . ",\r\n";
$mensaje. ="su telefono es" . $celular . ",\r\n";


//----------RADIO BUTTONS----------//
if (isset($_POST['seleccione su género'])) {
    echo '<p>es '.$_POST['seleccione su género'].'</p>' . ",\r\n";
}

echo "cantidad: "; echo $_POST['cantidad'] '<p> y ha seleccionado' .$_POST['seleccione su género']. '</p>';

$mensaje .="enviado el " . date('d/m/Y', time());
$destinatario = 'contacto.snipper7@gmail.com';
$asunto = 'enviado desde bypaulamakeup';

mail($destinatario, $asunto, $mensaje, utf8_decode($mensaje), $header);

header ('location:index.html');


?>

