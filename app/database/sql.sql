create database users;
use users;

create table if not exists user(
    id_user int(11) not null auto_increment primary key,
    p_nome varchar(40) not null,
    s_nome varchar(40) not null,
    email varchar(40) not null,
    token varchar(35),
    login varchar(30) not null,
    senha varchar(35) not null,
    img_perfil varchar(255)
);

insert into user(p_nome,s_nome,email,token,login,senha)values('teste 02','010101','@txt','13123123','jad','4545');