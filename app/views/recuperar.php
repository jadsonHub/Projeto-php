<div class="col d-flex justify-content-center" style="margin-bottom: 100px;">
    <h1 class="text-white" style="font-size:70px;"><?php echo $title; ?></h1>
</div>
<?php if ($validado === 1) { ?>
    <form action="" method="post">
        <div class="col d-flex justify-content-center text-white">

            <div class="card bg-dark" style="width: 40rem;">
                <div class="card-body text-white">
                    <p>Para recuperar sua conta infome seu email cadastrado no campo abaixo.</p>
                    <div class="mb-3 text-white">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email aqui" required>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php }

if ($validado === 2) { ?>
    <div class="col d-flex justify-content-center text-white">
        <form action="" method="post">
            <div class="card bg-dark" style="width: 40rem;">
                <div class="card-body text-white">
                    <p>Agora informe o token de validação que enviamos para o email cadastrado, e informa sua nova senha.</p>
                    <div class="mb-3 text-white">
                        <label for="email" class="form-label">Token</label>
                        <input type="text" class="form-control" id="token" name="token" placeholder="Digite seu token aqui" required>
                    </div>
                    <div class="mb-4 text-white">
                        <label for="senha_rec" class="form-label">Nova senha</label>
                        <input type="password" class="form-control" id="senha_rec" name="senha_rec" placeholder="Digite sua senha aqui" required>
                    </div>
                </div>

            </div>
    </div>
    </form>
<?php  } ?>