<!DOCTYPE html>
<html>
    
    <body>
    <div id="login" class="modal fade" role="dialog" style="font-family: 'Roboto Condensed', sans-serif;">
    <div class="modal-dialog">
        <!-- Modal content--> 
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body text-center">
             
    <form class="form-signin" method="POST" action="../../Controller/C_logar.php">
      <img class="mb-4 img-responsive" src="../frontend/img/logo2.png" width="50%">
      <h1 class="h3 mb-3 font-weight-normal">Realize seu Login</h1>
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" name="usu_nome" id="inputEmail" class="form-control" placeholder="Seu Email" required="" autofocus="">
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" name="usu_senha" id="inputPassword" class="form-control" placeholder="Sua senha" required="">
      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      <p class="mt-5 mb-3 text-muted">© ComFoco - 2022</p>
    </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

    </body>
</html>