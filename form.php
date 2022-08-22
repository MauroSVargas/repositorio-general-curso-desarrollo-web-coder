<?php 

//----------VARIABLES----------//
$nombre= $_POST["nombre"];
$apellido= $_POST["apellido"];
$celular= $_POST["celular"];

//----------CUERPO DE MENSAJE----------//
$mensaje= "este mensaje fue enviado por" . $nombre . $apellido . ",\r\n";
$mensaje. ="su telefono es" . $celular . ",\r\n";


//----------RADIO BUTTONS----------//
if (isset($_POST['submit'])) {
    if (isset($_POST['seleccioneSuGénero']))
        echo 'Has seleccionado'.$_POST['seleccioneSuGénero'];
    else
        echo 'Debes seleccionar una opción.';
}

echo "cantidad: "; echo $_POST['cantidad'] '<p> y ha seleccionado' .$_POST['cantidad']. '</p>';

$mensaje .="enviado el " . date('d/m/Y', time());
$destinatario = 'contacto.snipper7@gmail.com';
$asunto = 'enviado desde bypaulamakeup';

mail($destinatario, $asunto, $mensaje, utf8_decode($mensaje), $header);

header ('location:index.html');


?>

