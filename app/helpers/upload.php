<?php

function salvarImagem($nomeInput)
{
    // verifica se foi enviado um arquivo
    if (isset($_FILES[$nomeInput]['name']) && $_FILES[$nomeInput]['error'] == 0) {


        $arquivo_tmp = $_FILES[$nomeInput]['tmp_name'];
        $nome = $_FILES[$nomeInput]['name'];

        // Pega a extensão
        $extensao = pathinfo($nome, PATHINFO_EXTENSION);

        // Converte a extensão para minúsculo
        $extensao = strtolower($extensao);

        // Somente imagens, .jpg;.jpeg;.gif;.png
        // Aqui eu enfileiro as extensões permitidas e separo por ';'
        // Isso serve apenas para eu poder pesquisar dentro desta String
        if (strstr('.jpg;.jpeg;.gif;.png', $extensao)) {

            // Cria um nome único para esta imagem
            // Evita que duplique as imagens no servidor.
            // Evita nomes com acentos, espaços e caracteres não alfanuméricos
            $novoNome = uniqid(time()) . '.' . $extensao;

            // Concatena a pasta com o nome
            $destino = 'assets/img_perfil/' . $novoNome;


            // tenta mover o arquivo para o destino
            if (move_uploaded_file($arquivo_tmp, $destino)) {
                return $destino;
            }
        }
    }
    //se nao tiver foto vai uma default
    return '/assets/img/login.gif';
}
