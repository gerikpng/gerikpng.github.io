<!DOCTYPE html>
<html>
    <?php
    session_start();
    ?>
    <body>
        <a href="./cadcategoria.php">CADASTRAR CATEGORIAS</a> <!-- ADICIONAR BOTAO DE -?- EXPLICANDO DEFINIÇÃO DE CATEGORIA COMO CATEGORIAS DE PRODUTOS OU SERVIÇOS, ESSE BOTAO DEVE SER CENTRAL COMO NO TEMPLATE EXEMPLO QUADRADO E GRANDE7  -->
        <a href="#"><?php echo($_SESSION['emp_nome'])  ?></a>
        <a href="./cadcliente.php"> CADASTRAR CLIENTE </a>

    </body>
</html>