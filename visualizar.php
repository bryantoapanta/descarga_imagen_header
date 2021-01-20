 <?php
  if(isset($_POST["iniciar_descarga"])){
	 
$directory="descarga";
    $dirint = dir($directory);
    while (($archivo = $dirint->read()) !== false)
    {
        if (eregi("gif", $archivo) || eregi("jpg", $archivo) || eregi("png", $archivo)){
            echo "<img src='".$directory."/".$archivo."'  class='img-thumbnail'>";
        }
    }
    $dirint->close();
  }
  ?>