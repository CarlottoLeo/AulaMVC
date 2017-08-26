<?php
  session_start();
 ?>
<html>
  <head>
    <title>Cadastro de Usuário Efetuado</title>
  </head>
  <body>
    <h1>Resultado</h1>
    <?php
      if (isset($_SESSION['user']) && isset($_SESSION['mail'])) {
        echo '<br>Usuário: ', $_SESSION['user'], '<br>Email: ', $_SESSION['mail'];
      }
     ?>
  </body>
</html>
