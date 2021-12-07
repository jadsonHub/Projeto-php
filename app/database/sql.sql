use progphp;

create table if not exists(
    id_user int(11) not null AUTO_INCREMENT,
    p_nome varchar(42) not null,
    s_nome varchar(42) not null,
    email varchar(24) not null,
    token varchar(40) not null,
    verificar_token varchar(40) not null,
    senha varchar(40) not null,
    img_perfil varchar(40) not null,
    PRIMARY KEY (id_user)
);