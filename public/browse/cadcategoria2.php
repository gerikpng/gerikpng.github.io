<!DOCTYPE html>
<html>
    <?php
    session_start();
    ?>
    <body>
        <!-- FORMULARIO DE CADASTRO DE CATEGORIAS-->
        <form action="../../../Controller/C_cadcategoria.php" method="POST">
            <label for="categoria">NOME</label>
            <input type="text" name="categoria" id="categoria"></input>
            <button>ENVIAR</button>
        </form>
        <!--
            NO CADASTRO DE CLIENTES CRIAR CHECKLIST INCREMENTANDO COM CATEGORIAS, A ADA UMA ESCOLHIDA O INPUT DROPA 
                LEMBRAR DE ADICIONAR BOTAO X PARA EXLUIR CATEGORIA ESCOLHIDA
            NO CONTROLER COM O SQL ADICIONAR IF'S E WHILE PARA EXECUTAR O CODIGO COM O ID DO CLIENTE E CADA CATEGORIA DIFERENTE DE CADA VEZ NA TABELA VINCULO

            CRIAR OUTRA PAGINA, DE EDITAR CLIENTES, AS CATEGORIAS SE TORNAM CHECKBOX PARA SELECIONAR OU NÃO CADA UM EM CADA CLIENTE, CRIAR PAGINAÇÃO
            PARA NÃO FICAR TÃO LONGO E CONFUSO. CRIAR CHECKBOX DE SELECIONAR TODOS,
            CRIAR UPDATE PARA CADA CLIENTE QUE TEVE DADOS ALTERADOS, CRIAR CAMPO PARA ACIONAR A CADA EDIÇÃO
            ANTES DE REDIRECIONAR CRIAR UM ECHO COM JS PARA VERIFICAR QUANTOS UPDATES SÃO ACIONADOS

        -->
    </body>
</html>