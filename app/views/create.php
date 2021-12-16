<br><br><br>
<div class="col d-flex justify-content-center" style="margin-bottom: 100px;">
    <h1 class="bg-" style="font-size:70px;"><?php echo $title; ?></h1>
</div>

<div class="col d-flex justify-content-center text-white">

    <div class="card bg-dark" style="width: 60rem;">
        <div class="card-body">
            <form class="row g-3 needs-validation" novalidate>


                <div class="text-center">
                    <div class="d-flex justify-content-center">
                        <img src="/assets/img/imagem1.jpg" class=" img-perfil rounded-circle" alt="...">
                    </div>
                    <label for="nome" class="form-label">Adicionar foto de Perfil</label>
                </div>
                <div class="col-md-4 position-relative">
                    <label for="nome" class="form-label">Primeiro nome</label>
                    <input type="text" class="form-control" id="nome" name="p_nome" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 position-relative">
                    <label for="sobrenome" class="form-label">Sobrenome</label>
                    <input type="text" class="form-control" id="sobrenome" name="s_nome" required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 position-relative">
                    <label for="login" class="form-label">Nome de usuário</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="nome">@</span>
                        <input type="text" class="form-control" id="login" name="login" required>
                        <div class="invalid-tooltip">
                            Please choose a unique and valid username.
                        </div>
                    </div>
                </div>
                <div class="col-md-4 position-relative">
                    <label for="senha" class="form-label">Senha</label>
                    <div class="input-group has-validation">
                        <input type="password" class="form-control" id="senha" name="senha" required>
                        <div class="invalid-tooltip">
                            Please choose a unique and valid username.
                        </div>
                    </div>
                </div>
                <div class="col-md-6 position-relative">
                    <label for="validationTooltip03" class="form-label">Email</label>
                    <input type="email" class="form-control" id="validationTooltip03" required>
                    <div class="invalid-tooltip">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-danger" type="submit">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>