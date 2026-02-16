<?php
// Dados de conexão

// ===== FUNÇÃO CONECTAR ======
// ============================
function conectar(){
  $server = "halley_wp.mysql.dbaas.com.br";
  $user   = "halley_wp";
  $pass   = "LDX0K4wHT9q@";
  $db     = "halley_wp";

  try {
      $pdo = new PDO("mysql:host=$server;dbname=$db", $user, $pass );
      $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); // EXIBIR ERROS
      $pdo->exec("SET CHARACTER SET utf8");

  } catch (\Throwable $th) {
      return $th;
      die;
  }

  return $pdo;
}

?>
