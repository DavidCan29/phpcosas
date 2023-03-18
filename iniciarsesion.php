<?php
  require "conexion.php";

  $nombre = addslashes($_POST['nombre']);
  $contrasena = addslashes($_POST['contrasena']);

  $comparar = "SELECT * FROM entrenadores WHERE nombre = '$nombre' AND contrasena = '$contrasena'";

  $resultado = mysqli_query($conectar,$comparar);

  session_start();
  if(mysqli_num_rows($resultado)){
    $_SESSION['username'] = $nombre;
    $_SESSION['autentificado'] = 'SI';
    echo '<script>location = "panel.php";</script>';
    //header("Location: panel.php");
  } else {
    echo '<script>
    alert("ERROR EN LA AUTENTICACIÓN");
    location = "login.php";
    </script>';
  }

  mysqli_free_result($resultado);
  mysqli_close($conectar);
