<html>
    <head>
        <title>Cadastro de Usuário efetuado</title>
    </head>
    <body>
        <h1>Resultado</h1><p>
            <?php
            if(isset ($_GET['user']) && isset ($_GET['mail'])){
                echo '<br>Usuário:'.$_GET['user'].'<br>Email:'.$_GET['mail'];
            }
            ?>
    
    </body>
    
</html>