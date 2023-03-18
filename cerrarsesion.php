<?php
  session_start();
  session_destroy();
  echo '<script>
  alert("CIERRE DE SESIÓN EXITOSA");
  location = "login.php";
  </script>';