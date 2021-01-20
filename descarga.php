<?php

$file = 'descarga/prueba.jpeg';
$type = 'image/jpeg';
header('Content-Type:' . $type);
header('Content-Length: ' . filesize($file));
header("Cache-Control: public");
header("Content-Description: File Transfer");
header("Content-Disposition: attachment; filename=descarga.jpeg");
header("Content-Transfer-Encoding: binary");

// Read the file
readfile($file);
exit;


/*
// validamos el envio el formualrio para que se active la creacion del comprimido
if(isset($_POST["iniciar_descarga"])){
// Variable con el metodo post envianda desde el Formulario
$direccion=trim($_POST["direccion"]);
$direccionweb = $direccion;
$metodocurl = curl_init();
curl_setopt($metodocurl, CURLOPT_URL, $direccionweb);
curl_setopt($metodocurl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($metodocurl, CURLOPT_SSLVERSION,3);
$curlDatos = curl_exec ($metodocurl);

curl_close ($metodocurl);
// Declaramos la ruta para almacenar los archivos descargados
$rutadescarga = "descarga/prueba.jpeg";
$ruta = "descarga";
chmod ($ruta, 0777); //Damos todos los permisos a las carpetas de lectura y escritura.
chmod ($ruta, 0777);

$miarchivo = fopen($rutadescarga, "w+");

fputs($miarchivo, $curlDatos);

fclose($miarchivo);

}


  if(isset($_POST["iniciar_descarga"])){
	 
$directory="descarga";
    $dirint = dir($directory);
    while (($archivo = $dirint->read()) !== false)
    {
      
            echo "<img src='".$directory."/".$archivo."'  class='img-thumbnail'>";
        
    }
    $dirint->close();
  }*/
  
  

  /*********************ESTE ES EL VALIDO************************** */

/*$fileName = basename("prueba.jpeg");
$filePath = 'descarga/' . $fileName;
echo $filePath;
echo "<br>" . $fileName;
  if (!empty($fileName) && file_exists($filePath)) {
    echo "existe";
    */
// Define headers
/*
$file = 'descarga/prueba.jpeg';
$type = 'image/jpeg';
header('Content-Type:' . $type);
header('Content-Length: ' . filesize($file));
header("Cache-Control: public");
header("Content-Description: File Transfer");
header("Content-Disposition: attachment; filename=descarga.jpeg");
header("Content-Transfer-Encoding: binary");

// Read the file
readfile($file);
exit;
 

/*
  $file = 'descarga/prueba.jpeg';
$type = 'image/jpeg';
header('Content-Type:'.$type);
header('Content-Length: ' . filesize($file));
readfile($file);*/
