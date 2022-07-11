<?php
    $texto='<html><body>';
    $texto.='<p><b>De: </b>'.$_REQUEST['Correo'].'</p>';
    $texto.='<p><b>Para: </b>contacto@orange.com</p>';
    $texto.='<p>Mi nombre es <b>'.$_REQUEST['nombre'].'</b>, soy de <em>'.$_REQUEST['estado'].', '.$_REQUEST['ciudad'].'</em> y quiero pedir su servico.</p>';
    $texto.='<p>'.$_REQUEST['mensaje'].'</p>';
    $texto.='<p>Llamar a: '.$_REQUEST['telefono'].'</p>';
    $texto.='</body></html>';

    header('Content-Type: application/force-download');
    header('Content-Disposition: attachment; filename="correo.doc"');
    header('Content-Transfer-Encoding: binary');
    print $texto;
    //echo "Algo";

function write_to_console($data) {
 $console = $data;
 if (is_array($console))
 $console = implode(',', $console);

 echo "<script>console.log('Console: " . $console . "' );</script>";
}
write_to_console("Hello World!");
write_to_console([1,2,3]);

?>

