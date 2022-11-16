<!DOCTYPE html>
<html>
<?php
session_start();

?>

<head>
   
   
</head>

<body>
    <!-- FORMULARIO DE CADASTRO DE CATEGORIAS-->
    <div class="container">
        <div class="content">
            <form  action="../../../Controller/C_delcliente.php" method="POST">
            <h1>Enter Details</h1>
          
                <input type="text" id="id" name="id" placeholder="Name">

                <input type="submit" value="Submit">
      
            </form>
        </div>

        <div class="details">
            Name : <span id="name"></span><br />
            Email : <span id="email"></span><br />
            Languages : <span id="lang"></span><br />
            jQuery : <span id="foundjquery"></span>
        </div>
    </div>

</body>