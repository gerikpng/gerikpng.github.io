<!DOCTYPE html>
<html>
<?php
session_start();

?>

<head>
    <script src="./js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="./js/script.js" type="text/javascript"></script>
</head>

<body>
    <!-- FORMULARIO DE CADASTRO DE CATEGORIAS-->
    <div class="container">
        <div class="content">
            <h1>Enter Details</h1>
            <div class="element">
                <input type="text" id="txt_name" placeholder="Name">
            </div>

            <div class="element">
                <input type="email" id="txt_email" placeholder="email">
            </div>

            
                
            <?php
                        //VERIFICA SE FORAM ENCONTRADOS BUSCAS NA BUSCA DO PRIMEIRO SQL
                       
                        if ($_SESSION["quantidadeCAT"] > 0) {
                            //inicio do dropbox fora do php para evitar erros de sintaxe 
                            //(não há necessidade de laço de repetição para esse trecho de codigo)
                            ?><div class="element">
                                <div>Languages you now?</div> <?php
                            //busca novamente os resultados da busca do primeiro sql no inicio, porem dessa vez não traz o numero de rows
                            //mas sim o conteúdo completo da busca em forma de array (cada campo da tabela do banco de dados equivale a um [] com seu proprio nome)
                            
                            //caso necessário, um segundo sql para uscar em outra tabela
                            //  $sql2 = "SELECT * FROM tb_categoria WHERE cat_id = '".$linha['cat_id']."';"; 
                            //  $Conexao->conectar();
                  //  $result_login2 = $Conexao->PesquisarSQL($sql2);
                 //   $Conexao->desconectar();
                        //      $linha2 = $result_login2->fetch_assoc();
                              
                         
                        
                              echo $_SESSION['linhaCAT']; 
                                 
                                 echo "</div>";
                               } else {
                                echo "Nenhum dado encontrado";
                              }
                        ?>
               
            

            <div class="element">
                <input type="button" value="Submit" id="submit">
            </div>
        </div>

        <div class="details">
            Name : <span id="name"></span><br />
            Email : <span id="email"></span><br />
            Languages : <span id="lang"></span><br />
            jQuery : <span id="foundjquery"></span>
        </div>
    </div>

</body>