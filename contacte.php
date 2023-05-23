<?php
echo "Hola";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if (isset($_POST["mensaje"])) {
    $mensaje = $_POST["mensaje"];

    // Aquí puedes realizar cualquier acción que desees con el mensaje recibido, como almacenarlo en una base de datos o mostrarlo en la página.
    echo "Mensaje recibido: " . $mensaje;
  }
}
?>