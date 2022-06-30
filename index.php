<!DOCTYPE html>
<!--
Inicio de projeto dir_1.0 06/2022
Paulo Albuquerque
-->
<html lang="pf-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //Incluso arquivo de config
        require './core/Config.php';
        //Incluso Composer autoload
        require './vendor/autoload.php';

        use Core\ConfigController as Home;
        $url = new Home();
        $url->carregar();   
        ?>
    </body>
</html>
