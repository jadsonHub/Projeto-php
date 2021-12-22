<br><br><br>
<div class="col d-flex justify-content-center" style="margin-bottom: 100px;">
    <h1 class="text-white" style="font-size:70px;"><?php echo $title; ?></h1>
</div>

<div class="col d-flex justify-content-center text-white">

    <div class="card bg-dark" style="width: 60rem;"> 
        <div class="card-body">
            <form class="row g-3 needs-validation"  method="post" action="/create" enctype="multipart/form-data" validate>


                <div class="text-center">
                    <div class="d-flex justify-content-center">
                        <img src="/assets/img/imagem1.jpg"  id='img_perfil_user' class="img-perfil rounded-circle" alt="...">
                    </div>
                    <div>
                        <label class="btn-img-perfil bg-danger" for="img_perfil">Adicionar foto de perfil</label>
                        <input type="file" name="img_perfil" id="img_perfil" accept="image/*" onchange="loadFile(event);">
                    </div>


                </div>
                <div class="col-md-4 position-relative">
                    <label for="nome" class="form-label">Primeiro nome</label>
                    <input type="text" class="form-control" id="nome" name="p_nome" >
                    <div class=" text-white valid-tooltip">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 position-relative">
                    <label for="sobrenome" class="form-label">Sobrenome</label>
                    <input type="text" class="form-control" id="sobrenome" name="s_nome" >
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 position-relative">
                    <label for="login" class="form-label">Nome de usuário</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="nome">@</span>
                        <input type="text" class="form-control" id="login" name="login" >
                        <div class="invalid-tooltip">
                            Please choose a unique and valid username.
                        </div>
                    </div>
                </div>
                <div class="col-md-4 position-relative">
                    <label for="senha" class="form-label">Senha</label>
                    <div class="input-group has-validation">
                        <input type="password" class="form-control" id="senha" name="senha" >
                        <div class="invalid-tooltip">
                            Please choose a unique and valid username.
                        </div>
                    </div>
                </div>
                <div class="col-md-6 position-relative">
                    <label for="validationTooltip03" class="form-label">Email</label>
                    <input type="email" class="form-control" id="validationTooltip03" name='email' >
                    <div class="invalid-tooltip">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-danger" type="submit" name="btn-cadastrar">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

