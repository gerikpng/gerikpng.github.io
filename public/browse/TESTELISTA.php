

<!DOCTYPE html>
<html>
   <?php
   //CONECTA COM O BANCO DE DADOS
   require_once '../../../Model/Conexao.php';
    session_start();
    $Conexao = new Conexao();
    // PRIMEIRO SQL BUSCA TODOS OS RESULTADOS QUE QUEREMOS
    $sql = "SELECT * FROM tb_categoria WHERE emp_id = $_SESSION[emp_id]"; 
    //inicia o pbjeto
    $Conexao = new Conexao();

$Conexao->conectar();
$result_login = $Conexao->PesquisarSQL($sql);
$Conexao->desconectar();
//FAZ A CONTAGEM DE QUANTAS LINHAS DO BANCO DE DADOS FORAM RETORNADOS para ser usado no while mais tarde
$quantidade = mysqli_num_rows($result_login);
   ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=
        "width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity=
"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
  
   
  
    <title>To Do List</title>
</head>
   
<body>
  
    <div>
        <h2>Selecione as Categorias</h2>
   
        <label id="lblsuccess" style="display: none;">
        </label>
          
        <form id="addForm">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7">
                    <!--<input type="text" onkeyup=
                        "toggleButton(this, 'submit')"
                        class="form-control" id="item">-->
                        <?php
                        //VERIFICA SE FORAM ENCONTRADOS BUSCAS NA BUSCA DO PRIMEIRO SQL
                        if ($quantidade > 0) {
                            //inicio do dropbox fora do php para evitar erros de sintaxe 
                            //(não há necessidade de laço de repetição para esse trecho de codigo)
                            ?><select class="form-control" onkeyup="toggleButton(this, 'submit')" id="item"> <?php
                            //busca novamente os resultados da busca do primeiro sql no inicio, porem dessa vez não traz o numero de rows
                            //mas sim o conteúdo completo da busca em forma de array (cada campo da tabela do banco de dados equivale a um [] com seu proprio nome)
                            while ($linha = $result_login->fetch_assoc()) {
                            //caso necessário, um segundo sql para uscar em outra tabela
                            //  $sql2 = "SELECT * FROM tb_categoria WHERE cat_id = '".$linha['cat_id']."';"; 
                            //  $Conexao->conectar();
                  //  $result_login2 = $Conexao->PesquisarSQL($sql2);
                 //   $Conexao->desconectar();
                        //      $linha2 = $result_login2->fetch_assoc();
                              
                          
                              echo "<option>".$linha['cat_nome']."</option>";
                                 }
                                 echo "</select>";
                               } else {
                                echo "Nenhum dado encontrado";
                              }
                        ?>
                </div>
  
                <div class="col-lg-5 col-md-5 col-sm-5">
                  <input type="submit" class="btn btn-dark add_to_cart"
                        id="submit" value="Submit">
                        
                </div>
            </div>
        </form>
   
        <h3 class="mt-4">Categorias</h3>
   
        <form id="addForm">
            <ul class="list-group" id="items"></ul>
        </form>
    </div>
</body>

<script>

window.onload = () => {
    
    const form1 = document.querySelector("#addForm");
  
    let items = document.getElementById("items");
    let submit = document.getElementById("submit");
  
    let editItem = null;
  
    form1.addEventListener("submit", addItem);
    items.addEventListener("click", removeItem);
};
  
function addItem(e) {


    e.preventDefault();
  
    if (submit.value != "Submit") {
        
        
        console.log("Hello");
  
        editItem.target.parentNode.childNodes[0].data
            = document.getElementById("item").value;
  
        submit.value = "Submit";
        document.getElementById("item").value = "";
  
        document.getElementById("lblsuccess").innerHTML
            = "Text edited successfully";
  
        document.getElementById("lblsuccess")
                        .style.display = "block";
  
        setTimeout(function() {
            document.getElementById("lblsuccess")
                            .style.display = "none";
        }, 3000);
  
        return false;
    }
    
  
    let newItem = document.getElementById("item").value;
    if (newItem.trim() == "" || newItem.trim() == null)
        return false;
    else
        document.getElementById("item").value = "";
        
    let li = document.createElement("li");
    li.className = "list-group-item";
  
    let deleteButton = document.createElement("button");
  
    deleteButton.className = 
        "btn-danger btn btn-sm float-right delete";
  
    deleteButton.appendChild(document.createTextNode("Delete"));
  
    let editButton = document.createElement("button");
  
    editButton.className = 
            "btn-success btn btn-sm float-right edit";
  
    editButton.appendChild(document.createTextNode("Edit"));
  
    li.appendChild(document.createTextNode(newItem));
    li.appendChild(deleteButton);
    li.appendChild(editButton);
  
    items.appendChild(li);
    
    

        
    

}

  
function removeItem(e) {
    e.preventDefault();
    if (e.target.classList.contains("delete")) {
        if (confirm("Are you Sure?")) {
            let li = e.target.parentNode;
            items.removeChild(li);
            document.getElementById("lblsuccess").innerHTML
                = "Text deleted successfully";
               
            document.getElementById("lblsuccess")
                        .style.display = "block";
  
            setTimeout(function() {
                document.getElementById("lblsuccess")
                        .style.display = "none";
            }, 3000);
        }
    }
    if (e.target.classList.contains("edit")) {
        document.getElementById("item").value =
            e.target.parentNode.childNodes[0].data;
        submit.value = "EDIT";
        editItem = e;
    }
}

    </script>
   
</html>