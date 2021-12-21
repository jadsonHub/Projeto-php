<br><br><br><br>
<div class="col d-flex justify-content-center" style="margin-bottom: 100px;">
    <h1 style="font-size:70px;" class="text-white"><?php echo $title; ?></h1>
</div>
<div class="col d-flex justify-content-center text-white">

    <div class="card bg-dark" style="width: 30rem;">
        <div class="card-body">
            <form method="POST" action="/login" >
                <div class="d-flex justify-content-center">
                    <img src="/assets/img/login.gif" class=" img-perfil rounded-circle" alt="...">
                </div>

                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuário</label>
                    <input type="text" class="form-control" id="usuarioLogin" name='usuarioLogin'required>
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="senhaLogin" name="senhaLogin" required>
                </div>
                <button type="submit" class="btn btn-danger text-end">Entrar</button>
            </form>
            <br>
            <a href="/recuperar" class="text-white">Esqueceu a senha/user? clique aqui!</a>

        </div>
        
    </div>
    
</div>


<br><br><br>