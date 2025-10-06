<?php

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

// SE ESTIVER LOGADO, REDIRECIONAR PARA ÁREA INTERNA
if(isset($_SESSION['email']) && isset($_SESSION['senhauser'])){
  echo '<script type="text/javascript">
          window.location.href = "https://site.com/painel";
        </script>';
  exit;
}

?>
