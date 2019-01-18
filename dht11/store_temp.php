<?php

if (isset($_POST["data"])) {

  $temperature = $_POST["data"] ;
  $filename_temperature = "data.json" ;

  $op = file_put_contents($filename_temperature, $temperature) ;
  if (! $op) {
    echo "store error" ;
  }

} else {
  echo "data error" ;
}

?>
